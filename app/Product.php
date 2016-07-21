<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function seller()
    {
        return $this->belongsToMany(Seller::class);
    }

    public function customer()
    {
        return $this->belongsToMany(Customers::class);
    }
}
