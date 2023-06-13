<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Units extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'units';

    protected $fillable = [
        'image',
        'created_by',
        'updated_by',
    ];

    public function detail()
    {
        return $this->hasOne(UnitDetail::class, 'unit_id', 'id');
    }

    public function program()
    {
        return $this->hasMany(UnitProgram::class, 'unit_id', 'id');
    }

    public function extra()
    {
        return $this->hasMany(UnitExtra::class, 'unit_id', 'id');
    }
}
