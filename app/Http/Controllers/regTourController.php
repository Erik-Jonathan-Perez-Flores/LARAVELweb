<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Reserva;
use App\Models\regTour;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class regTourController extends Controller
{
    public function vertour(){
        $sessiontipo=session('sessiontipo');
        $sessionusuario=session('sessionusuario');
        $cat=Categoria::all();
        $verres=Reserva::all();
        $cont=0;
        foreach ($verres as $item){
            if ($item->status=='1'){
                $cont++;
            }
        }
        $mtour=DB::table('reg_tours')->select('id','name','description','image','turismo','frecuencia','servicio','day1','day2','day3','day4','day5')
                                        ->orderBy('id','asc')
                                        ->paginate(10);
        return view("regTour.inicio", compact('mtour','cat','cont'))->with('sessiontipo',$sessiontipo)->with('sessionusuario',$sessionusuario);
    }

    public function guardarTour(Request $request){
        $this->validate($request,[
            'name'=>'required|regex:/^[a-zA-Z0-9.\s]+$/',
            
        ]);
        $gtour = new regTour();
        $gtour->name = $request->input('name');
        $gtour->turismo=$request->input('turismo');
        $gtour->frecuencia=$request->input('frecuencia');
        $gtour->servicio=$request->input('servicio');
        $gtour->description = $request->input('description');
        $gtour->categorias_idc = $request->input('idc');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('imagenesTour/tours/',$filename);
            $gtour->image = $filename;
        }
        $gtour->day1 = $request->input('day1');
        $gtour->day2 = $request->input('day2');
        $gtour->day3 = $request->input('day3');
        $gtour->day4 = $request->input('day4');
        $gtour->day5 = $request->input('day5');

        try {
            $gtour->save();
            Session::flash('mensaje','El Recorrido se Creó y Guardo con Exito!!.');
            return redirect()->back();
        } catch (\Throwable $th) {
            Session::flash('mensaje','Error.');
            return redirect()->back();
        }

        
    }

    public function editar($id){
        $eTour = regTour::find($id);
        $cat=Categoria::all();
        $verres=Reserva::all();
        $cont=0;
        foreach ($verres as $item){
            if ($item->status=='1'){
                $cont++;
            }
        }
        return view('regTour.editar', compact('eTour','cat','cont'));
    }

    public function actualizarTour(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|regex:/^[a-zA-Z0-9.\s]+$/',
        ]);
        
        $atour = regTour::find($id);
        $atour->name = $request->input('name');
        $atour->description = $request->input('description');
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
        Session::flash('mensaje','El Recorrido se editó con Exito!!.');
        return redirect()->back();
    
    }

    public function eliminarTour($id){
        $dTour= regTour::find($id);
        $destination='imagenesTour/tours/'.$dTour->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $dTour->delete();
        return redirect()->back()->with('statusDelete','Eliminado con exito');
    }


}