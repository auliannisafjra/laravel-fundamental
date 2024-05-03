<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class KatalogController extends Controller
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

        if ($baru) {
            $data[] = $baru;
        }

        return view('katalog.index', ['produk' => $data]);
    }

    public function create()
    {
        return view('katalog.form');
    }

    public function store(Request $request)
    {
        if (!$request->filled('nama')) {
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
}
