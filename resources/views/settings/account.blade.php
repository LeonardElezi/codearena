@extends('layouts.duo')
@section('app')
<div id="app" class="settings">
    <main class="main-right">
        <section class="page-sidebar sidebar-left">
            <div class="inner">
                <div class="box-colored bg-white"><h2 class="view-profile-headline"><a
                                href="{{ url('/profile/'.$user->id) }}" class="avatar avatar-small"
                                title="leonardelezi"><img src="{{ GlideImage::load($user->picture, ['w'=>48, 'h'=>48]) }}" id="sideBarPicture"><span
                                    class="ring"></span></a> {{ $user->email }} <a
                                href="{{ url('/profile/'.$user->id) }}" class="username">View your profile</a></h2>
                    <ul id="settings_tab" class="nav-sidebar">
                        <li class="active"><a href="{{ url('/settings/account') }}">Account</a></li>
                        <li><a href="{{ url('/settings/coach') }}" id="coach_tab">Coach<span
                                        class="icon-arrow-right icon"></span></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="page-main main-right">
            <div id="tab-container">
                <div id="account-content" class="settings-content">
                    <button id="submit_button" type="submit" class="btn btn-green right">Save changes
                    </button>
                    <div id="confirmation-message" class="hidden save-message">Saved!</div>
                    <div id="error-message" class="hidden error-message">Error</div>
                    <h1>Account</h1>
                    <h3 class="gray">Account</h3>
                    <hr class="margin-top">
                    <ul class="list-settings">
                        <li><label class="label">Email</label>
                            <div class="input"><input style="width: 334px;" class="large" id="email" name="email"
                                                      size="30" type="text" value="{{ $user->email }}"></div>
                        </li>
                        <li><label class="label">Sound effects</label>
                            <div class="input">
                                <ul class="radio-buttons">
                                    @if($settings->sound_effect_on==1)
                                        <li><label><input class="border" id="sound_effects_on" name="sound_effects"
                                                          type="radio" value="true" checked=""> on</label></li>
                                        <li><label><input class="border" id="sound_effects_off" name="sound_effects"
                                                          type="radio" value="false"> off</label></li>
                                    @else
                                        <li><label><input class="border" id="sound_effects_on" name="sound_effects"
                                                          type="radio" value="true"> on</label></li>
                                        <li><label><input class="border" id="sound_effects_off" name="sound_effects"
                                                          type="radio" value="false" checked=""> off</label></li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li><label class="label">Profile picture</label>
                            <div class="input">
                                <div class="avatar-large left" style="margin-right: 15px;"><a
                                            href="https://www.duolingo.com/leonardelezi" class="avatar avatar-large"><img
                                                src="{{ GlideImage::load($user->picture, ['w'=>48, 'h'=>48]) }}" id="profilePicToChange"><span
                                                class="ring"></span></a></div>
                                <form id="avatar-upload" action="" method="post"
                                      enctype="multipart/form-data"><input id="avatar" type="file" name="avatar" class=""><br>maximum
                                    image size is 1 MB
                                </form>
                            </div>
                        </li>
                    </ul>
                    <h3 class="gray">Notifications</h3>
                    <hr class="margin-top">
                    <ul class="list-settings">
                        <li><label class="label" for="notify_pass">Email me when</label>
                            <div class="input">
                                <ul class="inputs-inline left">
                                    @if($settings->email_when_passed==1)
                                        <li><label><input class="border" id="notify_pass" name="notify_pass"
                                                          checked="checked" type="checkbox"></label></li>
                                    @else
                                        <li><label><input class="border" id="notify_pass" name="notify_pass"
                                                          type="checkbox"></label></li>
                                    @endif
                                </ul>
                                <p class="gray gray-text">Somebody passes me</p>
                            </div>
                        </li>
                    </ul>
                    <h3 class="gray">Daily reminders</h3>
                    <hr class="margin-top">
                    <ul class="list-settings">
                        <li><label class="label" for="notify_follow">Email me when</label>
                            <div class="input">
                                <ul class="inputs-inline left">
                                    @if($settings->email_when_forget==1)
                                        <li><label><input class="border" id="notify_practice" name="notify_practice"
                                                          checked="checked" type="checkbox"></label></li>
                                    @else
                                        <li><label><input class="border" id="notify_practice" name="notify_practice" type="checkbox"></label></li>
                                    @endif
                                </ul>
                                <p class="gray gray-text">I forget to practice refactoring by <select class="small"
                                                                                                name="notify_time" id="notify_time">
                                        @foreach($hours as $h)
                                            @if($settings->hour()->get()[0]->id == $h->id)
                                                <option value="{{ $h->id }}" selected="selected">{{ $h->hour }}</option>
                                            @else
                                                <option value="{{ $h->id }}">{{ $h->hour }}</option>
                                            @endif
                                        @endforeach
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
@endsection
@section('scripts')
<script type="application/javascript">
    $(document).ready(function(){

        var emailWhenPassed = '{{ $settings->email_when_passed }}';
        var soundEffectOn = '{{ $settings->sound_effect_on }}';
        var emailWhenForgot = '{{ $settings->email_when_forget }}';

        $('#sound_effects_on').on('click', function (e) {
            soundEffectOn = 1;
        });
        $('#sound_effects_off').on('click', function (e) {
            soundEffectOn = 0;
        });

        $('#notify_pass').on('click', function (e) {
            if ($('#notify_pass').is(":checked")) {
                emailWhenPassed = 1;
            } else {
                emailWhenPassed = 0;
            }
        });

        $('#notify_practice').on('click', function (e) {
            if ($('#notify_practice').is(":checked")) {
                emailWhenForgot = 1;
            } else {
                emailWhenForgot = 0;
            }
        });

        $("#submit_button").click(function (e) {

            var tok = $('meta[name="_token"]').attr('content');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            e.preventDefault();

            var notifyTime = $( "#notify_time option:selected" ).val();
            var file_data = $('#avatar').prop('files')[0];
            var form_data = new FormData();
            form_data.append('avatar', file_data);
            form_data.append('email', $('#email').val());
            form_data.append('sound_effect_on', soundEffectOn);
            form_data.append('email_when_passed', emailWhenPassed);
            form_data.append('email_when_forget', emailWhenForgot);
            form_data.append('notify_time', notifyTime);

            $.ajax({
                async: true,
                type: 'POST',
                contentType: false,
                url:'{{ url('/settings/uavatar') }}',
                data: form_data,
                processData: false,
                enctype:"multipart/form-data",
                success: function (data) {
                    $('#confirmation-message').removeClass('hidden');
                    setTimeout(function(){
                        hideResultMessage($('#confirmation-message'));
                    }, 2000);
                    $('#profilePicToChange').attr("src", data.msg);
                    $('#topBarPicture').attr("src", data.msg);
                    $('#sideBarPicture').attr("src", data.msg);
                },
                error: function (data) {
                    $('#error-message').removeClass('hidden');
                    setTimeout(function(){
                        hideResultMessage($('#error-message'));
                    }, 2000);
                }
            });
            
            function hideResultMessage(elementToHide) {
                elementToHide.addClass('hidden');
            }
        });
    });
</script>
@stop
