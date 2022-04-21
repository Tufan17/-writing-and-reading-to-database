<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Araba extends Model
{

    use HasFactory;
    protected $table="araba";
    protected $fillable = ['name','fiyat'];
}
