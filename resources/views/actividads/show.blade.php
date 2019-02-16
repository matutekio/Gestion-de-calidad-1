@extends('layouts.app-Admin')

@section('content-header')
    <h1>Ver Actividad</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Actividades</li>
        <li>Ver</li>
    </ol>
@endsection
@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('actividads.show_fields')
                    <a href="{!! route('actividads.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
