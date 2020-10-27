<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model {

    protected $table = 'bills';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    
    // Relazione con i debitori
    public function debtors() {
        return $this->belongsToMany('App/Models/Debtor');
    }

}
