<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'department_id'
    ];
    
    protected $hidden = ['created_at', 'updated_at'];
    
    /**
     * Get the department that owns the category.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
