<!-- Actividad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actividad', 'Actividad:') !!}
    {!! Form::text('actividad', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Proceso Id Field -->
<div class="form-group col-sm-6">
    {{--    {!! Form::label('proceso_id', 'Proceso Id:') !!}--}}
    {!! Form::hidden('proceso_id', $id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('procesos.show',$id) !!}" class="btn btn-default">Cancel</a>
</div>
