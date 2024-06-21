<?php
namespace App\Models;

use app\Http\Controllers\AuthController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Staff extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "staffs";
    protected $primaryKey = 'staff_id';

    public $timestamps = false;

    protected $fillable = [
        'user_name',
        'password',
        'staff_name',
        'age',
        'email',
        'phone_num'
    ];
}
