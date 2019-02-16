<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $objetivos->id !!}</p>
</div>

<!-- Objetivo Field -->
<div class="form-group">
    {!! Form::label('objetivo', 'Objetivo:') !!}
    <p>{!! $objetivos->objetivo !!}</p>
</div>

<!-- Organizacion Id Field -->
<div class="form-group">
    {!! Form::label('organizacion_id', 'Organizacion Id:') !!}
    <p>{!! $objetivos->organizacion_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $objetivos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $objetivos->updated_at !!}</p>
</div>

