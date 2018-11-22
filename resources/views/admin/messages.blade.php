@extends('admin.layouts.main')
@section('title')
  Escritorio
@endsection
@section('content')
  <!--main-container-part-->
  <div id="content">
  <!--breadcrumbs-->
    @include('admin.layouts.breadcrumb', ['title' => 'Centro de Mensajes'])
  <!--End-breadcrumbs-->
    <div class="container-fluid"><hr />
      <div class="row-fluid">
        <div class="span12">
          <div class="quick-actions_homepage">
            <ul class="quick-actions">
              <li class="bg_lb"> <a href="/mensajes/crear"> <i class="icon-pencil"></i> Crear mensaje </a> </li>
              <li class="bg_ly"> <a href="/mensajes/entrada"> <i class="icon-inbox"></i><span class="label label-info">{{count($data)}}</span> Bandeja de Entrada </a> </li>
              <li class="bg_lg"> <a href="/mensajes/salida"> <i class="icon-th"></i><span class="label label-success">25</span> Bandeja de Salida</a> </li>
              <li class="bg_lo"> <a href="/mensajes/basura"> <i class="icon-th"></i><span class="label label-warning">50</span> Elementos Eliminados</a> </li>
            </ul>
          </div>
        </div>          
        <div class="widget-box">
          <div class="widget-title">
            <h5>Mensajes</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table display" id="messages_table">
              <thead>
                <tr>
                  <th width="5%">Prioridad</th>
                  <th width="20%">Enviado Por</th>
                  <th width="50%">Titulo</th>
                  <th width="15%">Fecha</th>
                  <th width="10%">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $message)
                  <tr>
                    <td style="{{($message->priority == 'urgent')?"background-color: red":""}}">{{ucfirst($message->priority)}}</td>
                    <td>{{$message->sender_user_id}}</td>
                    <td>{{$message->subject}}</td>
                    <td>{{$message->created_at}}</td>
                    <td></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Left Menu inbox -->
  </div>
  <style type="text/css">
    .w100p {
      width: 100%;
    }
  </style>
@endsection

@section('scripts')
    <script type="text/javascript">
    $(document).ready(function() {
      $('#messages_table').DataTable({
        "language" : {
          "decimal":        "",
          "emptyTable":     "No hay mensajes disponibles.",
          "info":           "Mostrando _START_ de _END_ de un total de _TOTAL_ mensajes.",
          "infoEmpty":      "Mostrando 0 de 0 de un total de 0 mensajes.",
          "infoFiltered":   "(Filtrando de un total de _MAX_ mensajes)",
          "infoPostFix":    "",
          "thousands":      ",",
          "lengthMenu":     "Mostrar _MENU_ mensajes por página.",
          "loadingRecords": "Cargando...",
          "processing":     "Procesando...",
          "search":         "Buscar:",
          "zeroRecords":    "No hay mensajes",
          "paginate": {
              "first":      "Primera",
              "last":       "Ultima",
              "next":       "Siguiente",
              "previous":   "Anterior"
          },
          "aria": {
              "sortAscending":  ": activar para ordenar la columna ascendente",
              "sortDescending": ": activate to sort column descending"
          }          
        }
      });
    });
  </script>
@endsection