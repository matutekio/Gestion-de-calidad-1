<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="organizacions-table" id="procesos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            {{--<th>Organizacion Id</th>--}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($procesos as $procesos)
        <tr>
            <td>{!! $procesos->nombre !!}</td>
            <td>{!! $procesos->descripcion !!}</td>
            {{--<td>{!! $procesos->organizacion_id !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['procesos.destroy', $procesos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('procesos.show', [$procesos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user()->role == 2 || Auth::user()->role == 1)
                    <a href="{!! route('procesos.edit', [$procesos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>