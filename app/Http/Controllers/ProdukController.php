<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            [
                'nama' => 'Zen Body Soap',
                'berat' => '70',
                'harga' => '14000',
                'stok' => '120',
                'kondisi' => 'Baru',
                'deskripsi' => 'Sandalwood dipadu kekuatan Japanese Red Shiso sebagai antibakteri alami. Berfungsi sebagai anti-aging alami. Membantu mengurangi kerutan dan meningkatkan kelembaban alami kulit.',
                'foto' => asset('assets/zen.png')
            ],
            [
                'nama' => 'Wardah Foam Wash',
                'berat' => '100',
                'harga' => '28000',
                'stok' => '50',
                'kondisi' => 'Baru',
                'deskripsi' => 'Kini hadir foam pencerah yang bersihkan wajah dari kotoran dan debu secara menyeluruh sekaligus melembapkan dan melembutkan kulit untuk wajah tampak cerah, lembut, dan glowing.',
                'foto' => asset('assets/wardah.png')
            ],
            [
                'nama' => 'Marina Extra SPF 30',
                'berat' => '100',
                'harga' => '22000',
                'stok' => '187',
                'kondisi' => 'Baru',
                'deskripsi' => 'Hand & body lotion dengan kandungan SPF 30 PA++ , Acaiberry, Collagen, serta Vitamin B3 & E yang teruji klinis memberikan 2x perlindungan ekstra dari paparan sinar UVA UVB dan polusi.',
                'foto' => asset('assets/marina.jpg')
            ]
        ];

        $baru = Session::get('produk');

        return view('product.index', ['produk' => array_merge($data, [$baru])]);
    }

    public function create()
    {
        return view('product.form');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validasi = $request->validate([
            'nama' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama.required' => 'Kolom nama harus diisi!',
            'berat.required' => 'Kolom berat harus diisi!',
            'harga.required' => 'Kolom harga harus diisi!',
            'stok.required' => 'Kolom stok harus diisi!',
            'kondisi.required' => 'Kolom kondisi harus diisi!',
            'deskripsi.required' => 'Kolom deskripsi harus diisi!',
        ]);

        if ($validasi) {
        } else {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $baru = [
            'nama' => $request->input('nama'),
            'berat' => $request->input('berat'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'kondisi' => $request->input('kondisi'),
            'deskripsi' => $request->input('deskripsi'),
            'foto' => $request->input('foto', asset('assets/new-produk.jpg'))
        ];

        Session::put('produk', $baru);

        return redirect()->route('katalog');
    }
}
