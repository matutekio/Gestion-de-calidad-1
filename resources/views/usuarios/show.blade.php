@extends('layouts.app-Admin')

@section('content-header')
    <h1>Ver Usuario</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Usuarios</li>
        <li>Ver</li>
    </ol>
@endsection
@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('usuarios.show_fields')
                    <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Back</a>
                    <a href="{!! route('usuarios.edit', Auth::user()->id) !!}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
