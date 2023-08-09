<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
       'uuid' ,
        'content' ,
        'reference' ,
        'term_id',
        'college_id' ,
        'specializtion_id'


    ];

}
