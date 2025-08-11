@extends('adminlte::page')

@section('title', 'Propietarios - Show')

@section('content_header')
    <h1>Propietario {{$owner->id}}</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header text-right">
            <a href="{{route('propietarios.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-plus"></i>
                Nuevo
            </a>
            <a href="{{route('propietarios.edit', $owner)}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-edit"></i>
                Editar
            </a>
            <a href="{{route('propietarios.create')}}" class="btn btn-primary flex-wrap">
                <i class="fas fa-trash"></i>
                Eliminar
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-4 text-center">
                    <img src="{{ asset('img/owners/no_image_500.png') }}" alt="user-avatar" class="img-circle img-fluid" style="max-width: 300px;">
                </div>
                <div class="col-12 col-sm-8">
                    <h3 class="my-3">{{$owner->name}}</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr><th>Código:</th><td>{{$owner->code}}</td></tr>
                                <tr>
                                    <th>Teléfono:</th>
                                    <td>
                                        {{$owner->tel_01 ?? ''}}
                                        @if($owner->tel_02 != null)
                                            <br>
                                            {{$owner->tel_02}}
                                        @endif
                                    </td>
                                </tr>
                                <tr><th>Email:</th><td>{{$owner->mail}}</td></tr>
                                <tr>
                                    <th style="width:25%">Dirección:</th>
                                    <td>
                                    {{$owner->address->street ?? ''}} {{$owner->address->ext_number ?? ''}}
                                    @if($owner->address->int_number != null)
                                        {{"Interior. "}}{{$owner->address->int_number}}
                                    @endif
                                    <br>
                                    @if($owner->address->col != null)
                                        {{"Col. "}}{{$owner->address->col}}
                                    @endif
                                    <br>
                                    @if($owner->address->city != null)
                                        {{$owner->address->city}}{{", "}}
                                    @endif
                                    @if($owner->address->mun != null)
                                        {{$owner->address->mun}}{{", "}}
                                    @endif
                                    @if($owner->address->state != null)
                                        {{$owner->address->state}}{{", "}}
                                    @endif
                                    @if($owner->address->country != null)
                                        {{$owner->address->country}}
                                    @endif
                                    @if($owner->address->zip_code != null)
                                        <br>
                                        {{"CP. "}}{{$owner->address->zip_code}}
                                    @endif
                                    </td>
                                </tr>
                                <tr><th>Observaciones:</th><td>{{$owner->notes}}</td></tr>
                                <tr><th>Creación:</th><td>{{$owner->created_at}}</td></tr>
                                <tr><th>Actualización:</th><td>{{$owner->updated_at}}</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="accordion">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="locations-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="owners-specimens-tab" data-toggle="pill" href="#specimens-tab" role="tab" aria-controls="specimens-tab" aria-selected="false">Ejemplares</a>
                                </li>
                            </ul>
                        </div><!-- card header -->
                        <div class="card-body">
                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane fade show active" id="specimens-tab" role="tabpanel" aria-labelledby="owners-specimens-tab">

                                <div id="div_header01">
                                    <div class="row mb-4">
                                        <div class="col-12 col-sm-6">
                                        </div>
                                        <div class="col-12 col-sm-6 text-right"></div>
                                    </div>

                                </div>



                                    <table id="table01" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                                        <thead class="bg-secondary text-white">
                                            <tr>
                                                <!-- <th class="text-center">Id</th> -->
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Registro</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Chip</th>
                                                <th class="text-center">Nacimiento</th>
                                                <th class="text-center">Sexo</th>
                                                <th class="text-center">Color</th>
                                                <th class="text-center">Categoría</th>
                                                <th class="text-center">Criador</th>
                                                <!-- <th class="text-center">Propietario</th>
                                                <th class="text-center">Padre</th>
                                                <th class="text-center">Madre</th> -->
                                                <!-- <th class="text-center">Observaciones</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($specimens_owner as $specimen)
                                                <tr>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->code ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->registry ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->name ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->chip ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->birthdate ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->sex->description ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->color->description ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->category->description ?? ''}}</a></td>
                                                    <td  class="text-center list-link"><a href="{{route('ejemplares.show', $specimen->id)}}">{{ $specimen->breeder->name ?? ''}}</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>    
                                </div> <!-- tab pane -->

                            </div><!-- tab content -->
                        </div><!-- card body -->
                    </div><!-- card -->
                </div><!-- col12 -->
            </div><!-- row -->
            






        </div>
    </div>

@stop

@section('css')
    <!-- dataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/1.13.4/css/dataTables.bootstrap5.min.css') }}">
    
    <!-- buttons -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/buttons/2.3.6/css/buttons.bootstrap5.min.css') }}">
    <style>
        .list-link{
            color: black;
            text-decoration: none;
        }
    </style>
@stop

@section('js')
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery-3.5.1.js') }}"></script>
    <!-- dataTables -->
    <script src="{{ asset('plugins/datatables/1.13.4/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/1.13.4/js/dataTables.bootstrap5.min.js') }}"></script>
    <!-- buttons -->
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons/2.3.6/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var table = $('#table01').DataTable( {
                lengthChange: true,
                buttons:
                [
                    {
                        extend: 'copyHtml5',
                        text: '<i class="fas fa-copy"></i>',
                        titleAttr: 'Copiar',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'excelHtml5',
                        text:   '<i class="fas fa-file-excel"></i>',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'csvHtml5',
                        text:   '<i class="fas fa-file-csv"></i>',
                        titleAttr: 'Exportar a CSV',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'pdfHtml5',
                        text:   '<i class="fas fa-file-pdf"></i>',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'print',
                        text:   '<i class="fa fa-print"></i>',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-secondary'
                    },
                    {
                        extend: 'colvis',
                        text:   '<i class="fas fa-columns"></i>',
                        titleAttr: 'Columnas',
                        className: 'btn btn-secondary'
                    }
                ],
                "lengthMenu": [[-1, 10, 25, 100], ["Todos", 10, 25, 100]],
                "language":
                {
                    "search":       "Buscar",
                    "lengthMenu":   "Mostrar _MENU_ registros",
                    "info":         "Página _PAGE_ de _PAGES_",
                    "paginate":
                    {
                        "previous": "Anterior",
                        "next":     "Siguiente",
                        "first":    "Primero",
                        "last":     "Último"
                    }
                }
            } );
        
            table.buttons().container().appendTo( '#div_header01 .col-12:eq(1)' );
            // .col-6:eq(0)
        } );
    </script>
@stop