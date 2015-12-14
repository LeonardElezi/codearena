@extends('layouts.dashboard')
@section('section')

    <div class="col-lg-8">

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="row" style="margin-left: auto; margin-right: auto">
                    <div class="col-xs-12 col-sm-8">
                        <h1> {{ $user->first_name  }} {{ $user->last_name }}</h1>
                        <p><strong>About: </strong> {{ $user->about }} </p>
                        <p><strong>Preferred IDEs: </strong> @foreach($user->ides()->get() as $ide) <span class="label label-info tags">{{ $ide->name }}</span> @endforeach </p>
                        <p><strong>Programming Languages: </strong> @foreach($user->programminglanguages()->get() as $pl) <span class="label label-info tags">{{ $pl->name }}</span> @endforeach </p>
                        <p><strong>Skills: </strong>
                            @foreach($user->skills()->get() as $sk)
                            <span class="label label-info tags">{{ $sk->name }}</span>
                            @endforeach

                        </p>
                    </div><!--/col-->
                    <div class="col-xs-12 col-sm-4 text-center">
                        <a id="avatar_link" href="#" data-toggle="modal" data-target="#myModal"><img id="avatar_image" src="{{ GlideImage::load($user->picture, ['w'=>295, 'h'=>295]) }}" alt="" id="avatar" class="center-block img-circle img-responsive"></a>
                        <ul class="list-inline ratings text-center" title="Ratings">
                            <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                            <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                            <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                            <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                            <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
                        </ul>
                    </div><!--/col-->
                    </div>

                    <div class="row" style="margin-left: auto; margin-right: auto">

                        <div class="col-xs-12 col-sm-4">
                            <h2><strong> {{ $user->followed()->count() }} </strong></h2>
                            <p><small>Followers</small></p>
                        </div><!--/col-->
                        <div class="col-xs-12 col-sm-4">
                            <h2><strong>{{ $user->follows()->count() }}</strong></h2>
                            <p><small>Following</small></p>
                        </div><!--/col-->
                        <div class="col-xs-12 col-sm-4">
                            <h2><strong>{{ $user->level }}</strong></h2>
                            <p><small>Level</small></p>
                        </div><!--/col-->
                    </div>
                    <div class="row" style="margin-left: auto; margin-right: auto">

                        <div class="col-xs-12 col-sm-4">
                            <button class="btn btn-success btn-block" onclick="location.href='/followers/{{ $user->id }}'"><span class="fa fa-plus-circle"></span> See followers </button>
                        </div><!--/col-->
                        <div class="col-xs-12 col-sm-4">
                            <button type="button" class="btn btn-primary btn-block" onclick="location.href='/following/{{ $user->id }}'"><span class="fa fa-gear"></span> See following </button>
                        </div><!--/col-->
                        <div class="col-xs-12 col-sm-4">
                            @if($disable)
                                <button class="btn btn-info btn-block" onclick="location.href='/profile/{{ $user->id }}'"><span class="fa fa-user"></span> Refresh Profile </button>

                            @else
                                <button class="btn btn-info btn-block" onclick="location.href='/profile/update'"><span class="fa fa-user"></span> Edit Profile </button>
                            @endif


                        </div><!--/col-->
                    </div>
                </div><!--/row-->
            </div><!--/panel-body-->
        </div><!--/panel-->

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="kv-avatar-errors" class="center-block" style="width:300px;display:none"></div>
                        {{ Form::open(array('url'=>'/profile/uploadavatar', 'method'=>'POST', 'class'=>'text-center', 'files'=>true, 'id'=>'avatar_upload_form')) }}
                            <div class="kv-avatar center-block" style="width:200px">
                                <input id="avatar" name="avatar" type="file" class="file-loading">
                            </div>
                        {{ Form::close() }}
                    </div>
                    <div class="modal-footer" style="margin: 0 au">

                                    <button id="avatar_submit" form="avatar_upload_form" type="submit" class="btn btn-success">Submit</button>
                                    <button class="btn btn-success" data-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
        </div>



    </div>
    <div class="col-lg-4">
        @section ('pane4_panel_title', 'Points')
        @section ('pane4_panel_body')
                <h1 class="text-center">{{ $user->points }}</h1>
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'pane4'))
    </div>
    <div class="col-lg-4">
        @section ('pane3_panel_title', 'Badges')
        @section ('pane3_panel_body')
            @if($user->badges()->count() > 0)
                @foreach($user->badges()->get() as $badge)
                    {{ $badge->title }}
                @endforeach
            @else
                <h4 class="text-center">No badges earned yet!</h4>
            @endif

        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'pane3'))
    </div>
    <div class="col-lg-12">

        @section ('pane2_panel_title', 'Recent Activity')
        @section ('pane2_panel_body')

                <!-- /.panel -->


        <ul class="timeline">
            @foreach($activities as $key=>$a)
                <li @if($key%2!=0) class="timeline-inverted"  @endif>
                    <div class="timeline-badge"><img id="avatar_image" src="{{ GlideImage::load($a->user->picture, ['w'=>50, 'h'=>50]) }}" alt="" id="avatar" class="center-block img-circle img-responsive">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title"><a href="/profile/{{ $a->user->id }}">{{ $a->user->first_name." ".$a->user->last_name }}</a>{{" ".$a->name }}</h4>
                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> {{ $a->created_at->diffForHumans(); }}</small>
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <!-- /.panel-body -->

        <!-- /.panel -->
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
    </div>
@stop
@section('scripts')
    <script src="{{ asset("assets/scripts/canvas-to-blob.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/fileinput.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/avatar.js") }}" type="text/javascript"></script>
@stop
