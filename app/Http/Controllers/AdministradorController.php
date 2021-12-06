<?php

namespace App\Http\Controllers;

use App\Models\administrador;
use App\Http\Requests\StoreadministradorRequest;
use App\Http\Requests\UpdateadministradorRequest;

class AdministradorController extends Controller
{
  public function loginView(){
      return view('login');
  }
}
