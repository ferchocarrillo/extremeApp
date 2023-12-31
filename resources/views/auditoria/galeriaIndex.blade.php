@extends('adminlte::page')
@section('title', 'Encuestas')
@section('css')
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">
@stop
@section('content_header')
    <h1>MODULO DE CALIDAD DE AUDITORIAS</h1>
@stop
@section('content')

    <div class="container">
        <table class="table table-bordered data-table" id="encuestas_table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Raz&oacute;n Social</th>
                    <th>Direcci&oacute;n</th>
                    <th>Barrio</th>
                    <th>Segmento</th>
                    <th>Tipolog&iacute;a</th>
                    <th>Creaci&oacute;n</th>

                    <th width="105px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($auditoria as $encu)
                    <tr>
                        <td>{{ $encu->id }}</td>
                        <td>{{ $encu->razonSocial }}</td>
                        <td>{{ $encu->direccion }}</td>
                        <td>{{ $encu->barrio }}</td>
                        <td>{{ $encu->segmentacion }}</td>
                        <td>{{ $encu->tipologia }}</td>
                        <td>{{ $encu->created_at }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="BasicExample">
                                <a href="{{ url('/Galeria/' . $encu->id) }}" class="btn btn-success btn-sm"><i
                                        class="fas fa-edit"></i></a>
                                <!--<a href="{{ url('myPDF', $encu->id) }}"><button class="btn btn-c">descargar pdf</button></a>-->

                                @if (Auth::user()->role == 1)
                                    &nbsp;&nbsp;
                                    {!! Form::open(['route' => ['auditoria.destroy', $encu->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                    {!! Form::close() !!}
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')

    {{--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        < script src = "sweetalert2.min.js" >
    </>
    </script>
    <script>
        $(document).ready(function() {
            $('#encuestas_table').DataTable();
        });
    </script>

    <script>
        const { value: email } = await Swal.fire({
            title: "Input email address",
            input: "email",
            inputLabel: "Your email address",
            inputPlaceholder: "Enter your email address"
          });
          if (email) {
            Swal.fire(`Entered email: ${email}`);
          }
    </script>

    <script>
        Swal.fire(s 'AUDITORIAS',
            'Lista de registros',
            'success'
        )
    </script>
@stop
