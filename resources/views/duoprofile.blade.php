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
<div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div>
            <iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no"
                    id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame"
                    tabindex="-1" style="border: medium none;" src="Duolingo_profile_files/Sh-3BhStODe.html"
                    frameborder="0"></iframe>
        </div>
    </div>
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div></div>
    </div>
</div>
<div id="topbar">
    <header class="topbar   topbar-blue">
        <div class="container"><a href="https://www.duolingo.com/"
                                  class="topbar-brand navigate-home track-click white "></a>
            <div id="global-loading-indicator" class="loading-indicator  " style="display: none;">
                <div class="loader"></div>
            </div>
            <nav class="topbar-nav">
                <ul class="topbar-nav-main">
                    <li id="home-nav"><a href="https://www.duolingo.com/">Home</a></li>
                    <li id="stream-nav"><a hlref="https://www.duolingo.com/activity_stream">Activity</a></li>
                    <li id="questions-nav"><a href="https://www.duolingo.com/discussion">Discussion</a></li>
                </ul>
            </nav>
            <div class="topbar-right" style="">
                <div class="hamburger"></div>
                <div class="dropdown topbar-language">
                    <div data-toggle="dropdown" class=""><span class="flag flag-svg-small flag-dn"></span></div>
                    <ul class="dropdown-menu arrow-top languages" role="menu" aria-labelledby="dLabel"
                        style="display: none;">
                        <li class="head"><h6>Learning</h6></li>
                        <li class="language-choice active" data-value="dn"><a href="javascript:;"><span
                                        class="flag flag-svg-micro flag-dn"></span><span data-value="dn">Dutch</span>
                                <span class="gray">level 10</span></a></li>
                        <li class="language-choice " data-value="de"><a href="javascript:;"><span
                                        class="flag flag-svg-micro flag-de"></span><span data-value="de">German</span>
                                <span class="gray">level 1</span></a></li>
                        <li class="divider"></li>
                        <li data-value="more"><a href="https://www.duolingo.com/courses">Add a new course</a></li>
                    </ul>
                </div>
                <div class="dropdown topbar-username">
                    <div data-toggle="dropdown" class=""><a href="https://www.duolingo.com/leonardelezi"
                                                            class="avatar avatar-small " title="kot"><img
                                    src="Duolingo_profile_files/large.jpeg"><span class="ring"></span></a> <span
                                class="name">leonardelezi</span><span class="icon icon-arrow-down-white"></span></div>
                    <ul class="dropdown-menu arrow-top" role="menu" aria-labelledby="dLabel" style="display: none;">
                        <li><a href="https://www.duolingo.com/leonardelezi">Your Profile</a></li>
                        <li><a href="https://www.duolingo.com/settings/account" class="track-click"
                               id="header_userdrop_settings">Settings</a></li>
                        <li><a href="https://www.duolingo.com/help">Help</a></li>
                        <li><a id="show-shortcuts">Keyboard shortcuts</a></li>
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
    <div id="mobile-menu" class="mobile-menu logged-in">
        <ul class="mobile-menu-listing">
            <div class="mobile-menu-stats"><span class="user-info"><a href="https://www.duolingo.com/leonardelezi"
                                                                      class="avatar avatar-micro"
                                                                      title="leonardelezi"><img
                                src="Duolingo_profile_files/medium.jpeg"><span class="ring"></span></a> <span
                            class="name">leonardelezi</span></span>
                <li class="streak" data-toggle="tooltip" title="0 day streak" data-placement="bottom"><span
                            class="icon icon-streak-small "></span> 0
                </li>
                <li class="lingots" data-toggle="tooltip" title="Lingots" data-placement="bottom"><a
                            href="https://www.duolingo.com/show_store"><span class="icon icon-lingot-small"></span><span
                                id="num_lingots"> 91</span></a></li>
            </div>
            <li id="home-nav"><a href="https://www.duolingo.com/">Home</a></li>
            <li id="questions-nav"><a href="https://www.duolingo.com/discussion">Discussion</a></li>
            <li id="courses-nav"><a href="https://www.duolingo.com/courses">Courses</a></li>
            <li id="settings-nav"><a href="https://www.duolingo.com/settings">Settings</a></li>
            <li id="see-full-site"><a href="javascript:;">View full site</a></li>
            <li><a href="https://www.duolingo.com/logout">Log out</a></li>
        </ul>
    </div>
    <div id="keyboard-shortcuts" class="modal keyboard-shortcuts fade"></div>
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
                    <h3 class="gray">Languages</h3>
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
                        <li>
                            <div class="profile-language">
                                <div class="course-card de course-profile-badge">
                                    <div class="course-card-header course-page-illustration-de gradient">
                                        <div class="small-course-illustration layer-1"></div>
                                        <div class="small-course-illustration layer-2"></div>
                                        <div class="small-course-illustration layer-3"></div>
                                    </div>
                                </div>
                                <div class="language-info">
                                    <div class="language-name">German - Level 1</div>
                                    <div class="substat">Next level: 60 XP</div>
                                    <div class="substat">Total XP: 0 XP</div>
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
                                        href="javascript:;">Following: 4</a></li>
                            <li id="switch-followers" class="switch-friends" data-tab="followers"><a
                                        href="javascript:;">Followers: 4</a></li>
                        </ul>
                        <ul id="followers" class="avatar-grid hidden">
                            <li><a href="https://www.duolingo.com/AliParsai" class="avatar avatar-medium "><img
                                            src="Duolingo_profile_files/xlarge.jpeg"><span class="ring"></span></a></li>
                            <li><a href="https://www.duolingo.com/olsicelaj2" class="avatar avatar-medium "><img
                                            src="Duolingo_profile_files/xlarge_002.jpeg"><span class="ring"></span></a>
                            </li>
                            <li><a href="https://www.duolingo.com/mintpanda25" class="avatar avatar-medium "><img
                                            src="Duolingo_profile_files/xlarge.jpeg"><span class="ring"></span></a></li>
                            <li><a href="https://www.duolingo.com/Lauren272422" class="avatar avatar-medium "><img
                                            src="Duolingo_profile_files/xlarge.jpeg"><span class="ring"></span></a></li>
                        </ul>
                        <ul id="following" class="avatar-grid ">
                            <li><a href="https://www.duolingo.com/AliParsai" class="avatar avatar-medium "><img
                                            src="Duolingo_profile_files/xlarge.jpeg"><span class="ring"></span></a></li>
                            <li><a href="https://www.duolingo.com/mintpanda25" class="avatar avatar-medium "><img
                                            src="Duolingo_profile_files/xlarge.jpeg"><span class="ring"></span></a></li>
                            <li><a href="https://www.duolingo.com/olsicelaj2" class="avatar avatar-medium "><img
                                            src="Duolingo_profile_files/xlarge_002.jpeg"><span class="ring"></span></a>
                            </li>
                            <li><a href="https://www.duolingo.com/Lauren272422" class="avatar avatar-medium "><img
                                            src="Duolingo_profile_files/xlarge.jpeg"><span class="ring"></span></a></li>
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
            <header class="profile-header"><a href="https://www.duolingo.com/leonardelezi" class="avatar avatar-xlarge"
                                              title="leonardelezi"><img src="Duolingo_profile_files/xlarge.jpeg"><span
                            class="ring"></span></a>
                <h1 class="profile-header-username">{{ $user->email }}</h1>
                <h2 class="profile-header-subline "><span class="real-name">{{ $user->first_name  }} {{ $user->last_name }}</span>
                    <ul class="user-social-links"></ul>
                </h2>
            </header>
            <div id="stream-container" class="stream-container">
                <ul class="activity-stream">
                    <li class="stream-item"><a href="https://www.duolingo.com/leonardelezi"
                                               class="avatar avatar-medium "><img
                                    src="Duolingo_profile_files/xlarge.jpeg"><span class="ring"></span></a> <span
                                class="stream-item-type default"></span>
                        <header class="stream-item-header"><span class="left"><a
                                        href="https://www.duolingo.com/leonardelezi"
                                        class="username">leonardelezi</a></span><span class="stream-item-time">


1 month ago

</span></header>
                        <p class="stream-item-content">started following <a
                                    href="https://www.duolingo.com/Lauren272422">Lauren272422</a></p>
                        <div class="stream-comments hidden">
                            <ul class="stream-item-comment-list">
                                <li>
                                    <div class="stream-item-comment-new">
                                        <div class="col-input"><textarea id="comment-box-8166340494"
                                                                         class="post textarea-white textarea-block textarea-autogrow"
                                                                         placeholder="New comment"
                                                                         style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 60px;"
                                                                         dir="auto"></textarea></div>
                                        <div class="col-btn">
                                            <button class="btn btn-green post-event-comment">Post</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="stream-item-social-links">
                            <li class="upvotes"><a href="javascript:;" class="vote ">Like </a></li>
                            <li class="show-comments"><a href="javascript:;">Comment</a></li>
                        </ul>
                    </li>
                </ul>
                <a id="more-stream" class="btn" href="javascript:;">load more</a></div>
        </section>
    </main>
</div>

</body>
</html>