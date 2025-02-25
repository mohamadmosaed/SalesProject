<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['category_ar','category_en'];

    use HasFactory;
    public function category() {
        return $this->hasMany(Product::class);
    }

}
