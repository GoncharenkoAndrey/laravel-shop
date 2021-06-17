<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function getCategory() {
        return Category::find($this->category_id);
    }
    public function category() {
        return $this->belongsTo(Product::class);
    }
    public function getPriceForCount($count) {
        if(!is_null($this->pivot)) {
            return $this->price * $this->pivot->count;
        }
        return $this->price;
    }
}
