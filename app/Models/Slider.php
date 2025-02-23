<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title','image', 'url', 'url_title'];

    public $path = "images/sliders/";

    public function getImageAttribute($value)
    {
        return 'storage/' . $this->path . $value;
    }
}
