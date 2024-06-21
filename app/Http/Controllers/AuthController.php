<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Staff;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\Room;
use App\Models\UserLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }
    
    public function authenticate(Request $request)
    {   
        $userType = $request->input('user_type');
        // Login logic
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        User::where('email', $credentials);

        if($userType === 'Regular Customer'){
            if(Auth::attempt($credentials)){
                // Add userlogs record
                $user = Auth::user();
                $logTime = now()->setTimezone('Asia/Manila')->toTimeString();

                // Store login information in userlogs table
                UserLog::create([
                    'user_id' => $user->user_id,
                    'LoginDate' => now()->toDateString(),
                    'LoginTime' => $logTime,
                ]);
                $request->session()->regenerate();
                return redirect()->intended('/')-> with('success', 'Login Succesful!');
            }

            else{
                return redirect()-> route('login')-> with('error', 'Invalid Username or Password');
            }
        }

        else if($userType === 'Staff Member'){
            if(Auth::guard('staff')-> attempt($credentials)){
                return redirect()-> route('staff-dash')-> with('success', 'Login Succesful!');
            }

            else{
                return redirect()-> route('login')-> with('error', 'Invalid Username or Password');
            }
        }

        else{
            return redirect()-> route('login')-> with('error', 'Invalid User Type');
        }
    }

    public function logout(){
        $user = Auth::user();
        $logTime = now()->setTimezone('Asia/Manila')->toTimeString();

        UserLog::where('user_id', $user->user_id)
        ->whereNull('LogoutTime')
        ->update(['LogoutTime' => $logTime]);

        auth()-> logout();

        request()-> session()-> invalidate();
        request()->session()->regenerateToken();


        return redirect()-> route('login')-> with('success', 'Logout Succesful!');
    }

    public function staff_logout(){
        auth()-> logout();

        request()-> session()-> invalidate();
        request()->session()->regenerateToken();


        return redirect()-> route('login')-> with('success', 'Logout Succesful!');
    }

    public function signup(Request $request)
    {
        //Signup logic
        $validatedData = $request->validate([
            'user_full_name' => 'required|string',
            'age' => 'required|numeric',
            'user_name' => 'required|string|unique:users',
            'password' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_num' => 'required|string',
        ]);

        //Create new User in the database
        $user = new User();
        $user->user_full_name = $validatedData['user_full_name'];
        $user->age = $validatedData['age'];
        $user->user_name = $validatedData['user_name'];
        $user->password = Hash::make($validatedData['password']); // Hash or encrypt the password
        $user->email = $validatedData['email'];
        $user->phone_num = $validatedData['phone_num'];
        $user->CreatedAt = now()->toDateString();
        $user->save();

        return redirect()-> route('login')-> with('success', 'Signup Success! Login now to get started.');
    }

    public function reservation(Request $request){
        $rooms = Room::all();
        $services = Service::all();

        return view('auth.reservation', compact('rooms', 'services'));
    }

    public function store(Request $request){
        $roomTypeMap = [
            'Single Room' => [1, 5],
            'Double Room' => [6, 10],
            'Triple Room' => [11, 15],
        ];

        $roomRange = $roomTypeMap[$request->room_type];
        $room = Room::whereBetween('room_id', $roomRange)
                ->where('availability', 'available')->first();

        //No more room of said type
        if (!$room) {
            return back()->with('error', 'No rooms available for the selected room type.');
        }

        $roomPrice = Room::where('room_id', $room-> room_id)->value('PricePerNight');

        $request->validate([
            'room_type' => 'required|string|in:Single Room,Double Room,Triple Room',
            'chosen_service_ids' => 'required|string',
            'CheckInDate' => 'required|date',
            'CheckOutDate' => 'required|date|after_or_equal:CheckInDate',
        ]);

        $totalPrice = $request->input('total-price');

        // Calculate the duration of stay in days
        $checkInDate = new \DateTime($request->input('CheckInDate'));
        $checkOutDate = new \DateTime($request->input('CheckOutDate'));
        $duration = $checkInDate->diff($checkOutDate)->days;

        $roomPrice = $roomPrice * $duration;
        $totalPrice = $totalPrice * $duration;
        $totalPrice = $totalPrice + $roomPrice;

        $reservation = Reservation::create([
            'user_id' => auth()->id(),
            'room_id' => $room->room_id,
            'chosen_services' =>  $request-> chosen_service_ids,
            'CheckInDate' => $request->CheckInDate,
            'CheckOutDate' => $request->CheckOutDate,
            'TotalCost' => $totalPrice,
            'ReservationDate' => now()->toDateString()
        ]); 
        
        if ($room) {
            $room->availability = 'not available';
            $room->save();
        }

        return back()-> with('success', 'Reservation Successful!');
    }   

    
}
