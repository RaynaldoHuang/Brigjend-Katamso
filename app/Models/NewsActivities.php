<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsActivities extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'news_activities';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'status',
        'created_by',
        'updated_by',
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
