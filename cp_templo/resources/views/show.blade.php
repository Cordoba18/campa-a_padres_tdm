@extends('layout.plantilla')

@section('title', 'CAMPAÑA DE PADRES | VER')

@section('css')

@endsection



@section('content')

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('storage/icons/logo_templo.png') }}" alt="Logo" width="50" height="30" class="d-inline-block align-text-top">
        EL TEMPLO DE LA MODA S.A.S
      </a>
    </div>
  </nav>
    <div class="row justify-content-center" style="width: 100%">
        <div class="col-auto">
            <div class="container m-4" style="width: 100%">

                <div class="card" style="width: 100%">
                    <div class="card-header text-center">
                        REGISTRO DE PADRES
                    </div>

                    <div class="card-body">
                        <button id="btn_export_excel" class="btn btn-success">EXCEL<i class="bi bi-file-earmark-spreadsheet"></i></button>
                        <hr>
                        <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDOS</th>
                                <th>TÉLEFONO</th>
                                <th>NUMERO DE IDENTIFICACIÓN</th>
                                <th>BARRIO</th>
                                <th>TIENDA</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)

                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->lastname }}</td>
                                    <td>{{ $u->phone }}</td>
                                    <td>{{ $u->nit }}</td>
                                    <td>{{ $u->neighborhood }}</td>
                                    <td>{{ $u->shop }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="nav justify-content-center bg-body-tertiary p-4">
        <li class="nav-item">
          <b>CAMPAÑA DE PADRES</b>
        </li>
      </ul>
@endsection


@section('js')
@vite(['resources/js/show.js'])
<script>
$('#table').DataTable({
    "paging": true,
    "ordering": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    responsive: true,
    "language": {
                "decimal": "",
                "emptyTable": "No hay datos disponibles en la tabla",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron registros coincidentes",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": activar para ordenar la columna de manera descendente"
                }
            }
    });
</script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
@endsection
