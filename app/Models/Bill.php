<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model {

    protected $table = 'bills';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    
    // Realazione One-To-One con Category
    public function debtors() {
        return $this->belongsToMany('App/Models/');
    }

}
