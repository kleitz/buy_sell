<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function order()
    {
        return $this->belongsToMany(order::class);
    }
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
