@extends('layouts.app')
@section('title')
@section('content')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Konecta</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


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
</body>

</html>