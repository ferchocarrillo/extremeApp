@extends('adminlte::page')
@section('title', 'Editar Rol')
@section('content_header')
    <h1>Editar Rol</h1>
@stop
@section('content')

    @if (session('info'))
        <div class="alert alert-success">

            {{ session('info') }}

        </div>
    @endif


    <div class="card">
        <div class="card-form">

            {!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'put']) !!}
            @include('roles.partials.form')
            {!! Form::submit('Actualizar rol', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
