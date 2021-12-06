<?php

namespace App\Http\Controllers;

use App\Models\administrador;
use Illuminate\Http\Request;
use App\Http\Requests\StoreadministradorRequest;
use App\Http\Requests\UpdateadministradorRequest;
use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
  public function loginView(){
      return view('login');
  }
  public function login(Request $request){
    $validateData = $request->validate([
      'usuario' => ['required','max:50'],
      'password' => ['required'],
    ]);
    $administrador=administrador::where('usuario',$request->usuario)->first();
    
    if (is_null($administrador)) {
      return back()->withErrors(['error'=>'el usuario no existe']);

    }
    if (Auth::guard('admin')->attempt(['usuario' => $request->usuario, 'password' => $request->password]) ){
      
      return redirect()->route('menu');
    }
    //return redirect()->route("menu");
    return back()->withErrors(['error'=>'la contraseña incompleta']);
  }
}
