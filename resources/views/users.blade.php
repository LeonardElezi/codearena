@extends('layouts.dashboard')
@section('page_heading','Followers')

@section('section')
<div class="col-sm-12">
<div class="row">
    @if(!empty($result))
        @if($result['is_blocked']===true)
			<div class="alert alert-danger alert-dismissable">
				<a class="panel-close close" data-dismiss="alert">×</a>
				<i class="fa fa-exclamation-triangle"></i>
				{{ $result['message'] }}
        @else
			<div class="alert alert-success alert-dismissable">
				<a class="panel-close close" data-dismiss="alert">×</a>
				<i class="fa fa-check"></i>
				{{ $result['message'] }}
        @endif
            </div>
    @endif
	<div class="col-sm-12">
		@section ('cotable_panel_title','All the users of the system:')
		@section ('cotable_panel_body')
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			@foreach($users as $u)
                <tr>
                    <td>{{ $u->first_name." ".$u->last_name}}</td>
                    <td>{{ $u->email }}</td>
					<td class="text-center">
						@if(!$user->hasFollowed($u))
							<button id="follow_button" class="btn btn-success" onclick="location.href='/follow/{{ $u->id }}'">Follow</button>
						@endif
					</td>
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