@extends('layouts.app')

@section('content')
            {!! Form::open(array('url' => 'login')) !!}
              {!! Form::token() !!}
              <section>
                  <p class="form-element form-error">
                    <font color='red'>
                        {!! $errors->first('email') !!}
                        {!! $errors->first('password') !!}
                    </font>
                  </p>
                </section>
         
              <section>
                {!! Form::label('email', 'Email Address') !!}
                {!! Form::text('email', Input::old('email'), array('placeholder' => 'user@appnovation.com', 'class' => 'form-element form-field')) !!}
              </section>

              <section>
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', array('class' => 'form-element form-field')) !!}
              </section>

              <section>
                {!! Form::submit('Login', array('class' => 'form-element form-button')) !!}
              </section>
              {!! Form::close() !!}
             @if (Auth::guest())
                        <a href="{{ url('/register') }}" class="register">Register</a>
            @endif
@endsection
