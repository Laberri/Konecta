@extends('layouts.app')
@section('title')
@section('content')

    <h2 class="text-center">Descarga de Sucesos</h2>
    <nav class="navbar bg-light">
        <div class="container">
            <form class="d-flex">
                <input name="buscarpor" class="form-control me-sm-2" type="search" placeholder="Fecha" arial label="search" value="{{ $buscarpor }}">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>idKCRM</th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>ID_Venta</th>
                            <th>Fecha_Venta</th>
                            <th>Descripcion</th>
                            <th>Fecha_Gestion</th>
                            <th>Gestor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kcrm as $kcrm)
                        <tr>
                            <td>{{ $kcrm->idKCRM}}</td>
                            <td>{{ $kcrm->Cedula}}</td>
                            <td>{{ $kcrm->Nombre}}</td>
                            <td>{{ $kcrm->ID_Venta}}</td>
                            <td>{{ $kcrm->Fecha_Venta}}</td>
                            <td>{{ $kcrm->Descripcion}}</td>
                            <td>{{ $kcrm->Fecha_Gestion}}</td>
                            <td>{{ $kcrm->Gestor}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $kcrm = DB::table('kcrm')->simplePaginate(10); }}
                <br>
            </div>
            <div class="col.md-2">
                <a href="{{url('/kcrm/kcrmExport')}}" class="btn btn-success">Exportar a Excel</a>
            </div>

@endsection
