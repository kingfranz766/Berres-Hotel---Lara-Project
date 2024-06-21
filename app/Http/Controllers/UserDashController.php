<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;

class UserDashController extends Controller
{
    public function index(Request $request)
    {
        return view('berres.home');
    }

    public function userdash(Request $request)
    {   
        $userId = auth()->id();
        $rooms = Room::all();
        if ($userId) {
            // Fetch all reservations for the authenticated user
            $reservations = Reservation::where('user_id', $userId)->get();

            // Loop through reservations and fetch room details
            foreach ($reservations as $reservation) {
                // Fetch room details using room_id
                $room = Room::find($reservation->room_id);

                // Attach room details to each reservation object
                $reservation->room = $room;
            }

            // Pass reservations to the view
            return view('dashboard.user.userdash', compact('reservations'));
        }
    }

    public function profile(Request $request)
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }
}