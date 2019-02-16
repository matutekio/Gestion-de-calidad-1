<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="indicadors-table">
    <thead>
        <tr>
            <th>Indicador</th>
            {{--<th>Descripcion</th>--}}
            <th>Proceso</th>
            <th>Actividad</th>
            <th>Frecuencia</th>
            <th>Tipo indicador</th>
            <th>Meta</th>
            <th>Forma Calculo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($indicadors as $indicador)
        <tr>
            <td>{!! $indicador->indicador !!}</td>
            {{--<td>{!! $indicador->descripcion !!}</td>--}}
            <td>{!! $indicador->proceso_id !!}</td>
            <td>{!! $indicador->actividad_id !!}</td>
            <td>{!! $indicador->frecuencia_id !!}</td>
            <td>{!! $indicador->tipoIndicador_id !!}</td>
            <td>{!! $indicador->meta !!}</td>
            <td>{!! $indicador->forma_calculo !!}</td>
            <td>
                {!! Form::open(['route' => ['indicadors.destroy', $indicador->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('indicadors.show', [$indicador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    @if(Auth::user()->role == 2 || Auth::user()->role == 1)
                    <a href="{!! route('indicadors.edit', [$indicador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>