<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use softDeletes;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'categoria', 'cantidad'];
}
