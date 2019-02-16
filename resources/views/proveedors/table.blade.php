<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="proveedors-table">
    <thead>
        <tr>
            <th>Proveedor</th>
            <th>Descripcion</th>
            {{--<th>Organizacion Id</th>--}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($proveedors as $proveedor)
        <tr>
            <td>{!! $proveedor->proveedor !!}</td>
            <td>{!! $proveedor->descripcion !!}</td>
{{--            <td>{!! $proveedor->organizacion_id !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['proveedors.destroy', $proveedor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('proveedors.show', [$proveedor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('proveedors.edit', [$proveedor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>