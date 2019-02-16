<table class="table table-responsive table-striped table-bordered table-hover table-checkable datatable" id="usuarios-table">
    <thead>
        <tr>
            <th>Usuario</th>
            {{--<th>Lastname</th>--}}
            <th>Username</th>
            <th>Email</th>
            {{--<th>Password</th>--}}
            {{--<th>Birthdate</th>--}}
            <th>Role</th>
            {{--<th>Organizacion Id</th>--}}
            {{--<th>Remember Token</th>--}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{!! $usuario->name !!} {!! $usuario->lastname !!}</td>
            {{--<td>{!! $usuario->lastname !!}</td>--}}
            <td>{!! $usuario->username !!}</td>
            <td>{!! $usuario->email !!}</td>
            {{--<td>{!! $usuario->password !!}</td>--}}
            {{--<td>{!! $usuario->birthdate !!}</td>--}}
            <td>{!! $usuario->role($usuario->role) !!}</td>
            {{--<td>{!! $usuario->organizacion_id !!}</td>--}}
            {{--<td>{!! $usuario->remember_token !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuarios.show', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usuarios.edit', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>