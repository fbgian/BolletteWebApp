<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model {

    protected $table = 'bills';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;

    
    // Realazione One-To-One con Category
    public function prodCat() {
        return $this->hasOne(Category::class, 'id_cat', 'id_cat');
    }

}
