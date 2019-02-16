{{--@extends('layouts.app')

@section('content')--}}
<div class="content">
    <div class="col-md-12">
        <a class="btn btn-primary pull-right" href="{{URL::to('procesoRecursos/create/').'/'.$procesos->id}}">Add</a>
    </div>
    <div class="col-md-12 table-responsive">
        @include('proceso_recursos.table')
    </div>
    <div class="text-center">

    </div>
</div>
{{--@endsection--}}

