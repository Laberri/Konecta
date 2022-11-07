@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DownloadModal">
        Descargar
      </button>

      <!-- Modal -->
      <div class="modal fade" id="DownloadModal" tabindex="-1" aria-labelledby="DownloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="DownloadModalLabel">Descarga</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <script type="text/javascript">
                $(function() {
                  $("#fecha").datepicker();
                });
              </script>
              <form action="{{route('kcrm')}}" method="get">
              <div class="mb-3">
                  <label for="fecha" class="col-form-label">Seleccione la fecha:</label>
                  <input type="fecha" class="form-control" id="searchDate" >
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
          </div>
        </div>
      </div>

      


      @endsection