<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="organizacions-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Ruc</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Politica Calidad</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($organizacions as $organizacion)
        <tr>
            <td>{!! $organizacion->nombre !!}</td>
            <td>{!! $organizacion->ruc !!}</td>
            <td>{!! $organizacion->direccion !!}</td>
            <td>{!! $organizacion->telefono !!}</td>
            <td>{!! $organizacion->politicaCalidad !!}</td>
            <td>
                {!! Form::open(['route' => ['organizacions.destroy', $organizacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('organizacions.show', [$organizacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('organizacions.edit', [$organizacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>