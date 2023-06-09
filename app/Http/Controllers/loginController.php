<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reglogin()
    {
        return view('login.regsesion');
    }
    
    public function inilogin()
    {
        return view('login.inisesion');
    }
    
    public function cerrarsesion()
    {
        Session::forget('sessionusuario');
        Session::forget('sessiontipo');
        Session::forget('sessionidu');
        Session::flush();
        Session::flash('mensaje'," Sesion Cerrada, Vuelve pronto");
        return redirect()->route('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createlogin(Request $request)
    {
        $contr = Usuario::all();
        $this->validate($request,[
            'nombre'=>'required|regex:/^[a-zA-Z.\s]+$/',
            'email'=>'required','email','regex:/(.*)@example\.com$/i',
            'usuario'=>'required',
            'pasw'=>'required',
        ]);
        if($request->input('pasw') != $request->input('pasw2')){
            Session::flash('mensaje',"La Contraseña no coincide!");
            return redirect()->route('reglogin');
        }
        $createU = new Usuario();
        $createU->nombre = $request->input('nombre');
        $createU->email = $request->input('email');
        $createU->usuario = $request->input('usuario');
        $createU->pasw = Hash::make($request->pasw);
        if(count($contr)>0){
            $createU->tipo = ('user');
        }else{
            $createU->tipo = ('admin');
        }
        $createU->save();
        return redirect('/iniadmin');
    }

    public function validar(Request $request){
        $this->validate($request,[
            'usuario'=>'required', //'email',
            'pasw'=>'required'
        ]);
        /*$passwordEncriptado = Hash::make($request->pasw);
        echo $passwordEncriptado;*/
        $consul = Usuario::where('usuario',$request->usuario)->get();
        $cont=count($consul);
        //if($consul[0]->usuario==$request->usuario){
        if($cont==1 and hash::check($request->pasw,$consul[0]->pasw)){
            Session::put('sessionusuario',$consul[0]->nombre);
            Session::put('sessionemail',$consul[0]->email);
            Session::put('sessiontipo',$consul[0]->tipo);
            Session::put('sessionidu',$consul[0]->idu);
            return redirect()->route('inicio');
        }else{
            Session::flash('mensaje',"El Usuario o Contraseña no son validos");
            return redirect()->route('inicio');
        }

        /*$consulta=Usuario::where('usuario',$request->usuario)->where('pasw',$request->pasw);
        if(hash::check($request->usuario,$consulta[0]->pasw)){
            echo "correcto";
        }else{
            echo "no correcto";
        }*/
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
