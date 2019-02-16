<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="destinos-table">
    <thead>
        <tr>
            <th>Destino</th>
            {{--<th>Organizacion Id</th>--}}
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($destinos as $destino)
        <tr>
            <td>{!! $destino->destino !!}</td>
{{--            <td>{!! $destino->organizacion_id !!}</td>--}}
            <td>{!! $destino->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['destinos.destroy', $destino->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('destinos.show', [$destino->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('destinos.edit', [$destino->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>