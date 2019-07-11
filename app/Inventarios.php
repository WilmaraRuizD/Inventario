<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventarios extends Model

{
    protected $table = "inventarios";
    protected $fillable = ['nombre','stock','N_lote','vence','precio'];


    //Buscador por nombre del producto
    public function scopeNombre($query,$nombre){
    	return $query->where('nombre','LIKE','%'.$nombre.'%');
    }

    //Buscador por precio desde
    public function scopePrecio1($query,$precio1){
    	if($precio1)
    		return $query->where('precio','>=',$precio1);
    }

    //Buscador por precio desde
    public function scopePrecio2($query,$precio2){
    	if($precio2)
    		return $query->where('precio','<=',$precio2);
    }
}
