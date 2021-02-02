<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CustomerProduct extends  Pivot
{
    use HasFactory;

    protected $casts = [
        'qnt' => 'integer',
    ];
   
    public $incrementing = true;
    }






}
