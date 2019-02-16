<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $frecuencia->id !!}</p>
</div>

<!-- Frecuencia Field -->
<div class="form-group">
    {!! Form::label('frecuencia', 'Frecuencia:') !!}
    <p>{!! $frecuencia->frecuencia !!}</p>
</div>

<!-- Num Dias Field -->
<div class="form-group">
    {!! Form::label('num_dias', 'Num Dias:') !!}
    <p>{!! $frecuencia->num_dias !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $frecuencia->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $frecuencia->updated_at !!}</p>
</div>

