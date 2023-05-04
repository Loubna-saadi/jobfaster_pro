<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
