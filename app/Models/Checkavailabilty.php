<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkavailabilty extends Model
{
    use HasFactory;
    protected $table = 'checkavailabitlies';
    protected $fillable=[
      'bookingdate',
      'no_persons',
      'are_you_student'
    ];
}
