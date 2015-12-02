@extends('layouts.dashboard')
@section('page_heading','Update Profile')
@section('section')
        <!-- edit form column -->
<div class="col-md-8 col-sm-6 col-xs-12 personal-info">
    @if(!empty($result))
            @if($result)
            <div class="alert alert-success alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-check"></i>
                Changes were saved <strong>successfully</strong>.
            @else
            <div class="alert alert-danger alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-exclamation-triangle"></i>
                Saving changes <strong>failed</strong>. Please try again.
            @endif
        </div>
    @endif
    <h3>Personal info</h3>

    {{ Form::open(['url'=>'profile/edit', 'class'=>'form-horizontal', 'id'=>'personal_info_form']) }}
        <div class="form-group @if($errors->first('first_name')) has-error @endif">
            {{ Form::label('first_name', 'First Name:', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-8">
                {{ Form::text('first_name', $user->first_name , ['class'=>'form-control', 'autofocus'=>'true']) }}
                @if($errors->first('first_name'))
                    <span class="help-block">{{ $errors->first('first_name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group @if($errors->first('last_name')) has-error @endif">
            {{ Form::label('last_name', 'Last Name:', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-8">
                {{ Form::text('last_name', $user->last_name , ['class'=>'form-control']) }}
                @if($errors->first('last_name'))
                    <span class="help-block">{{ $errors->first('last_name') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group @if($errors->first('email')) has-error @endif">
            {{ Form::label('email', 'E-mail:', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-8">
                {{ Form::text('email', $user->email , ['class'=>'form-control']) }}
                @if($errors->first('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group @if($errors->first('ide')) has-error @endif">
            {{ Form::label('ide', 'IDEs I use:', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-8">
                {{ Form::text('ide', null, ['class'=>'form-control']) }}
                @if($errors->first('ide'))
                    <span class="help-block">{{ $errors->first('ide') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group @if($errors->first('languages')) has-error @endif">
            {{ Form::label('languages', 'I develop in:', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-8">
                {{ Form::text('languages', null, ['class'=>'form-control']) }}
                @if($errors->first('languages'))
                    <span class="help-block">{{ $errors->first('languages') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group @if($errors->first('skills')) has-error @endif">
            {{ Form::label('skills', 'My skills:', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-8">
                {{ Form::text('skills', null, ['class'=>'form-control']) }}
                @if($errors->first('skills'))
                    <span class="help-block">{{ $errors->first('skills') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group @if($errors->first('about')) has-error @endif">
            {{ Form::label('about', 'More about me:', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-8">
                {{ Form::textarea('about', $user->about, ['class'=>'form-control']) }}
                @if($errors->first('about'))
                    <span class="help-block">{{ $errors->first('about') }}</span>
                @endif
            </div>
        </div>

    <div class="form-group">
        {{ Form::label('', '',array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::submit('Save Changes', ['class'=>'btn btn-primary', 'form'=>'personal_info_form']) }}
            <span></span>
            {{ Form::button('Cancel', ['class'=>'btn btn-default', 'type'=>'reset']) }}
        </div>
    </div>
    {{ Form::close() }}


    <h3>Change Password</h3>
    {{ Form::open(['url'=>'profile/editaccount', 'class'=>'form-horizontal','id'=>'account_info_form']) }}
    <div class="form-group @if($errors->first('old_password')) has-error @endif">
        {{ Form::label('old_password', 'Old Password:', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::password('old_password', array('class'=>'form-control')) }}
            @if($errors->first('old_password'))
                <span class="help-block">{{ $errors->first('old_password') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group @if($errors->first('password')) has-error @endif">
        {{ Form::label('password', 'Password:', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::password('password', array('class'=>'form-control')) }}
            @if($errors->first('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group @if($errors->first('password_confirmation')) has-error @endif">
        {{ Form::label('password_confirmation', 'Password confirmation:', array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::password('password_confirmation', array('class'=>'form-control')) }}
            @if($errors->first('password_confirmation'))
                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('', '',array('class' => 'col-md-3 control-label')) }}
        <div class="col-md-8">
            {{ Form::submit('Save Changes', ['class'=>'btn btn-primary', 'form'=>'account_info_form']) }}
            <span></span>
            {{ Form::button('Cancel', ['class'=>'btn btn-default', 'type'=>'reset']) }}
        </div>
    </div>
    {{ Form::close() }}
</div>
<!-- left column -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="text-center">
        {{ Form::open(array('url'=>'profile/uploadavatar', 'method'=>'POST', 'files'=>true, 'id'=>'avatar_upload_form')) }}
        <div class="form-group">
            <img src="{{ GlideImage::load($user->picture, ['w'=>295, 'h'=>295]) }}" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6>Upload a different photo...</h6>
            <input type="file" id="avatar" name="avatar" class="text-center center-block well well-sm">
        </div>
        {{ Form::submit('Upload Avatar', ['class'=>'btn btn-primary btn-block', 'form'=>'avatar_upload_form']) }}
        {{ Form::close() }}
    </div>
</div>
@stop
@section('scripts')
    <script src="{{ asset("assets/scripts/bootstrap-tokenfield.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/updateprofile.js") }}" type="text/javascript"></script>
@stop