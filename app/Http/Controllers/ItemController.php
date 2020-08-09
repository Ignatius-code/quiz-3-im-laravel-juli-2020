<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create() {
    	return view('create');
    }
    public function store(Request $request) {
    	$request->validate([
    		'nama' => 'required|unique:Items',
    		'jabatan' => 'required'
    	]);
    	$query = DB::table('karyawan')->insert([
    		"nama" => $request["nama"],
    		"jabatan" => $request["jabatan"]
    	]);

    	return redirect('/items/create');
    }
}
