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
        <div class="container"><a href="{{ url('/') }}"
                                  class="navigate-home track-click white "></a>
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
                        <li><a href="{{ url('/settings/account/') }}" class="track-click"
                               id="header_userdrop_settings">Settings</a></li>
                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                </div>
                <ul class="topbar-stats">
                    <li class="streak" data-toggle="tooltip" title="{{ $user->day_streak }} day streak" data-placement="bottom"><span
                                class="icon icon-streak-small "></span> {{ $user->day_streak }}
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

@yield('app')

<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
@yield('scripts')

</body>
</html>