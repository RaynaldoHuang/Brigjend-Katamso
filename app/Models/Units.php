<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = [
        'name',
    ];

    public function unitImage()
    {
        return $this->hasMany(UnitImage::class);
    }
}
