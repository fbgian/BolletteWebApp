<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bill;

class ShowBills extends Controller {
    protected $_billModel;

    public function __construct() {
        $this->_billModel = new Bill;
    }

    public function showAllBills() {
        $bills = DB::table('bills')->get();
        return view('home')
            ->with('bills' , $bills);
    }
}
