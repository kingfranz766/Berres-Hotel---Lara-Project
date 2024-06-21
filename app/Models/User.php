<?php

namespace App\Models;

use app\Http\Controllers\AuthController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $table = "users";

    public $timestamps = false;
    
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_full_name',
        'age',
        'user_name',
        'password',
        'email',
        'phone_num',
        'CreatedAt'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
