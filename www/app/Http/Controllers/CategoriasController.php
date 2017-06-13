<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{

    public function show()
    {
        $data['categorias'] = Categorias::all();
        return view('categorias.index',$data);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function add(Request $request){

        $cat = new Categorias;
        $cat->categoria =  $request->input('categoria');
        $cat->categorias_id = $request->input('categoria_pai');
        $cat->descricao = $request->input('descricao');

        $cat->save();

    }

}
