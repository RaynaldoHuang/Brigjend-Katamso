<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarouselImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'is_active',
        'created_by',
        'updated_by',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
