<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="tipoIndicadors-table">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoIndicadors as $tipoIndicador)
        <tr>
            <td>{!! $tipoIndicador->tipo !!}</td>
            <td>{!! $tipoIndicador->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoIndicadors.destroy', $tipoIndicador->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoIndicadors.show', [$tipoIndicador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoIndicadors.edit', [$tipoIndicador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>