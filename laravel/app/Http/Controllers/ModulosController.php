<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;
use App\Helpers\Helpers;
class ModulosController extends Controller
{
    public function __construct(
        protected Request $request2,
    ) { 
        if(Helpers::moduloEnPerfil($request2->session()->get('perfiles_id'), 2)==false)
        {
             abort(404);
        } 
    }
    public function modulos_index()
    {
        $datos=Modulos::orderBy('id', 'desc')->get();
        return view("modulos.index")->with(['datos'=>$datos]);
    }
    public function modulos_index_post(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
        ],
        [
            'nombre.required'=>'El campo Nombre está vacío'
        ]);
        if($request->input('accion')=="1")
        {
            $save=new Modulos;
            $save->nombre=$request->nombre;
            $save->save();
            return redirect()->route('modulos_index')->with(['css'=>'success', 'mensaje'=>'Se creó el registro exitosamente']);
        }
        if($request->input('accion')=="2")
        {
            $save= Modulos::where(['id'=>$request->id])->first();
            $save->nombre=$request->nombre;
            $save->save();
            return redirect()->route('modulos_index')->with(['css'=>'success', 'mensaje'=>'Se modificó el registro exitosamente']);
        }
    }
}
