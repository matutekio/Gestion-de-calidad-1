<div class="col-md-6">
    <!-- Id Field -->
    <div class="form-group">
        {!! Form::label('id', 'Id:') !!}
        <p>{!! $organizacion->id !!}</p>
    </div>

    <!-- Nombre Field -->
    <div class="form-group">
        {!! Form::label('nombre', 'Organización:') !!}
        <p>{!! $organizacion->nombre !!}</p>
    </div>

    <!-- Ruc Field -->
    <div class="form-group">
        {!! Form::label('ruc', 'Ruc:') !!}
        <p>{!! $organizacion->ruc !!}</p>
    </div>

    <!-- Direccion Field -->
    <div class="form-group">
        {!! Form::label('direccion', 'Direccion:') !!}
        <p>{!! $organizacion->direccion !!}</p>
    </div>
</div>
<div class="col-md-6">
    <!-- Telefono Field -->
    <div class="form-group">
        {!! Form::label('telefono', 'Telefono:') !!}
        <p>{!! $organizacion->telefono !!}</p>
    </div>

    <!-- Politicacalidad Field -->
    <div class="form-group">
        {!! Form::label('politicaCalidad', 'Politicacalidad:') !!}
        <p>{!! $organizacion->politicaCalidad !!}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{!! $organizacion->created_at !!}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{!! $organizacion->updated_at !!}</p>
    </div>
</div>