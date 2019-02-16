<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="actividads-table">
    <thead>
        <tr>
            <th>Proceso</th>
            <th>Actividad</th>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($actividads as $actividad)
        <tr>
            <td>{!! $actividad->proceso($actividad->proceso_id) !!}</td>
            <td>{!! $actividad->actividad !!}</td>
            <td>{!! $actividad->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['actividads.destroy', $actividad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actividads.show', [$actividad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user()->role == 2 || Auth::user()->role == 1)
                    <a href="{!! route('actividads.edit', [$actividad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>