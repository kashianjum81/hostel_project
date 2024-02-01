<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'phone',
        'email',
        'bookingdate',
        'selected_room',
        'mess',
        'complain',
    ];
}
