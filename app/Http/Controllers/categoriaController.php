<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Reserva;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class categoriaController extends Controller
{
    public function verCate(Request $request){
        $cat=Categoria::all();
        $verres=Reserva::all();
        $cont=0;
        foreach ($verres as $item){
            if ($item->status=='1'){
                $cont++;
            }
        }
        return view("categoria.regcate", compact('cat','cont'));
    }
    public function guardarCate(Request $request){
        $this->validate($request,[
            'nombre'=>'required|regex:/^[a-zA-ZÀ-ÿ0-9.\s]+$/',
        ]);
        $gtour = new Categoria();
        $gtour->nombre = $request->input('nombre');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('imagenesTour/tours/',$filename);
            $gtour->image = $filename;
        }
        $gtour->save();
        $cat=Categoria::all();
        return redirect()->back();
    }

    public function editarcate($id){
        $eTour = Categoria::find($id);
        $verres=Reserva::all();
        $cont=0;
        foreach ($verres as $item){
            if ($item->status=='1'){
                $cont++;
            }
        }
        return view('categoria.editarcate', compact('eTour','cont'));
    }

    public function actualizarcate(Request $request,$id){
        $this->validate($request,[
            'nombre'=>'required|regex:/^[a-zA-ZÀ-ÿ0-9.\s]+$/',
        ]);
        $atour = Categoria::find($id);
        $atour->nombre = $request->input('nombre');
        if($request->hasfile('image')){
            $destination='imagenesTour/tours/'.$atour->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('imagenesTour/tours/',$filename);
            $atour->image = $filename;
        }
        $atour->update();
        Session::flash('mensaje','La Categoria se Editó y Guardo con Exito!!.');
        return redirect()->back();
    }

    public function eliminarcate($id){
        $dTour= Categoria::find($id);
        $dTour->delete();
        return redirect()->back()->with('statusDelete','Eliminado con exito');
    }
}
