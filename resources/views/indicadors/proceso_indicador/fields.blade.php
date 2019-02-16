<!-- Indicador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indicador', 'Indicador:') !!}
    {!! Form::text('indicador', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Proceso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proceso_id', 'Proceso Id:') !!}
    {!! Form::number('proceso_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Actividad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actividad_id', 'Actividad Id:') !!}
    {!! Form::number('actividad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Frecuencia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frecuencia_id', 'Frecuencia Id:') !!}
    {!! Form::number('frecuencia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoindicador Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoIndicador_id', 'Tipoindicador Id:') !!}
    {!! Form::number('tipoIndicador_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta', 'Meta:') !!}
    {!! Form::number('meta', null, ['class' => 'form-control']) !!}
</div>

<!-- Forma Calculo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('forma_calculo', 'Forma Calculo:') !!}
    {!! Form::text('forma_calculo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('indicadors.index') !!}" class="btn btn-default">Cancel</a>
</div>
