<!-- Objetivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('objetivo', 'Objetivo:') !!}
    {!! Form::text('objetivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Organizacion Id Field -->
<div class="form-group col-sm-6">
{{--    {!! Form::label('organizacion_id', 'Organizacion Id:') !!}--}}
    {!! Form::hidden('organizacion_id', Auth::user()->organizacion_id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('organizacions.show',Auth::user()->organizacion_id) !!}" class="btn btn-default">Cancel</a>
</div>
