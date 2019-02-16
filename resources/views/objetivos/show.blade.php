@extends('layouts.app-Admin')

@section('content-header')
    <h1>Ver Objetivo</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Objetivos</li>
        <li>Crear</li>
    </ol>
@endsection
@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('objetivos.show_fields')
                    <a href="{!! route('organizacions.show',Auth::user()->organizacion_id) !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
