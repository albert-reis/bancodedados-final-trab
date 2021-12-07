<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obra;
class CadastrarObraController extends Controller
{
    public function index () {
        return view('dashboard.contentCadastrarObra');
    }

    public function save (Request $request){
        //dd($request);

        $data = new Obra($request->all());
        $data->save();

        if($data)
        {
            return redirect()->route('admin');
        }
        else
        {
            return back();
        }


    }
}
