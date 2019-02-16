<div class="col-md-12">
    <div class="col-md-6">
        <!-- Id Field -->
        <div class="form-group">
            {!! Form::label('id', 'Id:') !!}
            <p>{!! $procesos->id !!}</p>
        </div>

        <!-- Nombre Field -->
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre:') !!}
            <p>{!! $procesos->nombre !!}</p>
        </div>

        <!-- Descripcion Field -->
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripcion:') !!}
            <p>{!! $procesos->descripcion !!}</p>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Organizacion Id Field -->
        <div class="form-group">
            {!! Form::label('organizacion_id', 'Organizacion Id:') !!}
            <p>{!! $procesos->organizacion_id !!}</p>
        </div>

        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $procesos->created_at !!}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $procesos->updated_at !!}</p>
        </div>
    </div>
</div>