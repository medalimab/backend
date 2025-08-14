<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'cta_text',
        'cta_link',
        'form_title',
        'description',
        'success_message',
        'payment_plan',
        'handover_date',
        'property_type',
        'developer_name',
        'bedroom_range',
        'location',
        'map_link',
        'starting_price',
        'payment_plan_title',
        'payment_plan_description',
        'payment_milestones',
        'floor_plans',
        'videos',
    ];

    protected $casts = [
        'videos' => 'array',
        'handover_date' => 'date',
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function heroImage()
    {
        return $this->hasOne(ProjectImage::class)->where('type', 'hero');
    }

    public function galleryImages()
    {
        return $this->hasMany(ProjectImage::class)->where('type', 'gallery');
    }

    public function projectPhotos()
    {
        return $this->hasMany(ProjectImage::class)->where('type', 'project_photo');
    }
}