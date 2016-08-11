@extends('layouts.admin')
@section('content')

    {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
        <div class="form-group">
            {!!Form::label('Nombre:')!!}
            {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre','required'])!!}                          
        </div>
        <div class="form-group">
            {!!Form::label('E-mail:')!!}
            {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'E-mail','required'])!!}                          
        </div>
        <div class="form-group">
            {!!Form::label('Contraseña:')!!}
            {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Contraseña','required'])!!}                          
        </div>
        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}


@endsection