@extends('layouts.app-Admin')

@section('content-header')
    <h1>Ver Proceso</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Procesos</li>
        <li>Ver</li>
    </ol>
@endsection
@section('content')
    <div class="content">
        @include('flash::message')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('procesos.show_fields')
                    <a href="{!! route('procesos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="box box-solid box-primary" style="height: 500px;">
                    <div class="box-header" align="center">
                        <b style="font-size: 14pt">Indicadores</b>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            @include('indicadors.proceso_indicador.index')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-solid box-primary" style="height: 500px;">
                    <div class="box-header" align="center">
                        <b style="font-size: 14pt">Recursos</b>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            @include('proceso_recursos.index')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box box-solid box-primary">
                <div class="box-header" align="center">
                    <b style="font-size: 14pt">Actividades</b>
                </div>
                <div class="box-body">
                    <div class="row">
                        @include('actividads.proceso_actividad.index')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
