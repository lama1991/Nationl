<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
<<<<<<< HEAD
        'uuid','logo'
       
      
    ];
=======
       'uuid' , 'name' , 'logo'
    ];

>>>>>>> fa3b9f849d04e2fbba0f7ddec880d04347a9985c
}
