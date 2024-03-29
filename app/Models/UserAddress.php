<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = ['user_id	','address','phone'];
    protected $table = 'user_addreses';
    public function products(){
        return $this->belongsTo(User::class);
    }
}
