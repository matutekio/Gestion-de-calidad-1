<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $recurso->id !!}</p>
</div>

<!-- Recurso Field -->
<div class="form-group">
    {!! Form::label('recurso', 'Recurso:') !!}
    <p>{!! $recurso->recurso !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $recurso->descripcion !!}</p>
</div>

<!-- Organizacion Id Field -->
<div class="form-group">
    {!! Form::label('organizacion_id', 'Organizacion Id:') !!}
    <p>{!! $recurso->organizacion_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $recurso->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $recurso->updated_at !!}</p>
</div>

