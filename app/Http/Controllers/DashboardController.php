<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = [[
            'menu' => 'Espresso',
            'harga' => 'Rp. 18.000',
            'deskripsi' => 'Espresson adalah minuman kopi khas Italia yang disajikan dalam cangkir kecil. Ini dibuat dengan mengestrak kopi yang sangat pekat dari bubuk kopi halus..',
            'foto' => asset('assets/espresso.jpg')
        ],
        [
            'menu' => 'Macchiato',
            'harga' => 'Rp. 20.000',
            'deskripsi' => 'Macchiato adalah minuman kopi yang berasal dari Italia yang terdiri dari espresso yang dicampur dengan sedikit susu atau busa susu. Nama "macchiato"..',
            'foto' => asset('assets/macchiato.jpg')
        ],
        [
            'menu' => 'Latte',
            'harga' => 'Rp. 25.000',
            'deskripsi' => 'Latte adalah minuman kopi yang populer yang terdiri dari espresso dicampur dengan susu panas dan ditutupi dengan lapisan busa susu. Rasio kopi dengan..',
            'foto' => asset('assets/coffeelatte.jpg')
        ],
        [
            'menu' => 'Capuccino',
            'harga' => 'Rp. 19.000',
            'deskripsi' => 'Capuccino adalah minuman kopi yang terdiri dari espresso, susu panas, dan busa susu. Minuman ini memiliki rasio kopi dengan susu yang seimbang, yaitu..',
            'foto' => asset('assets/cappucino.jpg')
        ],
    ];

        return view('layouts.main', ['products' => $data]);
    }
}
