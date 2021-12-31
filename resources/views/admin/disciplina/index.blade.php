@extends('layouts.template')
@section('header')
    Gestionar Disciplinas  
@endsection

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="button-registro">
                        <a href="{{route('admin.disciplina.create')}}" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Nueva Disciplina</span>
                        </a>
                    </div>
                    <!-- Page Heading
                    <h1 class="h3 mb-2 text-gray-800">Tablas</h1>
                    <p class="mb-4">En esta tabla se muestra todas las disciplinas creadas<a target="_blank"
                            href="https://datatables.net"> Registrar nueva disciplina</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registros de Disciplinas</h6>
                        </div>
                        
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Paquete</th>
                                            <th>Area</th>
                                            <th>Precio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Paquete</th>
                                            <th>Area</th>
                                            <th>Precio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($disciplinas as $disciplina)
                                        <tr>
                                            <th>{{$disciplina->nombre}}</th>
                                            <th>{{$disciplina->descripcion}}</th>
                                            <th>{{$disciplina->paquete_id}}</th>
                                            <th>{{$disciplina->area_id}}</th>
                                            <th>{{$disciplina->precio}}</th>
                                            <th>
                                                <div class="button-editar">
                                                    <a href="" class="btn btn-info btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
                                                        <span class="text">Editar</span>
                                                    </a>
                                                </div>
                                                <div class="button-eliminar">
                                                    <a href="" class="btn btn-danger btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Eliminar</span>
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection