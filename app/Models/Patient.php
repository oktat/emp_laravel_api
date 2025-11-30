<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name', 
        'birthDate', 
        'socialNumber', 
        'phone'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];    
}
