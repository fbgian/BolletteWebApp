<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debtors extends Model
{
    //


    // Relazione con i debitori
    public function bills() {
        return $this->belongsToMany('App/Models/Bill');
    }
}
