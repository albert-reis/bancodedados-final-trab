<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\contentCadastrarObratrarObra;
class CadastrarObraController extends Controller
{
    public function index () {
        return view('dashboard.contentCadastrarObra');
    }

    public function save (Request $request){
        dd($request);

        

    }
}
