<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
<<<<<<< HEAD
        'uuid','logo','category_id'
       
      
    ];
=======
       'uuid' , 'name' , 'logo' , 'category_id'
    ];

>>>>>>> fa3b9f849d04e2fbba0f7ddec880d04347a9985c
}
