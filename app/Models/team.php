<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'designation', 'description', 'category_id', 'status'];


    public function category()
    {
        return $this->belongsTo(teamCategory::class);
    }
}


