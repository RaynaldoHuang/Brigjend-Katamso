<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitExtra extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'unit_extras';

    protected $fillable = [
        'unit_id',
        'name',
        'alt',
        'image',
        'is_active',
        'created_by',
        'updated_by',
    ];

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Units::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
