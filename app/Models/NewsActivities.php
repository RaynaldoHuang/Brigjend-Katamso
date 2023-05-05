<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsActivities extends Model
{
    use HasFactory;

    protected $table = 'news_activities';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'status',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
