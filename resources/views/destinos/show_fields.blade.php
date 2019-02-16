<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $destino->id !!}</p>
</div>

<!-- Destino Field -->
<div class="form-group">
    {!! Form::label('destino', 'Destino:') !!}
    <p>{!! $destino->destino !!}</p>
</div>

<!-- Organizacion Id Field -->
<div class="form-group">
    {!! Form::label('organizacion_id', 'Organizacion Id:') !!}
    <p>{!! $destino->organizacion_id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $destino->descripcion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $destino->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $destino->updated_at !!}</p>
</div>

