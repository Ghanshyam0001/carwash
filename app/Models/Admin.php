<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Authenticatable implements AuthenticatableContract
{
    // Define the table associated with the model
    protected $table = 'admins';

    // Fillable fields for mass assignment
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Hidden fields from JSON serialization
    protected $hidden = [
        'password', 'remember_token',
    ];
}
