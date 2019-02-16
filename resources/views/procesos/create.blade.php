@extends('layouts.app-Admin')

@section('content-header')
    <h1>Crear Procesos</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Procesos</li>
        <li>Crear</li>
    </ol>
@endsection
@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'procesos.store']) !!}

                        @include('procesos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
