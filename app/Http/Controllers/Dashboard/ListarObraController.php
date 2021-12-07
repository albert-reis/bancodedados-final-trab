<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Obra;
use Illuminate\Http\Request;

class ListarObraController extends Controller
{
    public function index () {
        //$obras = Obra::all();
        $obras = Obra::where('title', 'exists', true)->get();
        return view('dashboard.content-listar-obra', compact('obras'));
    }
}
