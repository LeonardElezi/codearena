<!DOCTYPE html>
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

<body class="global-en compact-enabled" lang="en" style="overflow: auto;">

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
                                    src="{{ GlideImage::load($user->picture, ['w'=>295, 'h'=>295]) }}"><span
                                    class="ring"></span></a> <span
                                class="name">{{ $user->first_name }} {{ $user->last_name }}</span><span
                                class="icon icon-arrow-down-white"></span></div>
                    <ul class="dropdown-menu arrow-top" role="menu" aria-labelledby="dLabel">
                        <li><a href="{{ url('/profile/'.$user->id) }}">Your Profile</a></li>
                        <li><a href="{{ url('/settings/account') }}" class="track-click"
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
<div id="app" class="settings">
    <main class="main-right">
        <section class="page-sidebar sidebar-left">
            <div class="inner">
                <div class="box-colored bg-white"><h2 class="view-profile-headline"><a
                                href="{{ url('/profile/'.$user->id) }}" class="avatar avatar-small"
                                title="leonardelezi"><img
                                    src="{{ GlideImage::load($user->picture, ['w'=>48, 'h'=>48]) }}"><span
                                    class="ring"></span></a> {{ $user->email }} <a
                                href="{{ url('/profile/'.$user->id) }}" class="username">View your profile</a></h2>
                    <ul id="settings_tab" class="nav-sidebar">
                        <li><a href="{{ url('/settings/account') }}">Account</a></li>
                        <li class="active"><a href="{{ url('/settings/notifications') }}">Notifications</a>
                        </li>
                        <li><a href="{{ url('/settings/coach') }}" id="coach_tab">Coach<span
                                        class="icon-arrow-right icon"></span></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="page-main main-right">
            <div id="tab-container">
                <div id="notifications-content" class="settings-content">
                    <button id="submit_button" type="submit" class="btn btn-green right" disabled="disabled">Save
                        changes
                    </button>
                    <div id="confirmation-message" class="hidden save-message">Saved!</div>
                    <div id="error-message" class="hidden error-message">Error</div>
                    <h1>Notifications</h1>
                    <h3 class="gray">General</h3>
                    <hr class="margin-top">
                    <ul class="list-settings">
                        <li><label class="label" for="notify_follow">Email me when</label>
                            <div class="input">
                                <ul class="inputs-inline left">
                                    <li><label><input class="border" id="notify_pass" name="notify_pass"
                                                      checked="checked" type="checkbox"></label></li>
                                </ul>
                                <p class="gray gray-text">Somebody passes me</p>
                                <ul class="inputs-inline left">
                                    <li><label><input class="border" id="notify_comment" name="notify_comment"
                                                      checked="checked" type="checkbox"></label></li>
                                </ul>
                                <p class="gray gray-text">Somebody responds to a discussion I'm following</p>
                            </div>
                        </li>
                    </ul>
                    <h3 class="gray">Daily reminders</h3>
                    <hr class="margin-top">
                    <ul class="list-settings">
                        <li><label class="label" for="notify_follow">Email me when</label>
                            <div class="input">
                                <ul class="inputs-inline left">
                                    <li><label><input class="border" name="language_settings.dn.notify_practice"
                                                      checked="checked" type="checkbox"></label></li>
                                </ul>
                                <p class="gray gray-text">I forget to practice Dutch by <select class="small"
                                                                                                name="language_settings.dn.notify_time">
                                        <option value="0">12am</option>
                                        <option value="60">1am</option>
                                        <option value="120">2am</option>
                                        <option value="180">3am</option>
                                        <option value="240">4am</option>
                                        <option value="300">5am</option>
                                        <option value="360">6am</option>
                                        <option value="420">7am</option>
                                        <option value="480">8am</option>
                                        <option value="540">9am</option>
                                        <option value="600">10am</option>
                                        <option value="660">11am</option>
                                        <option value="720">12pm</option>
                                        <option value="780">1pm</option>
                                        <option value="840">2pm</option>
                                        <option selected="selected" value="900">3pm</option>
                                        <option value="960">4pm</option>
                                        <option value="1020">5pm</option>
                                        <option value="1080">6pm</option>
                                        <option value="1140">7pm</option>
                                        <option value="1200">8pm</option>
                                        <option value="1260">9pm</option>
                                        <option value="1320">10pm</option>
                                        <option value="1380">11pm</option>
                                    </select></p>
                            </div>
                        </li>
                    </ul>
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

<script type="application/javascript">
    $(document).ready(function(){
        alert("Hello World!");
    });
</script>


</body>
</html>