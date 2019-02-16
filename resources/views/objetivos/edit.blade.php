@extends('layouts.app-Admin')

@section('content-header')
    <h1>Editar Objetivo</h1>
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
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($objetivos, ['route' => ['objetivos.update', $objetivos->id], 'method' => 'patch']) !!}

                        @include('objetivos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection