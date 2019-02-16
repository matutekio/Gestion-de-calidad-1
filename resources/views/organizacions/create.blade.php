@extends('layouts.app-Admin')

@section('content')
    <section class="content-header">
        <h1>
            Organizacion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'organizacions.store']) !!}

                        @include('organizacions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
