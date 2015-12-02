@extends ('layouts.plane')
@section ('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br /><br /><br />
                @section ('login_panel_title','Please Sign In')
                @section ('login_panel_body')
                    {{ Form::open(['url'=>'auth/login'])  }}
                    <fieldset>
                        <div class="form-group  @if($errors->first('email')) has-error @endif">
                            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'E-mail']) }}
                            @if($errors->first('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group  @if($errors->first('password')) has-error @endif">
                            {{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'type'=>'password']) }}
                            @if($errors->first('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                {{ Form::checkbox('remember') }} Remember Me
                            </label>
                        </div>
                        {{ Form::submit('Sign In', ['class'=>'btn btn-lg btn-success btn-block']) }}
                        <div class="checkbox">
                            <a href="/password/email">Forgot Your Password? </a>
                        </div>
                    </fieldset>
                    {{ Form::close()  }}

                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop