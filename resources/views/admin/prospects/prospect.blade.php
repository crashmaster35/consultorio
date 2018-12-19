@extends('admin.layouts.main')
@section('title')
  Prospectos
@endsection
@section('content')
  <!--main-container-part-->
  <div id="prospect-vue">
  <div id="content">
  <!--breadcrumbs-->
    @include('admin.layouts.breadcrumb', ['title' => 'Prospectos'])
  <!--End-breadcrumbs-->
    <div class="container-fluid"><hr />
      <div class="row-fluid">
        @if (Permissions::hasCreatePermission(Route::getCurrentRoute()->getName()))
        <div class="span12">
          <div class="quick-actions_homepage">
            <ul class="quick-actions">
              <li class="bg_ls"> <a href="" id="createButton" data-toggle="modal" data-target="#create"> <i class="icon-pencil"></i> Crear Prospecto </a> </li>
            </ul>
          </div>
        </div>          
        @endif
        <div class="widget-box">
          <div class="widget-title">
            <h5>Prospectos</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table display" id="prospects_table">
              <thead>
                <tr>
                  <th width="5%">Cve. Cte</th>
                  <th width="20%">Nombre</th>
                  <th width="20%">Dirección</th>
                  <th width="10%">Fecha Nac.</th>
                  <th width="10%">Tel. Casa</th>
                  <th width="10%">Tel. Movil</th>
                  <th width="15%">Email</th>
                  <th width="10%">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $prospect)
                  <tr>
                    <td>{{$prospect->id}}</td>
                    <td>{{$prospect->name}} {{$prospect->last_name}}</td>
                    <td>{{$prospect->region_id}}</td>
                    <td>{{$prospect->birthdate}}</td>
                    <td>{{$prospect->home_phone}}</td>
                    <td>{{$prospect->mobile_phone}}</td>
                    <td>{{$prospect->email}}</td>
                    <td>
                      @if (Permissions::hasReadPermission(Route::getCurrentRoute()->getName()))
                      <button class="viewButton btn btn-info" data-id="{{$prospect->id}}"><i class="icon-eye-open"></i></button>
                      @endif
                      @if (Permissions::hasUpdatePermission(Route::getCurrentRoute()->getName()))
                      <button class="editButton btn btn-success" data-id="{{$prospect->id}}"><i class="icon-pencil"></i></button>
                      @endif
                      @if (Permissions::hasDeletePermission(Route::getCurrentRoute()->getName()))
                      <button class="deleteButton btn btn-danger" data-id="{{$prospect->id}}"><i class="icon-trash"></i></button>
                      @endif
                    </td>
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
</div>
@include('admin.prospects.components.create')
  <style type="text/css">
    .w100p {
      width: 100%;
    }
  </style>
@endsection

@section('scripts')
    <script type="text/javascript">
    $(document).ready(function() {
      $(this).on('click', '#createButton', function(e) {
        e.preventDefault();
      });

      $(this).on('click', '.viewButton', function(e) {
        e.preventDefault();
        alert('View: ' + $(this).attr('data-id'));
      });

      $(this).on('click', '.editButton', function(e) {
        e.preventDefault();
        alert('Edit: ' + $(this).attr('data-id'));
      });

      $(this).on('click', '.deleteButton', function(e) {
        e.preventDefault();
        alert('Delete: ' + $(this).attr('data-id'));
      });

      $('#prospects_table').DataTable({
        "language" : {
          "decimal":        "",
          "emptyTable":     "No hay prospectos disponibles.",
          "info":           "Mostrando _START_ de _END_ de un total de _TOTAL_ prospectos.",
          "infoEmpty":      "Mostrando 0 de 0 de un total de 0 prospectos.",
          "infoFiltered":   "(Filtrando de un total de _MAX_ prospectos)",
          "infoPostFix":    "",
          "thousands":      ",",
          "lengthMenu":     "Mostrar _MENU_ prospectos por página.",
          "loadingRecords": "Cargando...",
          "processing":     "Procesando...",
          "search":         "Buscar:",
          "zeroRecords":    "No hay prospectos",
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