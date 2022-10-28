@extends('layouts.app')
@section('title')
@section('content')

    <table border="2px">

        <caption>Descarga</caption>
        <thead>
            <tr>
                <th>idKCRM</th>
                <th>Cedula</th>
                <th>ID_Venta</th>
                <th>Fecha_Venta</th>
                <th>Descripcion</th>
                <th>Fecha_Gestion</th>
                <th>Gestor</th>
            </tr>
        </thead>
        @foreach($kcrms as $kcrm)
        <tbody>
            <tr>
                <td>{{ $user->idKCRM}}</td>
                <<td>{{ $user->Cedula}}</td>
                    <td>{{ $user->ID_Venta}}</td>
                    <td>{{ $user->Fecha_Venta}}</td>
                    <td>{{ $user->Descripcion}}</td>
                    <td>{{ $user->Fecha_Gestion}}</td>
                    <td>{{ $user->Gestor}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection