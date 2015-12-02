@extends('layouts.dashboard')
@section('page_heading','Leaderboard')

@section('section')
    <div class="col-sm-12">
        <div class="row">
                <div class="col-sm-12">
                    @section ('cotable_panel_title','You are followed by:')
                    @section ('cotable_panel_body')
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Name</th>
                                <th>Points</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $u)
                                <tr>
                                    <td><strong>{{ $u->rank }}</strong></td>
                                    <td>{{ $u->first_name." ".$u->last_name}}</td>
                                    <td class="text-center">{{ $u->points }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
                </div>
            </div>
        </div>
@stop