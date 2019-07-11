<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    public function productos(){return $this->haMany('App/productos');}
   
}
