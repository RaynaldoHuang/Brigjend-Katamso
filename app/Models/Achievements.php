<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievements extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'achievements';

    protected $fillable = [
        'title',
        'student_name',
        'description',
        'type',
        'date',
        'image',
        'is_published',
        'created_by',
        'updated_by',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}
