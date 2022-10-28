@extends('layouts.app')
@section('content')

<a class="navbar-brand" href="{{ route('kcrm') }}">
  {{ ('Descarga') }}
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#DownloadModal">
  Descargar
</button>
<!-- Modal -->
<div class="modal fade" id="DownloadModal" tabindex="-1" aria-labelledby="DownloadModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="DownloadModalLabel">Descarga de sucesos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>     
        <button type="button" class="btn btn-primary">Descargar</button>
      </div>
    </div>
  </div>
</div>

@endsection