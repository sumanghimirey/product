<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=[
        'title','image','price','description','category_id'
        
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
