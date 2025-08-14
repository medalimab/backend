<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;


    protected $fillable = [
        'property_name',
        'property_id',
        'description',
        'address',
        'developer',
        'property_usage',
        'price',
        'property_size',
        'building_area',
        'year_built',
        'handover_date',
        'bedrooms',
        'bathrooms',
        'garage',
        'property_type',
        'property_status',
        'amenities',
        'property_furnishing',
        'image',
        'property_built_up_area',
        'property_parking_availability',
        'building_name',
        'building_parking_spaces',
        'number_elevators',
        'swimming_pool',
        'retail_centers',
        'total_floors',
        'user_id',
        'pdf',
        'agent_id',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Images::class);
    }
}
