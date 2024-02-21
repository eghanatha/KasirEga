<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $data['pelanggan'] = Pelanggan::all();
        return view('pelanggan', $data);
    }
}
