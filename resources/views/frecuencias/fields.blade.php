<!-- Frecuencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frecuencia', 'Frecuencia:') !!}
    {!! Form::text('frecuencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Dias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_dias', 'Num Dias:') !!}
    {!! Form::number('num_dias', null, ['class' => 'form-control']) !!}
</div>
<!-- Organizacion ID -->
<div class="form-group col-sm-6">
    {!! Form::hidden('organizacion_id', Auth::user()->organizacion_id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('frecuencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
