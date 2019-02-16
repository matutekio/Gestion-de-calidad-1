@extends('layouts.app-Admin')

@section('content-header')
    <h1>Editar Destino</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Destinos</li>
        <li>Editar</li>
    </ol>
@endsection
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($destino, ['route' => ['destinos.update', $destino->id], 'method' => 'patch']) !!}

                        @include('destinos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection