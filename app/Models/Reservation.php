<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = "reservation_transaction";

    public $timestamps = false;

    protected $primaryKey = 'reservation_id';
    protected $fillable = [
        'user_id', 
        'room_id', 
        'chosen_services',
        'CheckInDate', 
        'CheckOutDate', 
        'TotalCost',
        'ReservationDate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
