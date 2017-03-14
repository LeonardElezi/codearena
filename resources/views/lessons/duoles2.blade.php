@extends('layouts.duo')
@section('app')
    <div id="app" class="player lesson known leave-warning name">
        <div class="player-inner">
            <section class="player-container slide-in">
                <div id="context-view"></div>
                <header class="player-header dynamic ">
                    <ul class="player-header-left" style="">
                        <li id="explanation">
                            <div class="tips-and-notes">Tips &amp; notes</div>
                            <div class="popover below popover-tips-and-notes">
                                <div class="arrow-top-small-container">
                                    <div class="arrow"></div>
                                </div>
                                <div class="close"></div>
                                <div class="inner">
                                    <div class="content"><h3>Welkom!</h3>
                                        <p>Welcome to the Dutch course! Dutch is a Germanic language, with grammar and
                                            vocabulary similar to other European languages. You might recognize some
                                            words from English as well! Even so, Dutch is a language with grammatical
                                            genders. These genders have influence on endings on words, for example. </p>
                                        <hr>
                                        <h3>Gender and articles</h3>
                                        <p>In Dutch, there are three (grammatical) <strong>genders</strong>: masculine,
                                            feminine, and neuter. Each gender has their own definite
                                            <strong>article</strong> (‘the’): both singular masculine and feminine nouns
                                            use <em>de</em> and singular neuter nouns use <em>het</em>. For plural
                                            nouns, <em>de</em> is always used. The definite articles <em>de</em> and
                                            <em>het</em> don't have very clear rules for when you're supposed to use
                                            which; this will mostly be learning by heart and developing a feeling for
                                            it. However, there are some guidelines to help you along:</p>
                                        <p><strong><em>De words</em></strong>:</p>
                                        <ol>
                                            <li><em>De</em> is always used for plural nouns</li>
                                            <li><em>De</em> is always used for professions: <em>de kok</em> (‘the
                                                chef’), <em>de leraar</em> (‘the teacher’)
                                            </li>
                                            <li><em>De</em> tends to be used for people with an identified gender, such
                                                as: <em>de vader</em> (‘the father’), <em>de dochter</em> (‘the
                                                daughter’)
                                            </li>
                                            <li><em>De</em> is used for vegetables, fruits, trees and plants, names of
                                                mountains, and rivers
                                            </li>
                                            <li>Furthermore, <em>de</em> is used for most words ending on <strong>-ie,
                                                    -ij, -heid, -teit, -schap, -tie, -sie, -aar, -eur, -er</strong>, and
                                                <strong>-or</strong>.
                                            </li>
                                            <li>Finally, <em>de</em> is used for written-out numbers and letters: <em>de
                                                    drie</em> (‘the three’), <em>de a</em> (‘the a’).
                                            </li>
                                        </ol>
                                        <p><strong><em>Het words</em></strong>:</p>
                                        <ol>
                                            <li><em>Het</em> is always used for diminutives. Diminutives can be
                                                recognised by their suffix; they end in <strong>-je, -tje, -etje,
                                                    -pje</strong>, or <strong>-mpje</strong>.
                                            </li>
                                            <li><em>Het</em> is always used for words consisting of two syllables and
                                                starting with <strong>be-, ge-, ver-</strong>, and <strong>ont-</strong>
                                            </li>
                                            <li><em>Het</em> is always used for verbs used as nouns. When the infinitive
                                                form of a verb is used as a noun (e.g. 'the walking of the dog'), Dutch
                                                uses <em>het</em> (<em>het lopen van de hond</em>).
                                            </li>
                                            <li><em>Het</em> is always used for languages and names of metals</li>
                                            <li><em>Het</em> is also used for names of compass points: <em>het
                                                    noorden</em> (‘the North’)
                                            </li>
                                            <li><em>Het</em> is used for names of sports and games: <em>het schaken</em>
                                                (‘chess’), <em>het voetbal</em> (‘football/soccer’)
                                            </li>
                                            <li>Furthermore, <em>het</em> is used for words ending on
                                                <strong>-isme</strong> and <strong>-ment</strong></li>
                                        </ol>
                                        <p>Dutch speakers actually never tend to think about the gender of words. Rather
                                            than knowing whether a word is originally feminine or masculine, the only
                                            distinction that has to be remembered is the difference between the <em>de
                                                words</em> and <em>het words</em>. This is because it has grammatical
                                            consequences (in terms of possessives, question words, demonstratives,
                                            adjectives, and even relative pronouns). This is why when you learn a new
                                            noun, it is very important to memorize whether it is a <em>de</em> or <em>het
                                                word</em>. </p>
                                        <hr>
                                        <h3>Pronouns</h3>
                                        <p>The Dutch pronouns are as follows:</p>
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>English</th>
                                                <th>Dutch</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>I</td>
                                                <td>Ik</td>
                                            </tr>
                                            <tr>
                                                <td>You (singular)</td>
                                                <td>Jij (Je*)</td>
                                            </tr>
                                            <tr>
                                                <td>He/She/It</td>
                                                <td>Hij/Zij (Ze*)/Het</td>
                                            </tr>
                                            <tr>
                                                <td>You (formal)</td>
                                                <td>U</td>
                                            </tr>
                                            <tr>
                                                <td>We</td>
                                                <td>Wij (We*)</td>
                                            </tr>
                                            <tr>
                                                <td>You (plural)</td>
                                                <td>Jullie</td>
                                            </tr>
                                            <tr>
                                                <td>They</td>
                                                <td>Zij (Ze*)</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <ul>
                                            <li>*<em>Je, ze</em> and <em>we</em> are un-emphasized forms of <em>jij,
                                                    zij</em> and <em>wij</em>. The difference will be taught in another
                                                skill.
                                            </li>
                                        </ul>
                                        <hr>
                                        <h3>Verb conjugation</h3>
                                        <p>In Dutch, verbs can be recognised by the ending <strong>-en</strong>. For
                                            example, <em>eten</em> (‘to eat’) and <em>drinken</em> (‘to drink’). Verb
                                            conjugation in Dutch can get rather difficult, since there are lots of
                                            exceptions (welcome to Dutch, where exceptions are the rule!). The most
                                            basic rule is: find the stem and add the right ending to it. To find the
                                            stem of the word, you take the infinitive of the word – the basic form that
                                            you can find in the dictionary – and take off the ending, i.e.
                                            <strong>-en</strong>. So in the example of 'drinken', (<em>to drink</em>),
                                            the stem would be <em>drink-</em>. For the simple present, the conjugation
                                            is as follows:</p>
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Pronoun</th>
                                                <th>Conjugation</th>
                                                <th>Example</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Ik</td>
                                                <td>[stem]</td>
                                                <td>Ik drink (<em>I drink</em>)</td>
                                            </tr>
                                            <tr>
                                                <td>Jij</td>
                                                <td>[stem]+t</td>
                                                <td>Jij drinkt (<em>You drink</em>)</td>
                                            </tr>
                                            <tr>
                                                <td>Hij/Zij/Het</td>
                                                <td>[stem]+t</td>
                                                <td>Hij drinkt (<em>He drinks</em>)</td>
                                            </tr>
                                            <tr>
                                                <td>U</td>
                                                <td>[stem]+t</td>
                                                <td>U drinkt (<em>You drink</em>)</td>
                                            </tr>
                                            <tr>
                                                <td>Wij</td>
                                                <td>Infinitive</td>
                                                <td>Wij drinken (<em>We drink</em>)</td>
                                            </tr>
                                            <tr>
                                                <td>Jullie</td>
                                                <td>Infinitive</td>
                                                <td>Jullie drinken (<em>You drink</em>)</td>
                                            </tr>
                                            <tr>
                                                <td>Zij</td>
                                                <td>Infinitive</td>
                                                <td>Zij drinken (<em>They drink</em>)</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <h3>Alphabet and pronunciation</h3>
                                        <p>The Dutch alphabet has 26 letters – just like in English. In fact, you don’t
                                            have to learn any new letters! Hurrah! <br>
                                            However, there are a lot of differences and peculiarities in pronunciation.
                                            Some letters are pronounced differently, and there can be combinations of
                                            letters that may throw you for a loop. Don’t worry, we are not discussing
                                            the letters just now.</p></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="player-header-right">
                        <li><a class="player-quit" style="cursor:pointer;" id="quit-button">Quit</a></li>
                    </ul>
                    <div class="progress-bar-container">
                        <div id="progress-bar"><span class="progress-bar-container-inner"><span
                                        class="progress-bar-dynamic left strength-bar"><div class="bar blue"
                                                                                            style="opacity: 1; width: 85.7143%;"><div
                                                class="bubbles" style="display: block;"></div><div class="triangle-end"
                                                                                                   style="display: block;"></div></div><div
                                            class="skill-icon-container"><div class="challenge-number-container"><span
                                                    class="challenge-num">7</span><span
                                                    class="challenge-num-circle white"></span><span
                                                    class="challenge-num-backing"></span></div><span
                                                class="skill-icon smaller locked white"
                                                style="position: absolute;"><span
                                                    class="skill-icon-image skill-icon-1"></span></span><span
                                                class="skill-icon smaller blue unlocked finished-skill bounce-in hidden"><span
                                                    class="skill-icon-image skill-icon-1"></span></span></div><span
                                            class="backing"></span></span></span></div>
                    </div>
                </header>
                <div class="player-main">
                    <div id="prev-session-element-container" class=""></div>
                    <div id="session-element-container" class="">
                        <div class="challenge-name"><h1 class="player">Translate “the man”</h1>
                            <div class="challenge-row">
                                <div class="challenge-cell cell-left">
                                    <ul class="list-tilted-images">
                                        <li style="background-image: url(&#39;https://d2pur3iezf4d1j.cloudfront.net/images/8957c06d1fd5c12d5d4cb98e4afaaca2&#39;)"></li>
                                        <li style="background-image: url(&#39;https://d2pur3iezf4d1j.cloudfront.net/images/2f39abd4ddccc0d9169359c2e3744b5c&#39;)"></li>
                                        <li style="background-image: url(&#39;https://d2pur3iezf4d1j.cloudfront.net/images/32c991df35105adf743ee7809a7dffcc&#39;)"></li>
                                    </ul>
                                </div>
                                <div class="challenge-cell cell-right">
                                    <div class="choose-article-container">
                                        <ul class="choose-article hover-effect"></ul>
                                    </div>
                                    <div id="blame-1" class="popover above blame-popover animated slide-in">
                                        <div class="inner">
                                            <div class="icon-warning"></div>
                                        </div>
                                    </div>
                                    <input class="one-line-input input-lg input-block" id="word-input"
                                           placeholder="Type in Dutch" name="word-input" size="30" type="text" value=""
                                           dir="auto">
                                    <div id="vkeyboard-placeholder">
                                        <div id="vkeyboard_content">
                                            <div id="vkeyboard_keys_1" class="row">
                                                <div class="vkeyboard_shift vkeyboard_key">↓</div>
                                                <div class="column vkeyboard_key" key="0">á</div>
                                                <div class="column vkeyboard_key" key="1">é</div>
                                                <div class="column vkeyboard_key" key="2">è</div>
                                                <div class="column vkeyboard_key" key="3">ë</div>
                                                <div class="column vkeyboard_key" key="4">ï</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro"></div>
                </div>
                <footer id="controls" class="player-footer " style="display: block;">
                    <div class="col-right "><span class="more-padding-left"><button id="next_button" type="submit"
                                                                                    data-toggle="tooltip" title=""
                                                                                    class="btn btn-green btn-lg has-tooltip redesign-check"
                                                                                    data-margin="5" tabindex="20"
                                                                                    data-delay="{&quot;show&quot;:&quot;100&quot;, &quot;hide&quot;: &quot;0&quot;}"
                                                                                    data-original-title="Press Enter to Check">Check</button></span>
                    </div>
                    <div class="col-left">
                        <button id="skip_button" style="border-color: rgb(204, 204, 204); display: block;"
                                class=" btn btn-outline btn-standard btn-lg left skip-margin skip-button" tabindex="30">
                            Skip
                        </button>
                        <button id="no-mic-link" style="display: none;" type="submit"
                                class="btn btn-lg btn-white left skip-margin" tabindex="10">I don't want to use a
                            microphone
                        </button>
                        <div id="grade"></div>
                    </div>
                </footer>
                <div id="no-sound-modal" class="modal hidden fade" style="margin-top: -200px;">
                    <div class="modal-header"><h4>We can't play sound in your browser.</h4>
                        <div class="close" data-dismiss="modal">close</div>
                    </div>
                    <div class="modal-body"></div>
                </div>
                <div id="modal-notification" class="modal hidden fade"></div>
            </section>
        </div>
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
    </div>
@endsection
@section('scripts')
    <script type="application/javascript">
    </script>
@stop