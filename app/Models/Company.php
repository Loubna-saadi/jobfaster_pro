<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Company extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $guard = 'company';
    protected $fillable = [
        'company_name',
        'speciality',
        'address',
        'email',
        'phone',
        'password',
        'photo',
    ];

    protected $hidden = [
        'password', 'remember_token',
      ];
}
