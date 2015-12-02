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
                            <button class="btn btn-info btn-block" onclick="location.href='/profile/update'"><span class="fa fa-user"></span> Edit Profile </button>
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
            <li>
                <div class="timeline-badge"><i class="fa fa-check"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge info"><i class="fa fa-save"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                        <hr>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-gear"></i>  <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a>
                                </li>
                                <li><a href="#">Another action</a>
                                </li>
                                <li><a href="#">Something else here</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                    </div>
                </div>
            </li>
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
