@extends('layouts.app-Admin')

@section('content-header')
    <h1>Inicio<small>¡Bienvenido!</small></h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
    </ol>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">{{config('app.name')}}</div>
            @include('layouts.includes.alerts')
            <div class="panel-body">
                ¡Bienvenido!<br>
                <strong>{{Auth::user()->name}}</strong> al sistema de gestión de calidad.
            </div>
            <div class="panel-footer">
                <p align="right">{{date('d-M-y')}}</p>
            </div>
        </div>
    </div>
@endsection
