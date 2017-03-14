@extends('layouts.duo')
@section('app')
    <div id="app" class="home">
        <main class="main-right">
            <div id="persistent-notifications" class=""></div>
            <section class="page-main main-right">
                <div class="tree"><span class="skill-tree-header"><h1>Refactoring techniques</h1><span
                                class="level-text">LEVEL {{ $user->level }}</span></span>
                    <ul class="skill-tree">

                        @foreach($techniques as $technique)
                            <li class="skill-tree-row row-{{ $technique->id }}">
                                <span id="skill-2-1" class="skill-0">

                                    @if($technique->pivot->status=='locked')
                                        <a href="{{ url('/techniques/'.$technique->id) }}"
                                           class="skill-badge-small {{ $technique->pivot->status }}" style="opacity: 1;">
                                    @else
                                                <a href="{{ url('/techniques/'.$technique->id) }}"
                                                   class="skill-badge-small skill-item" style="opacity: 1;">
                                    @endif
                                        <span class="{{ $technique->pivot->span1_classes }} {{ $technique->pivot->status }}">
                                            <span class="skill-icon-image skill-icon-1"></span>
                                            <span class="skill-icon-strength skill-icon-strength-small  strength-{{ $technique->pivot->technique_strength }}"></span>
                                        </span>
                                        <span class="skill-badge-name">{{ $technique->description }}
                                            <span class="lessons-left"></span>
                                        </span>
                                    </a>
                                </span>
                            </li>
                        @endforeach

                        <li class="skill-tree-row row-2"><span id="skill-1-2" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Basics-2"
                                        class="skill-badge-small skill-item"
                                        style="opacity: 1;"><span class="skill-icon red small unlocked "><span
                                                class="skill-icon-image skill-icon-2"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Basics 2 <span class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-3-2" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Common-Phrases"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Common Phrases"
                                        style="opacity: 1;"><span class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-48"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Phrases <span class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-3"><span id="skill-1-3" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Food"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Eten"
                                        style="opacity: 1;"><span class="skill-icon red small unlocked "><span
                                                class="skill-icon-image skill-icon-3"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Food <span class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-3-3" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Animals"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Dieren"
                                        style="opacity: 1;"><span class="skill-icon blue small unlocked "><span
                                                class="skill-icon-image skill-icon-6"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Animals <span class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-4"><span id="skill-2-4" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Plurals"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Meervoud"
                                        style="opacity: 1;"><span class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-44"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Plurals <span class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-5"><span id="skill-1-5" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Possessives"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Possessives"
                                        style="opacity: 1;"><span class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-41"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Poss. <span class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-2-5" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Adjective-Basics"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Adjective Basics"
                                        style="opacity: 1;"><span class="skill-icon red small unlocked "><span
                                                class="skill-icon-image skill-icon-43"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Adj. Basic <span
                                                class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-3-5" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Clothing"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Clothing"
                                        style="opacity: 1;"><span class="skill-icon red small unlocked "><span
                                                class="skill-icon-image skill-icon-26"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Clothing <span class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-shortcut">
                            <div class="skill-span columns track-hover">
                                <div class="btn btn-standard btn-lg disabled opacity-0 fade-this-in"
                                     style="opacity: 1;"><span class="icon icon-check-white-small better-margin"></span>
                                    Checkpoint passed
                                </div>
                            </div>
                        </li>
                        <li class="skill-tree-row row-6"><span id="skill-2-6" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Formal"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Formal"
                                        style="opacity: 1;"><span class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-34"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Formal <span class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-3-6" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Verbs%3A-Present"
                                        class="fade-this-in skill-badge-small skill-item" data-skill="Verbs: Present"
                                        style="opacity: 1;"><span class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-5"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Present <span class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-7"><span id="skill-1-7" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Indefinite-Pronouns"
                                        class="fade-this-in skill-badge-small skill-item"
                                        data-skill="Indefinite Pronouns" style="opacity: 1;"><span
                                            class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-35"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Indef. pr. <span
                                                class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-3-7" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Pronouns-objective"
                                        class="fade-this-in skill-badge-small skill-item"
                                        data-skill="Objective pronouns" style="opacity: 1;"><span
                                            class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-35"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-4"></span></span><span
                                            class="skill-badge-name">Obj. pron. <span
                                                class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-8"><span id="skill-1-8" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Colors"
                                        class="skill-badge-small skill-item" data-skill="Colors"
                                        style="opacity: 1;"><span class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-4"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-3"></span></span><span
                                            class="skill-badge-name">Colors <span class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-2-8" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Prepositions"
                                        class="skill-badge-small skill-item" data-skill="Prepositions"
                                        style="opacity: 1;"><span class="skill-icon blue small unlocked "><span
                                                class="skill-icon-image skill-icon-14"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-3"></span></span><span
                                            class="skill-badge-name">Prep. <span class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-9"><span id="skill-2-9" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Questions"
                                        class="skill-badge-small skill-item" data-skill="Questions" style="opacity: 1;"><span
                                            class="skill-icon blue small unlocked "><span
                                                class="skill-icon-image skill-icon-24"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-3"></span></span><span
                                            class="skill-badge-name">Questions <span class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-10"><span id="skill-1-10" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Numbers"
                                        class="skill-badge-small skill-item" data-skill="Numbers"
                                        style="opacity: 1;"><span class="skill-icon blue small unlocked "><span
                                                class="skill-icon-image skill-icon-22"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-1"></span></span><span
                                            class="skill-badge-name">Numbers <span class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-2-10" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Conjunctions"
                                        class="skill-badge-small skill-item" data-skill="Conjunctions"
                                        style="opacity: 1;"><span class="skill-icon blue small unlocked "><span
                                                class="skill-icon-image skill-icon-20"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-3"></span></span><span
                                            class="skill-badge-name">Conj. <span class="lessons-left"></span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-shortcut">
                            <div class="skill-span columns track-hover">
                                <div class="btn btn-standard btn-lg disabled  fade-this-in" style="opacity: 1;"><span
                                            class="icon icon-check-white-small better-margin"></span> Checkpoint passed
                                </div>
                            </div>
                        </li>
                        <li class="skill-tree-row row-11"><span id="skill-2-11" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Dates-and-Time"
                                        class="skill-badge-small skill-item" data-skill="Dates and time"
                                        style="opacity: 1;"><span class="skill-icon blue small unlocked "><span
                                                class="skill-icon-image skill-icon-27"></span><span
                                                class="skill-icon-strength skill-icon-strength-small  strength-1"></span></span><span
                                            class="skill-badge-name">Dates/Time <span
                                                class="lessons-left"></span></span>
                            </a>
                            </span><span id="skill-3-11" class="skill-0"><a
                                        href="https://www.codearena.co/skill/dn/Places"
                                        class="skill-badge-small skill-item" data-skill="Places"
                                        style="opacity: 1;"><span class="skill-icon green small unlocked "><span
                                                class="skill-icon-image skill-icon-12"></span>
                            <div class="pie"><span id="overlay-progress" data-pie="55.55555555555556+44.44444444444444"><svg
                                            height="80" version="1.1" width="80" xmlns="http://www.w3.org/2000/svg"
                                            style="overflow: hidden; position: relative; left: 0px;"><desc
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path
                                                fill="#abcdef" stroke="#000000"
                                                d="M40,40L40,-0.3999999999999986A40.4,40.4,0,1,1,26.182386209642985,77.9635818797507Z"
                                                stroke-opacity="0" stroke-width="1" stroke-linejoin="round"
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; opacity: 0;"></path><path
                                                fill="#ffffff" stroke="#000000"
                                                d="M40,40L26.182386209642985,77.9635818797507A40.4,40.4,0,0,1,39.99999999999999,-0.3999999999999986Z"
                                                stroke-opacity="0" stroke-width="1" stroke-linejoin="round"
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); stroke-linejoin: round; opacity: 0.3;"></path><path
                                                fill="#000000" stroke="none"
                                                d="M40,40L40,-0.3999999999999986A40.4,40.4,0,1,1,26.182386209642985,77.9635818797507Z"
                                                fill-opacity="0"
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0; opacity: 0.3;"></path><path
                                                fill="#000000" stroke="none"
                                                d="M40,40L26.182386209642985,77.9635818797507A40.4,40.4,0,0,1,39.99999999999999,-0.3999999999999986Z"
                                                fill-opacity="0"
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0; opacity: 0.3;"></path></svg></span></div>
                            </span><span class="skill-badge-name">Places <span class="lessons-left">5/9</span></span>
                            </a>
                            </span>
                        </li>
                        <li class="skill-tree-row row-12"><span id="skill-2-12" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-41"></span></span><span
                                            class="skill-badge-name">Er <span class="lessons-left" style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-13"><span id="skill-2-13" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-46"></span></span><span
                                            class="skill-badge-name">Jobs <span class="lessons-left"
                                                                                style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span><span id="skill-3-13" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-29"></span></span><span
                                            class="skill-badge-name">Family <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/3</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-14"><span id="skill-2-14" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-5"></span></span><span
                                            class="skill-badge-name">Continuous <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/2</span></span>
                            </span>
                            </span><span id="skill-3-14" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-5"></span></span><span
                                            class="skill-badge-name">Present 2 <span class="lessons-left"
                                                                                     style="opacity: 0.5">0/8</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-15"><span id="skill-1-15" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-10"></span></span><span
                                            class="skill-badge-name">Health <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/7</span></span>
                            </span>
                            </span><span id="skill-2-15" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-47"></span></span><span
                                            class="skill-badge-name">Adverbs <span class="lessons-left"
                                                                                   style="opacity: 0.5">0/8</span></span>
                            </span>
                            </span><span id="skill-3-15" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-51"></span></span><span
                                            class="skill-badge-name">Objects <span class="lessons-left"
                                                                                   style="opacity: 0.5">0/10</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-16"><span id="skill-2-16" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-52"></span></span><span
                                            class="skill-badge-name">Te + inf. <span class="lessons-left"
                                                                                     style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-17"><span id="skill-1-17" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-40"></span></span><span
                                            class="skill-badge-name">Demonstr. <span class="lessons-left"
                                                                                     style="opacity: 0.5">0/4</span></span>
                            </span>
                            </span><span id="skill-2-17" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-52"></span></span><span
                                            class="skill-badge-name">Imperative <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/3</span></span>
                            </span>
                            </span><span id="skill-3-17" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-52"></span></span><span
                                            class="skill-badge-name">Modals <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/3</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-shortcut">
                            <div class="skill-span columns track-hover"><a id="big-test-2"
                                                                           href="https://www.codearena.co/bigtest/dn/2"
                                                                           class=" fade-this-in btn btn-lg btn-yellow btn-test-out"
                                                                           style="opacity: 1;">Test out of 13 skills</a>
                            </div>
                        </li>
                        <li class="skill-tree-row row-18"><span id="skill-2-18" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-44"></span></span><span
                                            class="skill-badge-name">Diminutive <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/6</span></span>
                            </span>
                            </span><span id="skill-3-18" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-36"></span></span><span
                                            class="skill-badge-name">Travel <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/8</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-19"><span id="skill-1-19" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-43"></span></span><span
                                            class="skill-badge-name">Adj. 2 <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/8</span></span>
                            </span>
                            </span><span id="skill-2-19" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-35"></span></span><span
                                            class="skill-badge-name">People <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span><span id="skill-3-19" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-45"></span></span><span
                                            class="skill-badge-name">Reflexives <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-20"><span id="skill-2-20" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-53"></span></span><span
                                            class="skill-badge-name">Pres. Per. <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/9</span></span>
                            </span>
                            </span><span id="skill-3-20" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-15"></span></span><span
                                            class="skill-badge-name">Nature <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/7</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-21"><span id="skill-2-21" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-49"></span></span><span
                                            class="skill-badge-name">Passive <span class="lessons-left"
                                                                                   style="opacity: 0.5">0/3</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-22"><span id="skill-1-22" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-23"></span></span><span
                                            class="skill-badge-name">Education <span class="lessons-left"
                                                                                     style="opacity: 0.5">0/7</span></span>
                            </span>
                            </span><span id="skill-2-22" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-5"></span></span><span
                                            class="skill-badge-name">Simp. Past <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/9</span></span>
                            </span>
                            </span><span id="skill-3-22" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-50"></span></span><span
                                            class="skill-badge-name">Weather <span class="lessons-left"
                                                                                   style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-23"><span id="skill-1-23" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-5"></span></span><span
                                            class="skill-badge-name">Pass. Past <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/2</span></span>
                            </span>
                            </span><span id="skill-2-23" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-5"></span></span><span
                                            class="skill-badge-name">Future <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span><span id="skill-3-23" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-37"></span></span><span
                                            class="skill-badge-name">Abs. N. 1 <span class="lessons-left"
                                                                                     style="opacity: 0.5">0/8</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-24"><span id="skill-2-24" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-52"></span></span><span
                                            class="skill-badge-name">Fut. Perf. <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/3</span></span>
                            </span>
                            </span><span id="skill-3-24" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-43"></span></span><span
                                            class="skill-badge-name">Comparison <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/6</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-shortcut">
                            <div class="skill-span columns track-hover"><a id="big-test-3"
                                                                           href="https://www.codearena.co/bigtest/dn/3"
                                                                           class=" fade-this-in btn btn-lg btn-yellow btn-test-out"
                                                                           style="opacity: 1;">Test out of 29 skills</a>
                            </div>
                        </li>
                        <li class="skill-tree-row row-25"><span id="skill-2-25" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-12"></span></span><span
                                            class="skill-badge-name">Map <span class="lessons-left"
                                                                               style="opacity: 0.5">0/8</span></span>
                            </span>
                            </span><span id="skill-3-25" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-5"></span></span><span
                                            class="skill-badge-name">Condit. <span class="lessons-left"
                                                                                   style="opacity: 0.5">0/4</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-26"><span id="skill-1-26" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-35"></span></span><span
                                            class="skill-badge-name">Rel. pron. <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/1</span></span>
                            </span>
                            </span><span id="skill-2-26" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-30"></span></span><span
                                            class="skill-badge-name">Comm. <span class="lessons-left"
                                                                                 style="opacity: 0.5">0/8</span></span>
                            </span>
                            </span><span id="skill-3-26" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-17"></span></span><span
                                            class="skill-badge-name">Arts <span class="lessons-left"
                                                                                style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-27"><span id="skill-2-27" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-9"></span></span><span
                                            class="skill-badge-name">Sports <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/5</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-28"><span id="skill-2-28" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-33"></span></span><span
                                            class="skill-badge-name">Feelings <span class="lessons-left"
                                                                                    style="opacity: 0.5">0/6</span></span>
                            </span>
                            </span><span id="skill-3-28" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-7"></span></span><span
                                            class="skill-badge-name">Science! <span class="lessons-left"
                                                                                    style="opacity: 0.5">0/6</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-29"><span id="skill-1-29" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-31"></span></span><span
                                            class="skill-badge-name">Business <span class="lessons-left"
                                                                                    style="opacity: 0.5">0/8</span></span>
                            </span>
                            </span><span id="skill-2-29" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-11"></span></span><span
                                            class="skill-badge-name">Government <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/10</span></span>
                            </span>
                            </span><span id="skill-3-29" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-5"></span></span><span
                                            class="skill-badge-name">Pluperfect <span class="lessons-left"
                                                                                      style="opacity: 0.5">0/4</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-30"><span id="skill-2-30" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-53"></span></span><span
                                            class="skill-badge-name">Gerund <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/2</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-31"><span id="skill-2-31" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-19"></span></span><span
                                            class="skill-badge-name">Events <span class="lessons-left"
                                                                                  style="opacity: 0.5">0/4</span></span>
                            </span>
                            </span><span id="skill-3-31" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-25"></span></span><span
                                            class="skill-badge-name">Abs. N. 2 <span class="lessons-left"
                                                                                     style="opacity: 0.5">0/7</span></span>
                            </span>
                            </span>
                        </li>
                        <li class="skill-tree-row row-32"><span id="skill-1-32" class="skill-0"><span href=""
                                                                                                      class="skill-badge-small locked"
                                                                                                      style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-12"></span></span><span
                                            class="skill-badge-name">NL 1 <span class="lessons-left"
                                                                                style="opacity: 0.5">0/7</span></span>
                            </span>
                            </span><span id="skill-2-32" class="skill-0"><span href="" class="skill-badge-small locked"
                                                                               style="opacity: 1;"><span
                                            class="skill-icon small locked"><span
                                                class="skill-icon-image skill-icon-3"></span></span><span
                                            class="skill-badge-name">NL 2 <span class="lessons-left"
                                                                                style="opacity: 0.5">0/4</span></span>
                            </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="page-sidebar sidebar-left">
                <div class="inner">
                    <div class="box-colored bg-white vocab-test ">
                        <h2><a href="{{ url('/settings/coach') }}"><span data-toggle="tooltip" title="Change daily goal"
                                                                         class="icon icon-gear-small right"></span></a>Daily
                            Goal</h2>
                        <div class="daily-goal-container ">
                            <div class="teacher-coach"><span class="owl owl-mini owl-standard"></span><span
                                        class="coach-message">Learning refactoring requires practice every day.</span>
                            </div>
                            <div class="daily-donut-container">
                                <span class="icon icon-daily-donut-streak "></span>
                                <div id="daily-donut-text"><span
                                            class="stat-text">0/{{ $user->dailygoal()->get()[0]->experience}}</span> xp
                                    gained
                                </div>
                                <div id="daily-donut">
                                    <svg height="150" version="1.1" width="150" xmlns="http://www.w3.org/2000/svg"
                                         style="overflow: hidden; position: relative;">
                                        <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with
                                            Raphaël 2.1.0
                                        </desc>
                                        <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                        <circle cx="75" cy="75" r="75" fill="#e2e2e2" stroke="#ffffff" stroke-width="1"
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                        <circle cx="75" cy="75" r="75" fill="#000000" stroke="none" fill-opacity="0"
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></circle>
                                        <circle cx="75" cy="75" r="65" fill="#ffffff" stroke="#ffffff"
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="daily-goal-stats">
                                <div class="stat-container"><span class="stat-text">{{ $user->day_streak }}</span>day
                                    streak
                                </div>
                                <div class="stat-container"><span class="stat-text">{{ $timeToMidnight }}</span>hours
                                    left
                                </div>
                            </div>
                            <div id="assignments-container" class="assignments-placeholder-v2"></div>
                        </div>
                        <div class="strengthen-skills-container "><a href="https://www.codearena.co/practice"
                                                                     class="btn btn-primary btn-block btn-strengthen-skills"><span
                                        class="strength"><span
                                            class="icon icon-practice-small-white"></span></span><span
                                        class="skill-icon-strength skill-icon-strength-micro  strength-3"></span>Strengthen
                                skills</a></div>
                    </div>
                    <div class="box-gray">
                        <div id="ranking" class="stream-leaderboard">
                            <h2>Leaderboard</h2>
                            <div id="search-friends" class="board hidden">
                                <ul id="search-list-results">
                                    <div class="search-users global-search">
                                        <div class="row-inputandbutton">
                                            <div class="col-input"><span class="icon icon-search-gray"></span><input
                                                        id="search-learners" type="text"
                                                        class="search search-input input-block"
                                                        placeholder="Name or email"></div>
                                            <div class="col-btn">
                                                <button class="search-for-friends btn btn-small btn-blue right">Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="list-results" class="list-leaderboard">
                                        <ul id="search-learners-results"
                                            class="list-users-small global-search-list leaderboard-search-list">
                                            <li id="no-users"
                                                style="padding-left: 10px;text-align: center;color: #999;">No users
                                                found.
                                            </li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                            <div id="fb-friends" class="hidden board">
                                <div class="search-users">
                                    <div class="form-row no-margin"><input id="filter-fb-input" type="text"
                                                                           class="search input-block"
                                                                           placeholder="Search friends"></div>
                                </div>
                                <ul class="list-users list-leaderboard fake"></ul>
                            </div>
                            <div id="points-ranking" class="board" style="position: relative;">
                                <ul class="nav-tabs nav-leaderboard">
                                    <li class="toggle week active" data-sort="week"><a href="javascript:;">This week</a>
                                    </li>
                                    <li class="toggle month" data-sort="month"><a href="javascript:;">This month</a>
                                    </li>
                                    <li class="toggle alltime" data-sort="alltime"><a href="javascript:;">All time</a>
                                    </li>
                                </ul>
                                <ul id="ranked-users" class="list-users list-leaderboard">
                                    <li class="list-leaderboard-item you">
                                        <a href="https://www.codearena.co/leonardelezi" class="avatar avatar-small "
                                           title="leonardelezi"><img class="lazy"
                                                                     src="{{ asset("assets/Duolingo_Home_files/large") }}"
                                                                     data-original="//s3.amazonaws.com/duolingo-images/avatar/default_2/large"
                                                                     width="50" height="50"
                                                                     style="display: inline;"><span class="ring"></span></a>
                                        <span class="points" data-user="60969078">0 XP </span><span class="name">leonardelezi</span>
                                    </li>
                                    <li class="list-leaderboard-item ">
                                        <a href="https://www.codearena.co/AliParsai" class="avatar avatar-small "
                                           title="AliParsai"><img class="lazy"
                                                                  src="{{ asset("assets/Duolingo_Home_files/large") }}"
                                                                  data-original="//s3.amazonaws.com/duolingo-images/avatar/default_2/large"
                                                                  width="50" height="50" style="display: inline;"><span
                                                    class="ring"></span></a> <span class="points" data-user="78629009">0 XP </span><span
                                                class="name"><a href="https://www.codearena.co/AliParsai"
                                                                class="username">AliParsai</a></span></li>
                                    <li class="list-leaderboard-item ">
                                        <a href="https://www.codearena.co/olsicelaj2" class="avatar avatar-small "
                                           title="olsicelaj2"><img class="lazy"
                                                                   src="{{ asset("assets/Duolingo_Home_files/large(1)") }}"
                                                                   data-original="//duolingo-images.s3.amazonaws.com/avatars/28668236/p0yvkbcqDZ/large"
                                                                   width="50" height="50" style="display: inline;"><span
                                                    class="ring"></span></a> <span class="points" data-user="28668236">0 XP </span><span
                                                class="name"><a href="https://www.codearena.co/olsicelaj2"
                                                                class="username">olsicelaj2</a></span></li>
                                    <li class="list-leaderboard-item ">
                                        <a href="https://www.codearena.co/mintpanda25" class="avatar avatar-small "
                                           title="mintpanda25"><img class="lazy"
                                                                    src="{{ asset("assets/Duolingo_Home_files/large") }}"
                                                                    data-original="//s3.amazonaws.com/duolingo-images/avatar/default_2/large"
                                                                    width="50" height="50"
                                                                    style="display: inline;"><span class="ring"></span></a>
                                        <span class="points" data-user="149341270">0 XP </span><span class="name"><a
                                                    href="https://www.codearena.co/mintpanda25" class="username">mintpanda25</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footer-main">
                <ul class="nav-footer">
                    <li><a href="https://www.codearena.co/info" tabindex="100">About</a></li>
                    <li class="mobile-hidden"><a href="http://gear.codearena.co/" tabindex="104"
                                                 target="_blank">Gear</a></li>
                    <li class="mobile-hidden"><a href="https://www.codearena.co/help" tabindex="105">Help</a></li>
                    <li class="mobile-hidden"><a href="https://www.codearena.co/guidelines"
                                                 tabindex="106">Guidelines</a></li>
                    <li class="mobile-hidden"><a href="https://www.codearena.co/terms" tabindex="108">Terms</a></li>
                    <li class="mobile-hidden"><a href="https://www.codearena.co/privacy" tabindex="109">Privacy</a></li>
                    </span>
                </ul>
            </div>
            <div class="practice-container"><a href="https://www.codearena.co/practice"
                                               class="btn btn-primary btn-block btn-strengthen-skills">Strengthen
                    skills</a></div>
        </main>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
    </script>
@stop