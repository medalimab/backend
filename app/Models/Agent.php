<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'full_name',
        'job_title',
        'phone',
        'whatsapp',
        'email',
        'position',
    ];
}
