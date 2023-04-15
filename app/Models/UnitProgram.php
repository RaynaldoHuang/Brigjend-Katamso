<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitProgram extends Model
{
    use HasFactory;

    protected $table = 'unit_programs';

    protected $fillable = [
        'unit_id',
        'title',
        'description',
        'alt',
        'image',
        'is_published',
    ];

    public function unit()
    {
        return $this->belongsTo(Units::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
