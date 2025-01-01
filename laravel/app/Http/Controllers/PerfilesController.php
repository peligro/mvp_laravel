<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;
use App\Models\Perfiles;
use App\Models\PerfilesModulos;
use App\Helpers\Helpers;
class PerfilesController extends Controller
{
    public function __construct(
        protected Request $request2,
    ) { 
        if(Helpers::moduloEnPerfil($request2->session()->get('perfiles_id'), 3)==false)
        {
             abort(404);
        } 
    }
    public function perfiles_index()
    {
        $datos=Perfiles::orderBy('id', 'desc')->get();
        $modulos=Modulos::orderBy('nombre', 'asc')->get();
        return view("perfiles.index")->with(['datos'=>$datos, 'modulos'=>$modulos]);
    }
    
    public function perfiles_index_post(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
        ],
        [
            'nombre.required'=>'El campo Nombre está vacío'
        ]);
        if($request->input('accion')=="1")
        {
            $save=new Perfiles;
            $save->nombre=$request->nombre;
            $save->save();

            $modulos=Modulos::get();
            foreach($modulos as $key=>$modulo)
            {
                if(isset($_POST['modulo_'.$key]))
                {
                    $save2=new PerfilesModulos;
                    $save2->perfiles_id=$save->id;
                    $save2->modulos_id=$_POST['modulo_'.$key];
                    $save2->save();
                   
                }
            }
    
            return redirect()->route('perfiles_index')->with(['css'=>'success', 'mensaje'=>'Se creó el registro exitosamente']);
        }
       
    }
    public function perfiles_editar($id)
    {
        $datos=Perfiles::where(['id'=>$id])->firstOrFail();
        $modulos=Modulos::orderBy('nombre', 'asc')->get();
        return view("perfiles.editar")->with(['datos'=>$datos, 'modulos'=>$modulos]);
    }
    public function perfiles_editar_post(Request $request )
    {
        $validated = $request->validate([
            'nombre' => 'required',
        ],
        [
            'nombre.required'=>'El campo Nombre está vacío'
        ]);
        $datos=Perfiles::where(['id'=>$request->id])->firstOrFail();
        $save= Perfiles::where(['id'=>$request->id])->first();
        $save->nombre=$request->nombre;
        $save->save();

        PerfilesModulos::where(['perfiles_id'=>$datos->id])->delete();
        $modulos=Modulos::get();
        foreach($modulos as $key=>$modulo)
        {
            if(isset($_POST['modulo_'.$key]))
            {
                $save2=new PerfilesModulos;
                $save2->perfiles_id=$save->id;
                $save2->modulos_id=$_POST['modulo_'.$key];
                $save2->save();
                   
            }
        }

        return redirect()->route('perfiles_editar', ['id'=>$request->id])->with(['css'=>'success', 'mensaje'=>'Se modificó el registro exitosamente']);
    }
}
