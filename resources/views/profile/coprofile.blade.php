@extends('layouts.duo')
@section('app')
    <div id="app" class="profile">
        <main class="main-left">
            <section class="page-sidebar sidebar-right">
                <div class="inner">
                    <div class="box-gray box-achievements"><h2>Achievements</h2>
                        <ul class="sidebar-stats">
                            <li><h3 class="gray">Streak</h3><span class="icon icon-streak-small-normal "></span>
                                <strong>{{ $user->day_streak }}</strong> Days
                            </li>
                            <!-- <li><h3 class="gray">Highest Streak</h3><span class="icon icon-streak-small"></span> <strong>0</strong> Days</li> -->
                        </ul>
                        <h3 class="gray">Refactoring Skills</h3>
                        <ul class="profile-language-list">
                            <li>
                                <div class="profile-language">
                                    <div class="course-card dn course-profile-badge">
                                        <div class="course-card-header course-page-illustration-dn gradient">
                                            <div class="small-course-illustration layer-1"></div>
                                            <div class="small-course-illustration layer-2"></div>
                                            <div class="small-course-illustration layer-3"></div>
                                        </div>
                                    </div>
                                    <div class="language-info">
                                        <div class="language-name">Refactoring - Level {{ $user->level }}</div>
                                        <div class="substat">Next level: 273 XP</div>
                                        <div class="substat">Total XP: {{ $user->points }} XP</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box-gray">
                        <div id="friends"><h2 class="friends-title" data-search="Search for other learners"
                                              data-fb="Facebook friends">Friends</h2>
                            <ul class="nav-tabs following-switch">
                                <li id="switch-following" class="switch-friends active" data-tab="following"><a
                                            href="javascript:;">Following: {{ count($user->follows()->get()) }}</a></li>
                                <li id="switch-followers" class="switch-friends" data-tab="followers"><a
                                            href="javascript:;">Followers: {{ count($user->followed()->get()) }}</a></li>
                            </ul>
                            <ul id="followers" class="avatar-grid hidden">
                                @foreach($user->followed()->get() as $follower)
                                    <li><a href="{{ url('/profile/'.$follower->id) }}" class="avatar avatar-medium"><img
                                                    src="{{ GlideImage::load($follower->picture, ['w'=>48, 'h'=>48]) }}"><span class="ring"></span></a></li>
                                @endforeach
                            </ul>
                            <ul id="following" class="avatar-grid ">
                                @foreach($user->follows()->get() as $follower)
                                    <li><a href="{{ url('/profile/'.$follower->id) }}" class="avatar avatar-medium"><img
                                                    src="{{ GlideImage::load($follower->picture, ['w'=>48, 'h'=>48]) }}"><span class="ring"></span></a></li>
                                @endforeach
                            </ul>
                            <div id="add-more-friends">
                                <div id="search-friends" class="board hidden">
                                    <ul id="search-list-results"></ul>
                                </div>
                                <div id="fb-friends" class="hidden board">
                                    <ul class="list-leaderboard"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page-main main-left">
                <header class="profile-header"><a href="{{ url('/profile/'.$user->id) }}" class="avatar avatar-xlarge"
                                                  title="{{ $user->email }}"><img src="{{ GlideImage::load($user->picture, ['w'=>200, 'h'=>200]) }}"><span
                                class="ring"></span></a>
                    <h1 class="profile-header-username">{{ $user->first_name  }} {{ $user->last_name }}</h1>
                    <h2 class="profile-header-subline "><span class="real-name">{{ $user->email }}</span>
                        <ul class="user-social-links"></ul>
                    </h2>
                </header>
                <div id="stream-container" class="stream-container">
                    <ul class="activity-stream">
                        <li class="stream-item"><a href="{{ url('/profile/'.$user->id) }}"
                                                   class="avatar avatar-medium "><img
                                        src="{{ GlideImage::load($user->picture, ['w'=>48, 'h'=>48]) }}"><span class="ring"></span></a> <span
                                    class="stream-item-type default"></span>
                            <header class="stream-item-header"><span class="left"><a
                                            href="{{ url('/profile/'.$user->id) }}"
                                            class="username">{{ $user->first_name }} {{ $user->last_name }}</a></span><span class="stream-item-time">


1 month ago

</span></header>
                            <p class="stream-item-content">started following <a
                                        href="https://www.duolingo.com/Lauren272422">Lauren272422</a></p>
                        </li>
                    </ul>
                    <a id="more-stream" class="btn" href="javascript:;">load more</a></div>
            </section>
        </main>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">

        $(document).ready(function(){
            $('#switch-following').click(function() {
                $('#switch-followers').removeClass('active');
                $('#switch-following').addClass('active');
                $('#followers').addClass('hidden');
                $('#following').removeClass('hidden');
            });

            $('#switch-followers').click(function() {
                $('#switch-following').removeClass('active');
                $('#switch-followers').addClass('active');
                $('#following').addClass('hidden');
                $('#followers').removeClass('hidden');
            });
        });
    </script>
@stop