<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    // protected $fillable = [
    //     'name', 'email', 'password', 'is_approved',
    // ];

    // In app/Models/User.php

protected $fillable = [
    'name',
    'email',
    'password',
    'user_type', // Ensure this is here
    'is_approved', // Ensure this is here
    // other fields...
];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_approved' => 'boolean',
    ];
}
