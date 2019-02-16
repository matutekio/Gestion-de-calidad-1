<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $actividad->id !!}</p>
</div>

<!-- Proceso Id Field -->
<div class="form-group">
    {!! Form::label('proceso_id', 'Proceso Id:') !!}
    <p>{!! $actividad->proceso_id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $actividad->descripcion !!}</p>
</div>

<!-- Actividad Field -->
<div class="form-group">
    {!! Form::label('actividad', 'Actividad:') !!}
    <p>{!! $actividad->actividad !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $actividad->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $actividad->updated_at !!}</p>
</div>

