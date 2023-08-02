<?php

namespace App\Http\Controllers;

use App\Models\karya;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class KomikController extends Controller
{
    // $komik = Karya::all();
    public function index() {
        return view('komik.index');
    }
   
}