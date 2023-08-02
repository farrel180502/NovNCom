<?php

namespace App\Http\Controllers;

use App\Models\karya;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class KomikController extends Controller
{
    // $komik = Karya::all();
    public function index()
    {
        // $data_karya = Karya::all();
        //return $data_karya;   
        return view('komik.index');
    }
    public function create() {
        return view('createkarya.createkomik');
    }

    public function store(Request $request) {

        $input = $request->all();
        karya::create($input);
        return view('profile.index');
        // return redirect('home')->with('success','Karya berhasil di Tambahkan');
    }
    public function viewkomik() {
        return view('viewkomik.index');
    }
}