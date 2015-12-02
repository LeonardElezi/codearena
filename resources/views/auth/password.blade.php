@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Reset Password')
               @section ('login_panel_body')
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   {{ Form::open(['url'=>'password/email'])  }}
                            <fieldset>
                                <div class="form-group  @if($errors->first('email')) has-error @endif">
                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'E-mail']) }}
                                    @if($errors->first('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                {{ Form::submit('Send Reset Link', ['class'=>'btn btn-lg btn-success btn-block']) }}
                            </fieldset>
                    {{ Form::close()  }}
                    
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop