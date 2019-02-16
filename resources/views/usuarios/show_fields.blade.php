<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!} {!! $usuario->id !!}
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!} {!! $usuario->name !!}
</div>

<!-- Lastname Field -->
<div class="form-group">
    {!! Form::label('lastname', 'Lastname:') !!} {!! $usuario->lastname !!}
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!} {!! $usuario->username !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!} {!! $usuario->email !!}
</div>

<!-- Password Field -->
{{--<div class="form-group">
    {!! Form::label('password', 'Password:') !!} {!! $usuario->password !!}
</div>--}}

<!-- Birthdate Field -->
<div class="form-group">
    {!! Form::label('birthdate', 'Birthdate:') !!} {!! $usuario->birthdate !!}
</div>

<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role', 'Role:') !!} {!! $usuario->role($usuario->id) !!}
</div>

<!-- Organizacion Id Field -->
{{--<div class="form-group">
    {!! Form::label('organizacion_id', 'Organizacion Id:') !!}
    <p>{!! $usuario->organizacion_id !!}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{!! $usuario->remember_token !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $usuario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $usuario->updated_at !!}</p>
</div>--}}