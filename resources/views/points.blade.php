@extends('layouts.dashboard')
@section('page_heading','Points History')

@section('section')
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                @section ('cotable_panel_title','Your points history:')
                @section ('cotable_panel_body')
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Points</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pointsHistory as $act)
                            <tr>
                                <td>{{ $act->name }}</td>
                                <td>{{ $act->points }}</td>
                                <td>{{ $act->created_at }}</td>
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