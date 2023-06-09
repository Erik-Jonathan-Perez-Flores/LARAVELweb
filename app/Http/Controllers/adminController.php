<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\regTour;
use App\Models\Reserva;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function iniadmin(){
        $sessionidu=session('sessionidu');
        $sessiontipo=session('sessiontipo');
        $sessionusuario=session('sessionusuario');

        if($sessionidu<>"" and $sessiontipo=="admin"){
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
            return view('admin.iniadmin',compact('cat','mtour','verres','cont'));
        }elseif($sessiontipo=="user"){
            $mtour=regTour::all();
            return view('inicio', compact('mtour'))->with('sessiontipo',$sessiontipo)->with('sessionusuario',$sessionusuario);
        }else{
            Session::flash('mensaje',"Loguearse antes de continuar");
            return redirect()->route('inicio');
        }
    }

    public function reserva(){
        $verres=Reserva::latest()->get();
        $cont=0;
        foreach ($verres as $item){
            if ($item->status=='1'){
                $cont++;
            }
        }
        return view('admin.reservas',compact('verres','cont'));
    }

    public function createreserva(Request $request){
        
        //dd($request);
        $gres = new Reserva();
        $gres->id = auth()->id();
        $gres->nombre = $request->input('nombre');
        $gres->correo=$request->input('correo');
        $gres->cantidad=$request->input('cantidad');
        $gres->fecha=$request->input('fecha');
        $gres->nacionalidad = $request->input('nacionalidad');
        $gres->codigo = $request->input('codigo');
        $gres->whatsapp = $request->input('whatsapp');
        $gres->destino = $request->input('destino');
        $gres->instagram = $request->input('instagram');
        $gres->mensaje = $request->input('mensaje');
        $gres->status = ('1');
        $gres->save();
        Session::flash('mensaje','Se envio con Exito!!.');
        return redirect()->route('inicio');
    }

    public function mreserva($id){
        $mres = Reserva::find($id);
        $verres=Reserva::all();
        $cont=0;
        foreach ($verres as $item){
            if ($item->status=='1'){
                $cont++;
            }
        }
        return view('admin.verreserva', compact('mres','verres','cont'));
    }

    public function eliminarreser($id){
        $eres= Reserva::find($id);
        $eres->delete();
        return redirect()->back()->with('statusDelete','Eliminado con exito');
    }

    public function statusbaja($id){
        $stbj= Reserva::find($id);
        $stbj->status=('0');
        $stbj->update();
        return redirect('reserva');
    }

    public function statusalta($id){
        $stal= Reserva::find($id);
        $stal->status=('1');
        $stal->update();
        return redirect('reserva');
    }

    public function vervideo(){
        $vid=Video::all();
        $verres=Reserva::all();
        $cont=0;
        foreach ($verres as $item){
            if ($item->status=='1'){
                $cont++;
            }
        }
        return view('admin.video',compact('vid','cont'));
    }

    public function crearvideo(Request $request){
        
        $vid = new Video();
        $vid->url = $request->input('url');
        $vid->save();
        Session::flash('mensaje','Se creo con Exito!!.');
        return redirect()->route('video');
    }


    public function editarvideo($id){
        $vid = Video::find($id);
        $verres=Reserva::all();
        $cont=0;
        foreach ($verres as $item){
            if ($item->status=='1'){
                $cont++;
            }
        }
        return view('admin.editvideo', compact('vid','cont'));
    }

    public function actualizarvideo(Request $request,$id){
        $vid = Video::find($id);
        $vid->url = $request->input('url');
        $vid->update();
        Session::flash('mensaje','El video se editó con Exito!!.');
        return redirect()->back();
    
    }

    public function eliminarvideo($id){
        $vid= Video::find($id);
        $vid->delete();
        return redirect()->back();
    }

} 
