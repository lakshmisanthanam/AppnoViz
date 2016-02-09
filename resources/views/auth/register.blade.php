@extends('layouts.app')

@section('content')
    {!! Form::open(array('url' => 'register')) !!}
    {!! Form::token() !!}

    <section>
        {!! Form::label('name', 'Name') !!}
        <font color='red'>
            @if ($errors->has('name'))
                <strong>{{ $errors->first('name') }}</strong><br>
            @endif
        </font>
        {!! Form::text('name', Input::old('name'), array('placeholder' => 'name', 'class' => 'form-element form-field')) !!}
    </section>

    <section>
        {!! Form::label('email', 'Email Address') !!}
        <font color='red'>
           @if ($errors->has('email'))
                <strong>{{ $errors->first('email') }}</strong><br>
            @endif
        </font>
        {!! Form::text('email', Input::old('email'), array('placeholder' => 'user@appnovation.com', 'class' => 'form-element form-field')) !!}
    </section>
                       
    <section>
        {!! Form::label('password', 'Password') !!}
        <font color='red'>
           @if ($errors->has('password'))
                <strong>{{ $errors->first('password') }}</strong><br>
            @endif
        </font>
        {!! Form::password('password', array('class' => 'form-element form-field')) !!}
    </section>
                        
    <section>
        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        <font color='red'>
           @if ($errors->has('password_confirmation'))
                <strong>{{ $errors->first('password_confirmation') }}</strong><br>
            @endif
        </font>
        {!! Form::password('password_confirmation', array('class' => 'form-element form-field')) !!}
    </section>

    <section>
        {!! Form::submit('Register', array('class' => 'form-element form-button')) !!}
    </section>

    {!! Form::close() !!}                    

@endsection
