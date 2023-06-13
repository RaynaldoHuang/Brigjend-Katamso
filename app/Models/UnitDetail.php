<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'unit_details';
    protected $primaryKey = 'unit_id';

    protected $fillable = [
        'unit_id',
        'title',
        'alt',
        'image',
        'description',
        'is_published',
        'created_by',
        'updated_by',
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
