<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;

       //relacion uno a muchos con el modelo User

       public function user()
       {
           return $this->belongsTo(User::class);
       }
}
