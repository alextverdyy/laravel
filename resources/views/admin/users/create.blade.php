@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')
    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class' => 'form-control', 'requied', 'placeholder' => 'Nombre']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Correo electronico') !!}
            {!! Form::email('email',null,['class' => 'form-control', 'requied', 'placeholder' => 'example@gmail.com']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Contraseña') !!}
            {!! Form::password('password',['class' => 'form-control', 'requied', 'placeholder' => '***************']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type','Tipo') !!}
            {!! Form::select('type',['member' => 'Miembro','admin' => 'Administrador'],null,['class' => 'form-control', 'requied']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection