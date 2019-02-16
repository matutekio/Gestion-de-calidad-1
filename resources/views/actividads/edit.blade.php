@extends('layouts.app-Admin')

@section('content-header')
    <h1>Editar Actividad</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Actividades</li>
        <li>Editar</li>
    </ol>
@endsection
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($actividad, ['route' => ['actividads.update', $actividad->id], 'method' => 'patch']) !!}

                        @include('actividads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection