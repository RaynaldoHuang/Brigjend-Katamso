<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitProgram extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'unit_programs';

    protected $fillable = [
        'unit_id',
        'title',
        'description',
        'alt',
        'image',
        'is_published',
        'created_by',
        'updated_by',
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
