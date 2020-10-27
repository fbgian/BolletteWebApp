<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debtor extends Model
{
    protected $table = 'debtors';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;


    // Relazione con le bollette
    public function bills() {
        return $this->belongsToMany('App/Models/Bill');
    }
}
