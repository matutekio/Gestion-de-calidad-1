<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="recursos-table">
    <thead>
        <tr>
            <th>Recurso</th>
            <th>Descripcion</th>
            {{--<th>Organizacion Id</th>--}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($recursos as $recurso)
        <tr>
            <td>{!! $recurso->recurso !!}</td>
            <td>{!! $recurso->descripcion !!}</td>
{{--            <td>{!! $recurso->organizacion_id !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['recursos.destroy', $recurso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('recursos.show', [$recurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('recursos.edit', [$recurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>