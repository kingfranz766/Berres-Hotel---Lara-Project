<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Service;
use App\Models\User;
use App\Models\UserLog;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffDashController extends Controller
{
    public function index(Request $request){   
        $rooms = Room::all();
        $services = Service::all();
        $reservations = Reservation::all();
        $userlogs = UserLog::all();
        $users = User::all();

        $rawtotalcost = Reservation::sum('TotalCost');
        $totalcost = number_format($rawtotalcost, 2);

        $recentReservations = Reservation::orderBy('reservation_id', 'desc')->take(5)->get();
        $recentUsers = User::orderBy('user_id', 'desc')->take(5)->get();
        
        foreach ($recentReservations as $reservation) {
            // Fetch room details using room_id
            $room = Room::find($reservation->room_id);
            $user = User::find($reservation->user_id);
            // Attach room details to each reservation object
            $reservation->room = $room;
            $reservation->user = $user;
        }

        return view('dashboard.staff.staffdash', compact('rooms', 'services', 'reservations', 'userlogs', 'users', 'recentReservations', 'recentUsers', 'totalcost'));
    }

    public function users(Request $request){
        $users = User::all();

        return view('dashboard.staff.users', compact('users'));
    }

    public function user_logs(Request $request){
        $userlogs = UserLog::all();

        foreach ($userlogs as $log) {
            // Fetch user details using user_id
            $user = User::find($log->user_id);
            // Attach user details to each reservation object
            $log->user = $user;
        }

        return view('dashboard.staff.userlogs', compact('userlogs'));
    }

    public function rooms(Request $request){
        $rooms = Room::all();

        return view('dashboard.staff.rooms', compact('rooms'));
    }

    public function services(Request $request){
        $services = Service::all();
        
        return view('dashboard.staff.services', compact('services'));
    }

    public function reservations(Request $request){
        $reservations = Reservation::all();

        foreach ($reservations as $reservation) {
            // Fetch room details using room_id
            $room = Room::find($reservation->room_id);
            $user = User::find($reservation->user_id);
            // Attach room details to each reservation object
            $reservation->room = $room;
            $reservation->user = $user;
        }

        return view('dashboard.staff.reservations', compact('reservations'));
    }

    public function staff(Request $request){
        return view('dashboard.staff.add_staff');
    }

    public function add_staff(Request $request){
        $validatedData = $request->validate([
            'staff_name' => 'required|string',
            'age' => 'required|numeric',
            'user_name' => 'required|string|unique:staffs',
            'email' => 'required|email|unique:staffs',
            'password' => 'required|string',
            'phone_num' => 'required|string',
        ]);

        $staff = new Staff();
        $staff->user_name = $validatedData['user_name'];
        $staff->password = Hash::make($validatedData['password']); // Hash or encrypt the password
        $staff->staff_name = $validatedData['staff_name'];
        $staff->age = $validatedData['age'];
        $staff->email = $validatedData['email'];
        $staff->phone_num = $validatedData['phone_num'];
        $staff->save();

        return redirect()-> route('staff-dash-add-staff')->with('success', 'New Staff Added!');
    }

}