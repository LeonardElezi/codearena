@extends('layouts.duo')
@section('app')
<div id="app" class="settings">
    <main class="main-right">
        <section class="page-sidebar sidebar-left">
            <div class="inner">
                <div class="box-colored bg-white"><h2 class="view-profile-headline"><a
                                href="{{ url('/profile/'.$user->id) }}" class="avatar avatar-small"
                                title="leonardelezi"><img src="{{ GlideImage::load($user->picture, ['w'=>48, 'h'=>48]) }}"/><span
                                    class="ring"></span></a> {{ $user->email }} <a
                                href="{{ url('/profile/'.$user->id) }}" class="username">View your profile</a></h2>
                    <ul id="settings_tab" class="nav-sidebar">
                        <li><a href="{{ url('/settings/account') }}">Account</a></li>
                        <li class="active"><a href="{{ url('/settings/coach') }}" id="coach_tab">Coach<span
                                        class="icon-arrow-right icon"></span></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="page-main main-right">
            <div id="tab-container">
                <button id="submit_button" type="submit" class="btn btn-green right">Save changes
                </button>
                <div id="confirmation-message" class="hidden save-message">Saved!</div>
                <div id="error-message" class="hidden error-message">Error</div>
                <h1 class="with-subheading">Daily Goal settings</h1>
                <div class="sub-text gray">Coach here! Selecting a daily goal will help you stay motivated while
                    learning refactoring. You can change your goal at any time.
                </div>
                <div class="coach-settings">
                    <span class="owl owl-coach-small left"><img src="{{ GlideImage::load('coach.png', ['w'=>200, 'h'=>200]) }}"></span><span
                            class="coach-goal-chooser left">
                        <ul class="goal-chooser">
                            @foreach($dailyGoals as $dg)
                                @if($user->dailygoal()->get()[0]->id==$dg->id)
                                    <li id="daily_goal"><label class="btn btn-standard btn-small btn-outline daily-goal-option"><input
                                                    name="daily_goal" data-goal="{{ $dg->id }}" type="radio" checked="checked"> <span
                                                    class="title">{{ $dg->xptext }}</span> <span class="xp-text">{{ $dg->experience }} XP per day</span></label></li>
                                @else
                                    <li id="daily_goal"><label class="btn btn-standard btn-small btn-outline daily-goal-option"><input
                                                    name="daily_goal" data-goal="{{ $dg->id }}" type="radio"> <span
                                                    class="title">{{ $dg->xptext }}</span> <span class="xp-text">{{ $dg->experience }} XP per day</span></label></li>
                                @endif
                            @endforeach
                        </ul>
                    </span>
                </div>
            </div>
        </section>
        <div class="footer-main">
            <ul class="nav-footer">
                <li><a href="https://www.duolingo.com/info" tabindex="100">About</a></li>
                <li><a href="https://englishtest.duolingo.com/" tabindex="102">Duolingo English Test</a></li>
                <li class="mobile-hidden"><a href="https://www.duolingo.com/mobile" tabindex="103">Mobile</a></li>
                <li class="mobile-hidden"><a href="http://gear.duolingo.com/" tabindex="104" target="_blank">Gear</a>
                </li>
                <li class="mobile-hidden"><a href="https://www.duolingo.com/help" tabindex="105">Help</a></li>
                <li class="mobile-hidden"><a href="https://www.duolingo.com/guidelines" tabindex="106">Guidelines</a>
                </li>
                <li><a href="https://www.duolingo.com/jobs" tabindex="107">Jobs</a></li>
                <li class="mobile-hidden"><a href="https://www.duolingo.com/terms" tabindex="108">Terms</a></li>
                <li class="mobile-hidden"><a href="https://www.duolingo.com/privacy" tabindex="109">Privacy</a></li>
                <li class="mobile-hidden"><a href="http://twitter.com/duolingo" tabindex="130"><span
                                class="icon icon-twitter-small"></span></a></li>
                <li class="mobile-hidden"><a href="http://facebook.com/duolingo" tabindex="140"><span
                                class="icon icon-fb-small"></span></a></li>
                <span class="social-footer"><li><a href="http://twitter.com/duolingo" tabindex="130"><span
                                    class="icon icon-twitter-small"></span></a></li><li><a
                                href="http://facebook.com/duolingo" tabindex="140"><span
                                    class="icon icon-fb-small"></span></a></li></span></ul>
        </div>
    </main>
</div>
@endsection
@section('scripts')
<script type="application/javascript">
    $(document).ready(function(){

        $("#submit_button").click(function (e) {

            var tok = $('meta[name="_token"]').attr('content');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            e.preventDefault();

            var dataGoalId = $('input[name=daily_goal]:checked').data("goal");
            if(dataGoalId){
                var form_data = new FormData();
                form_data.append('daily_goal', dataGoalId);

                $.ajax({
                    async: true,
                    type: 'POST',
                    contentType: false,
                    url:'{{ url('/settings/coach/save') }}',
                    data: form_data,
                    processData: false,
                    enctype:"multipart/form-data",
                    success: function (data) {
                        $('#confirmation-message').removeClass('hidden');
                        setTimeout(function(){
                            hideResultMessage($('#confirmation-message'));
                        }, 2000);
                    },
                    error: function (data) {
                        $('#error-message').removeClass('hidden');
                        setTimeout(function(){
                            hideResultMessage($('#error-message'));
                        }, 2000);
                    }
                });
            }
            function hideResultMessage(elementToHide) {
                elementToHide.addClass('hidden');
            }
        });
    });
</script>
@stop