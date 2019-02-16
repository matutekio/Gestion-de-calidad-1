<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $proveedor->id !!}</p>
</div>

<!-- Proveedor Field -->
<div class="form-group">
    {!! Form::label('proveedor', 'Proveedor:') !!}
    <p>{!! $proveedor->proveedor !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $proveedor->descripcion !!}</p>
</div>

<!-- Organizacion Id Field -->
<div class="form-group">
    {!! Form::label('organizacion_id', 'Organizacion Id:') !!}
    <p>{!! $proveedor->organizacion_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $proveedor->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $proveedor->updated_at !!}</p>
</div>

