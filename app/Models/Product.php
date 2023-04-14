<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','description','category_id','image','quantity'];
    protected $table = 'products';

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
