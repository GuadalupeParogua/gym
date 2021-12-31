@extends('layouts.template')
@section('header')
    Registrar Disciplina
@endsection
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
        
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrar nueva disciplina</h1>
                        </div>
                                {{ csrf_field() }}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                        <form class="user" action="{{route('admin.disciplina.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select class="form-select" name="area_id" aria-label="Default select example" >
                                        
                                        <!--option selected>--Seleccionar area--</option-->
                                        @foreach ($areas as $area)
                                        <option value="{{$area->id}}">{{$area->nombre}}</option>
                                        @endforeach

                                      </select>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select class="form-select" name="paquete_id" aria-label="Default select example" >
                                        
                                        <!--option selected>--Seleccionar area--</option-->
                                        @foreach ($paquetes as $paquete)
                                        <option value="{{$paquete->id}}">{{$paquete->nombre}}</option>
                                        @endforeach

                                      </select>
                                </div>   
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="nombre" class="form-control form-control" id="exampleInputEmail"
                                        placeholder="Nombre">
                                </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="descripcion" class="form-control form-control" id="exampleInputEmail"
                                        placeholder="Descripcion">
                                </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="number" name="precio" class="form-control form-control" min="0" id="exampleInputEmail"
                                        placeholder="Precio">
                                </div>
                              
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar">
                            
                
                        </form>
                        <hr>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection