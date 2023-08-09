<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'content','reference',
        'uuid','term_id','college_id','specialization_id'
       
      
    ];
}
