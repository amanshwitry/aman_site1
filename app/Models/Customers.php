<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->hasMany(Item::class);
    }

   /*  get the customer */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   /*  customer has many product*/
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }


}
