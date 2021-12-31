@extends('layouts.template')

@section('header')Modificar producto @endsection

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Modificar datos del producto</h1>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="user" action="{{ route('productos.update', [$producto->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        name="nombre" placeholder="Nombre" value="{{$producto->nombre}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        name="precio" placeholder="Precio" value="{{$producto->precio}}">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail"
                                        name="stock" placeholder="Stock" value="{{$producto->stock}}">
                                </div>
                                <div class="form-group">
                                    <label for="categoria_id">Categoria: </label>
                                    <select name="categoria_id" class="form-select" aria-label="Default select example">
                                        @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->id}}" >{{$categoria->nombre}}</option> 
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="submit" class="btn btn-facebook btn-user btn-block" value="Aceptar">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <a href="{{ route('productos.index') }}" class="btn btn-primary btn-user btn-block">
                                            Cancelar
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection