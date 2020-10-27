<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debtors extends Model
{
    protected $table = 'debtors';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;


    // Relazione con i debitori
    public function bills() {
        return $this->belongsToMany('App/Models/Bill');
    }
}
