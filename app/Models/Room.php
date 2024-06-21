<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = "rooms";

    public $timestamps = false;

    protected $primaryKey = 'room_id';
    protected $fillable = [
        'RoomNumber',
        'RoomType',
        'PricePerNight',
        'Availability'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
