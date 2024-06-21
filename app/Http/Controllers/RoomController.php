<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth;
use App\Models\Room;
use App\Models\Reservation;
use Carbon\Carbon;

class RoomController extends Controller
{
    public function index(Request $request)
    {   
        $room1 = Room::find(1);
        $room2 = Room::find(6);
        $room3 = Room::find(11);
        return view('berres.rooms.all_rooms', compact('room1', 'room2', 'room3'));
    }

    public function updateRoom(){
        $now = Carbon::now();

        // Get reservations where the checkout date is in the past
        $reservations = Reservation::where('CheckOutDate', '<', $now)->get();

        foreach ($reservations as $reservation) {
            $room = Room::find($reservation->room_id);

            if ($room) {
                // Update room availability
                $room->Availability = 'available';
                $room->save();
            }
        }

        return redirect()->back()->with('success', 'Room availability updated successfully.');
    }
}