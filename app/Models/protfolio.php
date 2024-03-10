<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class protfolio extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','image','clientname','url','category_id','status'];

    public function category()
    {
        return $this->belongsTo(pcategory::class);
    }
}
