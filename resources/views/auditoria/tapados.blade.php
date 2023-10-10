@extends('adminlte::page')
@section('title', 'Estado de la exhibición')

@section('css')
    <link href="{{ asset('css/auditoria.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arapey:400,400i,600|Open+Sans:300" rel="stylesheet">
@stop
@section('content')
<div class="progress">
    <div class="progress-bar" style="width:79%;">
        <span class="progress-bar-text">79% Diligenciado</span>
    </div>
</div>
    <div class="container">
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Razon Social</th>
                    <th width="105px">Siguiente</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>{{ $tapados->id }}</td>
                    <td>{{ $tapados->razonSocial }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="BasicExample">
                            <a href="{{ url('/tapados/' . $tapados->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@stop
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@stop
