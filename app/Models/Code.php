<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
    protected $fillable = [
      
       'uuid' , 'value' , 'user_id' , 'specializtion_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
}
