@extends('layouts.app-Admin')

@section('content-header')
    <h1>Editar Frecuencia</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Frecuencias</li>
        <li>Editar</li>
    </ol>
@endsection
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($frecuencia, ['route' => ['frecuencias.update', $frecuencia->id], 'method' => 'patch']) !!}

                        @include('frecuencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection