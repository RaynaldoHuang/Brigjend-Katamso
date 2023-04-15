<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnitImage extends Model
{
    use HasFactory;

    protected $table = 'unit_images';

    protected $fillable = [
        'unit_id',
        'alt',
        'type',
        'image',
        'is_main',
        'is_published',
    ];

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Units::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

}
