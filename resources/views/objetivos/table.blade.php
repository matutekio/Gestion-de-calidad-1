<table class="table table-responsive" id="objetivos-table">
    <thead>
        <tr>
            <th>Objetivo</th>
        {{--<th>Organizacion Id</th>--}}
            @if(Auth::user()->role == 2 || Auth::user()->role == 1)
            <th>Action</th>
            @endif
        </tr>
    </thead>
    <tbody>
    @foreach($objetivos as $objetivos)
        <tr>
            <td>{!! $objetivos->objetivo !!}</td>
{{--            <td>{!! $objetivos->organizacion_id !!}</td>--}}
            @if(Auth::user()->role == 2 || Auth::user()->role == 1)
            <td>
                {!! Form::open(['route' => ['objetivos.destroy', $objetivos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('objetivos.show', [$objetivos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('objetivos.edit', [$objetivos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>