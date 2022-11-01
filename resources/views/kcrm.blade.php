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
    <tbody>
        @foreach($kcrm as $kcrm)
        <tr>
                <td>{{ $kcrm->idKCRM}}</td>
                <td>{{ $kcrm->Cedula}}</td>
                <td>{{ $kcrm->ID_Venta}}</td>
                <td>{{ $kcrm->Fecha_Venta}}</td>
                <td>{{ $kcrm->Descripcion}}</td>
                <td>{{ $kcrm->Fecha_Gestion}}</td>
                <td>{{ $kcrm->Gestor}}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection