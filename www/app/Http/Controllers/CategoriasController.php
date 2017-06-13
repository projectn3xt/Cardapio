<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{

    /**
     * Undocumented function
     *
     * @return void
     */
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
    public function save(Request $request){

        # Atualiza | Update
        if($request->input('id'))
            $cat = Categorias::find($request->input('id'));
        # Insere | Insert    
        else
            $cat = new Categorias;

        $cat->categoria =  $request->input('categoria');
        $cat->categorias_id = $request->input('categoria_pai');
        $cat->descricao = $request->input('descricao');

        $cat->save();

        return redirect()->route('/categorias/add');

    }


}
