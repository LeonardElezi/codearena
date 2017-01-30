<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie6"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie7"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie8"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie9" data-placeholder-focus="false"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google" value="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CodeArena: Learn refactoring patterns</title>
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/home0.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/home1.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/home2.css") }}"/>
</head>

<body class="global-en compact-enabled" style="overflow: auto;" lang="en">
<div id="topbar">
    <header class="topbar   topbar-blue">
        <div class="container"><a href="https://www.duolingo.com/"
                                  class="topbar-brand navigate-home track-click white "></a>
            <div id="global-loading-indicator" class="loading-indicator  " style="display: none;">
                <div class="loader"></div>
            </div>
            <nav class="topbar-nav">
                <ul class="topbar-nav-main">
                    <li id="home-nav"><a href="{{ url('/') }}">Home</a></li>
                    <li id="stream-nav"><a href="{{ url('/activity_stream') }}">Activity</a></li>
                </ul>
            </nav>
            <div class="topbar-right" style="">
                <div class="hamburger"></div>
                <div class="dropdown topbar-username">
                    <div data-toggle="dropdown" class=""><a href="{{ url('/profile/'.$user->id) }}"
                                                            class="avatar avatar-small " title="leonardelezi"><img
                                    src="{{ GlideImage::load($user->picture, ['w'=>295, 'h'=>295]) }}"><span class="ring"></span></a> <span
                                class="name">{{ $user->first_name }} {{ $user->last_name }}</span><span class="icon icon-arrow-down-white"></span></div>
                    <ul class="dropdown-menu arrow-top" role="menu" aria-labelledby="dLabel">
                        <li><a href="{{ url('/profile/'.$user->id) }}">Your Profile</a></li>
                        <li><a href="https://www.duolingo.com/settings/account" class="track-click"
                               id="header_userdrop_settings">Settings</a></li>
                        <li><a class="track-click" id="header_userdrop_logout">Logout</a></li>
                    </ul>
                </div>
                <ul class="topbar-stats">
                    <li class="streak" data-toggle="tooltip" title="0 day streak" data-placement="bottom"><span
                                class="icon icon-streak-small "></span> 0
                    </li>
                    <li class="lingots" data-toggle="tooltip" title="" data-placement="bottom"
                        data-original-title="Lingots"><a href="https://www.duolingo.com/show_store"><span
                                    class="icon icon-lingot-small"></span><span id="num_lingots"> 91</span></a></li>
                    <li class="notifications">
                        <button class="toggle-notifications btn btn-custom btn-notifications " data-placement="bottom"
                                title=""><span class="icon icon-notification-small"></span></button>
                        <div id="popover-notifications" class="popover notification-popover-content hidden"
                             style="position:fixed;"></div>
                    </li>
                </ul>
            </div>
            <div id="logged-out-message" class="logged-out-message"></div>
        </div>
    </header>
    <div id="alert-modals"></div>
</div>
<div id="app" class="profile">
    <main class="main-left">
        <section class="page-sidebar sidebar-right">
            <div class="inner">
                <div class="box-gray box-achievements"><h2>Achievements</h2>
                    <ul class="sidebar-stats">
                        <li><h3 class="gray">Streak</h3><span class="icon icon-streak-small-normal "></span>
                            <strong>0</strong> Days
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
                                    <div class="language-name">Dutch - Level 10</div>
                                    <div class="substat">Next level: 273 XP</div>
                                    <div class="substat">Total XP: 2727 XP</div>
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

<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
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

</body>
</html>