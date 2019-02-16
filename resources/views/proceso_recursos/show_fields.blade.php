<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $procesoRecurso->id !!}</p>
</div>

<!-- Proceso Id Field -->
<div class="form-group">
    {!! Form::label('proceso_id', 'Proceso Id:') !!}
    <p>{!! $procesoRecurso->proceso_id !!}</p>
</div>

<!-- Recurso Id Field -->
<div class="form-group">
    {!! Form::label('recurso_id', 'Recurso Id:') !!}
    <p>{!! $procesoRecurso->recurso_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $procesoRecurso->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $procesoRecurso->updated_at !!}</p>
</div>

