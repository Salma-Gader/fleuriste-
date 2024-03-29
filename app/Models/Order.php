<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','status','payment_method','total_price','address','date'];
    protected $table = 'orders';
    public function user(){
        return $this->belongsTo(User::class);
    }
}
