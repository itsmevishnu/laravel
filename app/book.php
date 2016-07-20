<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
   public function note_relation()
   {
   		return $this->hasMany('\App\Notes');
   }
}
 