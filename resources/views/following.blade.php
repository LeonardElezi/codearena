@extends('layouts.dashboard')
@section('page_heading','Following')

@section('section')
<div class="col-sm-12">
<div class="row">
    @if(!empty($result))
        @if($result['is_unfollowed']===true)
            <div class="alert alert-success alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-check"></i>
                {{ $result['message'] }}
                @else
                    <div class="alert alert-danger alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-exclamation-triangle"></i>
                        {{ $result['message'] }}
                        @endif
                    </div>
                @endif
	<div class="col-sm-12">
		@section ('cotable_panel_title','You are following:')
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
				@foreach($user->follows()->get() as $follower)
					<tr>
						<td>{{ $follower->first_name." ".$follower->last_name}}</td>
						<td>{{ $follower->email }}</td>
						<td class="text-center"><button id="unfollow_button" class="btn btn-success" onclick="location.href='/unfollow/{{ $follower->id }}'">Unfollow</button></td>
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