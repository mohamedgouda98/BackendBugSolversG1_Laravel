<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = ['name', 'phone_number', 'email','is_pass'];
}
