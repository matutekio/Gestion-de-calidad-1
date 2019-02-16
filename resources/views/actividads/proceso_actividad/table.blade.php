<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="actividads-table">
    <thead>
        <tr>
            {{--<th>Proceso</th>--}}
            <th>Actividad</th>
            <th>Descripcion</th>
            @if(Auth::user()->role == 2 || Auth::user()->role == 1)
            <th>Action</th>
            @endif
        </tr>
    </thead>
    <tbody>
    @foreach($actividads as $actividad)
        <tr>
            {{--<td>{!! $actividad->proceso_id !!}</td>--}}
            <td>{!! $actividad->actividad !!}</td>
            <td>{!! $actividad->descripcion !!}</td>
            @if(Auth::user()->role == 2 || Auth::user()->role == 1)
            <td>
                {!! Form::open(['route' => ['actividads.destroy', $actividad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actividads.show', [$actividad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actividads.edit', [$actividad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>