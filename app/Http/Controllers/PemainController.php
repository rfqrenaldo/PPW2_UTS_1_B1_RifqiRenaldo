<?php

namespace App\Http\Controllers;
use App\Models\pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        $pemain = Pemain::all();
        return view('pemain.index', ['pemain' => $pemain]);
    }

}



