<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.form');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        if (!$request->filled('foto')) {
            return redirect()->back()->with('error', 'Error. Field Gambar Produk Wajib diisi.');
        } else if (!$request->filled('nama')) {
            return redirect()->back()->with('error', 'Error. Field Nama Produk Wajib diisi.');
        } else if (!$request->filled('berat')) {
            return redirect()->back()->with('error', 'Error. Field Berat Wajib diisi.');
        } else if (!$request->filled('harga')) {
            return redirect()->back()->with('error', 'Error. Field Harga Wajib diisi.');
        } else if (!$request->filled('stok')) {
            return redirect()->back()->with('error', 'Error. Field Stok Wajib diisi.');
        } else if ($request->input('kondisi') == 0) {
            return redirect()->back()->with('error', 'Error. Field Kondisi Wajib diisi.');
        } else if (!$request->filled('deskripsi')) {
            return redirect()->back()->with('error', 'Error. Field Deskripsi Wajib diisi.');
        } else {
            DB::table('products')->insert([
                'foto' => $request->input('foto'),
                'nama' => $request->input('nama'),
                'berat' => $request->input('berat'),
                'harga' => $request->input('harga'),
                'stok' => $request->input('stok'),
                'kondisi' => $request->input('kondisi'),
                'deskripsi' => $request->input('deskripsi')
            ]);

            return redirect()->route('product');
        }
    }
}
