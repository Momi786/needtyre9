<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'name','type','mobile','email','password','img','status'
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
