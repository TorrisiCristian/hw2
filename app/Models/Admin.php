<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    //Imposto una variabile non modificabile
    protected $guarded = ['id'];

    public function songs()
    {
        
        return $this->hasMany('Song')->withTimestamps();
    }
}
