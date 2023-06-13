<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitBrosur extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'unit_brosurs';

    protected $fillable = [
        'unit_id',
        'brosur',
        'year',
        'order',
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
        return $query->where('is_active', 1);
    }

    public function scopeYear($query, $year)
    {
        return $query->where('year', $year);
    }

    public function scopeOrder($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
