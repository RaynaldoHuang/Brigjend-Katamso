<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = [
        'image',
    ];

    public function detail()
    {
        return $this->hasOne(UnitDetail::class, 'unit_id', 'id');
    }

    public function program()
    {
        return $this->hasMany(UnitProgram::class, 'unit_id', 'id');
    }
}
