<?php

namespace App\Http\Controllers;
Use App\User;
use App\Maestro;
use App\Materia;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUser;
class MaestrosController extends Controller{
    public function index(){
        $maestros = User::where('tipoUsuario',2)->get();
        return view('Maestros.index',['maestros'=>$maestros]);
    }
    public function create(){
        $materia_maestro = Materia::pluck('nombre_materia','id_materia');
        $maestro = new User;
        return view('Maestros.create',['materia_maestro'=>$materia_maestro,'maestro'=>$maestro]);
    }
    public function store(RegisterUser $request){
        $maestros = new User;
        $maestros->nombre = $request->nombre;
        $maestros->apellido = $request->apellido;
        $maestros->email =$request->email;
        $maestros->password = $request->password;
        $maestros->tipoUsuario = 2;
        if($maestros->save()){
            return redirect('maestros')->with('message','create');
        }else{
            return back();
        }
    }
    public function show($id){
        // $sql = select  * from usuarios where id = $id  
        $usuario = User::find($id);
        $materias_cragadas_maestro = Materia::where('id_maestro',$id)->get();
        return view('profile.show',['usuario'=>$usuario,'materias_cragadas_maestro'=>$materias_cragadas_maestro]);
    }
    public function edit($id){
        $edit_maestro = User::find($id);
        return view('Maestros.edit',compact('edit_maestro'));
    }
    public function update(Request $request, $id){
        $maestros_update = User::find($id);
        $maestros_update->fill($request->all());
        $maestros_update->save();
        return Redirect('maestros')->with('message','update');
    }
    public function destroy($id){
        User::destroy($id);
        return redirect('maestros')->with('message','delete');
    }
}
