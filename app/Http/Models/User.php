<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }
}
