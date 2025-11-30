<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'date',
        'diagnosis',
        'doctor',
        'patientId'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class, 'patientId');
    }
}
