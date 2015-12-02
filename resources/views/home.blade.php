@extends('layouts.dashboard')
@section('section')

        <!-- /.row -->
<div class="col-sm-12">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-signal fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $user->points }}</div>
                            <div>Points!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shield fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $user->level }}</div>
                            <div>Level!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40%
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-trophy fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $user->badges()->count() }}</div>
                            <div>Trophy case!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">15</div>
                            <div>Global ranking!</div>
                        </div>
                    </div>
                </div>
                <a href="/leaderboard">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">

            @section ('pane2_panel_title', 'What is your competition up to:')
            @section ('pane2_panel_body')

                    <!-- /.panel -->



            <ul class="timeline">
                @foreach($activities as $key=>$a)
                    <li @if($key%2!=0) class="timeline-inverted"  @endif>
                        <div class="timeline-badge"><i class="fa fa-check"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">{{ $a->description }}</h4>
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

        <!-- /.col-lg-8 -->
        <div class="col-lg-4">

            @section ('pane3_panel_title', 'Local Ranking')
            @section ('pane3_panel_body')


                <div class="list-group">

                    @foreach($localLeaderboard as $u)
                        <a href="#" class="list-group-item">
                            <strong>{{ $u->rank }}</strong> &nbsp; &nbsp;  {{$u->first_name." ".$u->last_name}}
                            <span class="pull-right text-muted small"><em>{{ $u->points }} points</em>
                                    </span>
                        </a>
                    @endforeach

                </div>
                <!-- /.list-group -->
                <a href="./leaderboard" class="btn btn-default btn-block">View Global Ranking</a>

                <!-- /.panel-body -->

            @endsection
            @include('widgets.panel', array('header'=>true, 'as'=>'pane3'))

        </div>
        <!-- /.col-lg-4 -->

@stop