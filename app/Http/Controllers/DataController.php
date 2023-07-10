<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\TableData;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showing(Request $request)
    {
        $sortField = $request->query('sort', 'nama');
        $sortDirection = $request->query('direction', 'asc');

        $data = Data::orderBy($sortField, $sortDirection)->get();

        return view('table', compact('data', 'sortField', 'sortDirection'));
    }
}

