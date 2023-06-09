<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regTour;
use App\Models\Video;

use App\Models\Categoria;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{
    public function inicio(){
        $cate=Categoria::all();
        $alltour=regTour::all();
        $vid=Video::all();
        return view("index", compact('cate','alltour','vid'));
    }
    public function acercade(){
        return view('plantilla.acercade');
    }
    public function servicios(){
        $serv=DB::table('reg_tours')->select('id','name','description','image','turismo','frecuencia','servicio','day1','day2','day3','day4','day5')
                                        ->orderBy('id','asc')
                                        ->paginate(10);
        $texto='';
        return view('plantilla.destination', compact('serv','texto'));
    }
    public function contactos(){
        return view('plantilla.contact');
    }
    public function tours(Request $request){
        $alltour=regTour::all();
        return view('recorridos', compact('alltour'));
    }
    public function verrecorrido($id){
        $cate=Categoria::find($id);
        $alltour=regTour::all();
        return view('toursescogidos', compact('cate','alltour'));
    }
    public function detallestours($id){
        $cate=Categoria::all();
        $alltour=regTour::find($id);
        return view('detallesdetours', compact('cate','alltour'));
    }
    public function index(Request $request){
        $texto=trim($request->get('texto'));
        $serv=DB::table('reg_tours')->select('id','name','description','image','turismo','frecuencia','servicio','day1','day2','day3','day4','day5')
                                        ->where('name','LIKE','%'.$texto.'%')
                                        ->orWhere('turismo','LIKE','%'.$texto.'%')
                                        ->orWhere('servicio','LIKE','%'.$texto.'%')
                                        ->paginate(10);
                                    
        return view('plantilla.destination',compact('texto','serv'));
    }
}
