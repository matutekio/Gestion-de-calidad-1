@extends('layouts.app-Admin')

@section('content-header')
    <h1>Responsables</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Responsables</li>
    </ol>
@endsection
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($responsable, ['route' => ['responsables.update', $responsable->id], 'method' => 'patch']) !!}

                        @include('responsables.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection