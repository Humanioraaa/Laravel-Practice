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


    public function add()
    {
        $barang = Data::all();
        return view('/form', [
            'barang' => $barang
        ]);
    }


    public function store(Request $request)
    {
        $barang = Data::create($request->all());

        return redirect('/form');
    }

    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        $data->delete();

        return redirect('/table')->with('success', 'Data deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $data=Data::find($id);

        return view('/form-update', compact('data'));
    }


    public function updated($id, Request $request){
        $data=Data::find($id);
        $data-> id = $request->input('id');
        $data-> nama = $request->input('nama');
        $data-> harga = $request->input('harga');
        $data-> size = $request->input('size');
        $data-> fungsi = $request->input('fungsi');
        $data->save();



        return redirect('/table');
    }
}

