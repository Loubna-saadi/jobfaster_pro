<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    protected $fillable = ['title', 'description', 'requirements', 'salary', 'company_id'];


    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }
}







