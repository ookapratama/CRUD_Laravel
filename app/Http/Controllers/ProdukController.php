<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $data = Produk::all();
        return view('index', compact('data'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        Produk::create($request->all());
        return redirect('/');
    }

    public function edit($id) {
        $data = Produk::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request) {
        $data = Produk::find($request->id);
        $data->update($request->all());
        return redirect('/');
    }

    public function destroy($id) {
        Produk::find($id)->delete();
        return redirect('/');
    }
}
