<!-- Recurso Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recurso_id', 'Recurso Id:') !!}
    {!! Form::select('recurso_id',$recursos, null, ['class' => 'form-control']) !!}
</div>

<!-- Proceso Id Field -->
<div class="form-group col-sm-6">
{{--    {!! Form::label('proceso_id', 'Proceso Id:') !!}--}}
    {!! Form::hidden('proceso_id', $proceso->id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('procesos.show',$proceso->id) !!}" class="btn btn-default">Cancel</a>
</div>
