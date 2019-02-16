<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="frecuencias-table">
    <thead>
        <tr>
            <th>Frecuencia</th>
            <th>N° Dias</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($frecuencias as $frecuencia)
        <tr>
            <td>{!! $frecuencia->frecuencia !!}</td>
            <td>{!! $frecuencia->num_dias !!}</td>
            <td>
                {!! Form::open(['route' => ['frecuencias.destroy', $frecuencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('frecuencias.show', [$frecuencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('frecuencias.edit', [$frecuencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>