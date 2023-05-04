<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'job_id', 'cv'];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function user()
{
    return $this->belongsTo(\App\Models\User::class);
}
    public function jobOffer()
{
    return $this->belongsTo(\App\Models\JobOffer::class);
}


}
