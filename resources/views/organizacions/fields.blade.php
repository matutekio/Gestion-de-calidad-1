<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruc', 'Ruc:') !!}
    {!! Form::text('ruc', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Politicacalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('politicaCalidad', 'Politicacalidad:') !!}
    {!! Form::text('politicaCalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @if(Auth::user()->role == 1)
    <a href="{!! route('organizacions.index') !!}" class="btn btn-default">Cancel</a>
    @elseif(Auth::user()->role == 2)
    <a href="{!! route('organizacions.show',Auth::user()->organizacion_id) !!}" class="btn btn-default">Cancel</a>
    @endif
</div>
