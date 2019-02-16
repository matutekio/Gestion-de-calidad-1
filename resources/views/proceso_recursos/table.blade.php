<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="procesoRecursos-table">
    <thead>
        <tr>
            {{--<th>Proceso Id</th>--}}
            <th>Recurso</th>
            @if(Auth::user()->role == 2 || Auth::user()->role == 1)
            <th>Action</th>
            @endif
        </tr>
    </thead>
    <tbody>
    @foreach($procesoRecursos as $procesoRecurso)
        <tr>
            {{--<td>{!! $procesoRecurso->proceso_id !!}</td>--}}
            <td>{!! $procesoRecurso->recurso($procesoRecurso->recurso_id) !!}</td>
            @if(Auth::user()->role == 2 || Auth::user()->role == 1)
            <td>
                {!! Form::open(['route' => ['procesoRecursos.destroy', $procesoRecurso->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('procesoRecursos.show', [$procesoRecurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('procesoRecursos.edit', [$procesoRecurso->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
<script>
    $(function () {
        $('#procesoRecursos-table').DataTable({
            "scrollY": "25vh",
            "scrollCollapse": true
        });
    });
</script>