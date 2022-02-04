<?php

namespace App\Models;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }
}
