<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Uno a uno inversa
    public function user(){
        // $user = User::find($this->user_id);
        // return $user;

        return $this->belongsTo('App\Models\User');
    }
}
