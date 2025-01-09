<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug','department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
