<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageConfig extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'image_config';

    // APPENDS
    protected $appends = ['image_link'];

    // MODIFY WHEN GET DATA ===>
    // set generate link when image not from url
    public function getImageLinkAttribute()
    {
        if (isset($this->attributes['image'])) {
            $data = $this->attributes['image'];
            if ($data || !str_contains($data, 'http:') || !str_contains($data, 'https:')) {
                return \URL::asset($data);
            }
        }
        return "";
    }
}
