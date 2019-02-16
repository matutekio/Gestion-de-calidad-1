@extends('layouts.app-Admin')

@section('content-header')
    <h1>Roles</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/home"><i class="fa fa-dashboard"></i> Inicio</a>
        </li>
        <li>Roles</li>
    </ol>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="col-md-12">
                    <a class="btn btn-primary pull-right" href="{!! route('roles.create') !!}">Add New</a>
                </div>
                <div class="col-md-12">
                    @include('roles.table')
                </div>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

