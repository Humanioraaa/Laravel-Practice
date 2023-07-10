<?php

namespace App\Http\Controllers;

use App\Models\TableData;
use Illuminate\Http\Request;

class Data extends Controller
{
    public function showing(){
        $data=TableData::all();
        return view('table', compact('data'));
    }
}
