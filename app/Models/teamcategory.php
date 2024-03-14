<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teamcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','status'];

    public function teams()
    {
        return $this->hasMany(team::class, 'category_id', 'id');
    }

}
