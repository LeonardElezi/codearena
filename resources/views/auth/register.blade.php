@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Please Sign Up')
               @section ('login_panel_body')
                        {{ Form::open(['url'=>'auth/register']) }}
                            <fieldset>
                                <div class="form-group @if($errors->first('first_name')) has-error @endif">
                                    {{ Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'First Name', 'autofocus'=>'true']) }}
                                    @if($errors->first('first_name'))
                                        <span class="help-block">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group @if($errors->first('last_name')) has-error @endif">
                                    {{ Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Last Name', 'autofocus'=>'true']) }}
                                    @if($errors->first('last_name'))
                                        <span class="help-block">{{ $errors->first('last_name') }}</span>
                                    @endif
                                </div>
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
                                <div class="form-group  @if($errors->first('password_confirmation')) has-error @endif">
                                    {{ Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirm Password', 'type'=>'password']) }}
                                    @if($errors->first('password_confirmation'))
                                        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>

                                {{ Form::submit('Sign Up', ['class'=>'btn btn-lg btn-success btn-block']) }}
                            </fieldset>
                        {{ Form::close() }}
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop