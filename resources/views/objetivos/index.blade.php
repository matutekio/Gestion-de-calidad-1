{{--@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Objetivos</h1>
        <h1 class="pull-right">
        </h1>
    </section>--}}
    <div>
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-solid box-primary">
            <div class="box-header">Objetivos de Calidad</div>
            <div class="box-body">
                @if(Auth::user()->role == 2 || Auth::user()->role == 1)
                <div class="col-md-12">
                    <a class="btn btn-primary pull-right" href="{!! route('objetivos.create') !!}">Add New</a>
                </div>
                @endif
                    @include('objetivos.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
{{--@endsection--}}

