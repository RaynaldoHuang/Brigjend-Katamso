<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnitExtra extends Model
{
    use HasFactory;

    protected $table = 'unit_extras';

    protected $fillable = [
        'unit_id',
        'name',
        'alt',
        'image',
        'is_active',
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
