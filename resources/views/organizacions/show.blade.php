@extends('layouts.app-Admin')

@section('content-header')
    <h1>Organización</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Organización</li>
    </ol>
@endsection
@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('organizacions.show_fields')
                    <!--{{$userRole = Auth::user()->role}}-->
                    <!--{{$userOrg = Auth::user()->organizacion_id}}-->
                    @if($userRole == 1)
                    <a href="{!! route('organizacions.index') !!}" class="btn btn-default">Back</a>
                    @elseif($userRole == 2)
                    <a href="{!! route('organizacions.edit',$userOrg) !!}" class="btn btn-primary">Edit</a>
                    @endif
                </div>
            </div>
        </div>
        @include('objetivos.index')
    </div>
@endsection
