@extends('layouts.app')
@section('content')


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

        <!--<script type="text/javascript">
          $(function() {
            var fechaA = new Date();
            var yyyy = fechaA.getFullYear();

            $("#DownloadModal").datepicker({

              changeMonth: true,
              chageYear: true,
              yearRange: '1900:' + yyyy,
              dateForma: "dd-mm-yy"
            });
          });
        </script>-->

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary"><a href="{{ route('kcrm') }}">Descarga</button>

      </div>
    </div>
  </div>
</div>

@endsection