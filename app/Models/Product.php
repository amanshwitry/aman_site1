<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','price','category_id',
      
    ];





    public function category()
    {
        return $this->belongsTo(Category::class);
    }
/*   get  customers consume this product */
    public function customers()
    {
    return $this->belongsToMany(Customer::class, 'customer_product')->
                   using(CustomerProduct::class);
    
    }
    

}
