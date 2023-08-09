<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
<<<<<<< HEAD
 
    protected $fillable = [
        'content','reference',
        'uuid','term_id','college_id','specialization_id'
       
      
    ];
=======
    protected $fillable = [
        'name',
       'uuid' ,
        'content' ,
        'reference' ,
        'term_id',
        'college_id' ,
        'specializtion_id'


    ];

>>>>>>> fa3b9f849d04e2fbba0f7ddec880d04347a9985c
}
