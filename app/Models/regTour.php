<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regTour extends Model
{
    use HasFactory;
    protected $table = 'reg_tours';
    protected $fillable = ['name','description','image','turismo','frecuencia','servicio','day1','day2','day3','day4','day5'];
}
