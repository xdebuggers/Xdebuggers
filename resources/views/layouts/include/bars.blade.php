@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<style>
    #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
    }
    #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
    }
    .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1s infinite ease-in-out;
        animation: sk-scaleout 1s infinite ease-in-out;
    }
    @-webkit-keyframes sk-scaleout {
        0% {
            -webkit-transform: scale(0);
        }
        100% {
            -webkit-transform: scale(1);
            opacity: 0;
        }
    }
    @keyframes sk-scaleout {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 0;
        }
    }
</style>

<div id="loader"><div class="spinner"></div></div>
        <script>
            window.addEventListener("load", function load() {
                const loader = document.getElementById("loader");
                setTimeout(function () {
                    loader.classList.add("fadeOut");
                }, 300);
            });
        </script>
        <div>
            <div class="sidebar">
                <div class="sidebar-inner">
                    <div class="sidebar-logo">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer peer-greed">
                            <a class="sidebar-link td-n" href="{{route('home')}}"
                                    ><div class="peers ai-c fxw-nw">
                                        <div class="peer">
                                            <div class="logo">
                                                <img style="width:65px; height:65px"
                                            src="{{ asset('images/logo-dark-ico.png') }}"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                        <div class="peer peer-greed">
                                            <h5 class="lh-1 mB-0 logo-text">
                                                Xdebuggers
                                            </h5>
                                        </div>
                                    </div></a
                                >
                            </div>
                            <div class="peer">
                                <div class="mobile-toggle sidebar-toggle">
                                    <a href="" class="td-n"
                                        ><i class="fas fa-arrow-circle-left"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu scrollable pos-r">
                        <li class="nav-item mT-30 actived">
                            <a class="sidebar-link" href="{{route('dashboard')}}"
                                ><span class="icon-holder"
                                    ><i class="c-blue-500 fas fa-home"></i> </span
                                ><span class="title">Dashboard</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="{{auth()->user()->getRole() == 'admin' ? '/messages/' : '/messages/'.auth()->user()->id}}"
                                ><span class="icon-holder"
                                    ><i class="c-brown-500 fas fa-comments"></i> </span
                                ><span class="title">{{auth()->user()->getRole() == 'admin' ? 'Messages' : 'My Messages' }}</span></a
                            >
                        </li>
                        @if(auth()->user()->getRole() != 'guest')
                        <li class="nav-item">
                            <a class="sidebar-link" href="{{route('announcement.index')}}"
                                ><span class="icon-holder"
                                    ><i
                                        class="c-deep-purple-500 fas fa-bullhorn"></i> </span
                                ><span class="title">{{auth()->user()->getRole() == 'admin' ? 'Announcements' : 'Old Announcements' }}</span></a
                            >
                        </li>
                        @endif

                        @if(auth()->user()->getRole() == 'admin')
                        <li class="nav-item">
                            <a class="sidebar-link" href="{{route('user.index')}}"
                                ><span class="icon-holder"
                                    ><i
                                        class="c-light-blue-500 fas fa-users"
                                    ></i> </span
                                ><span class="title">Users</span></a
                            >
                        </li>
                        @endif
                        @if(auth()->user()->getRole() == 'admin')
                        <li class="nav-item">
                            <a class="sidebar-link" href="{{route('cv.create')}}"
                                ><span class="icon-holder"
                                    ><i
                                        class="c-light-blue-500 fa fa-file-o"
                                    ></i> </span
                                ><span class="title">CV</span></a
                            >
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="page-container">
                <div class="header navbar">
                    <div class="header-container">
                        <ul class="nav-left">
                            <li>
                                <a
                                    id="sidebar-toggle"
                                    class="sidebar-toggle"
                                    href="javascript:void(0);"
                                    ><i class="fas fa-bars"></i
                                ></a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="dropdown">
                                <a
                                    href=""
                                    class="dropdown-toggle no-after peers fxw-nw ai-c lh-1"
                                    data-toggle="dropdown"
                                    ><div class="peer mR-10">
                                        <img
                                            class="w-2r bdrs-50p"
                                            src="https://randomuser.me/api/portraits/men/10.jpg"
                                            alt=""
                                        />
                                    </div>
                                    <div class="peer">
                                        <span class="fsz-sm c-grey-900"
                                            >{{auth()->user()->firstname.' '.auth()->user()->lastname}}</span
                                        >
                                    </div></a
                                >
                                <ul class="dropdown-menu fsz-sm">
                                    <li>
                                        <a
                                            href="{{ route('user.edit', auth()->user()->id)}}"
                                            class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                                            ><i class="fas fa-id-card mR-10"></i>
                                            <span>Profile</span></a
                                        >
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        href="#"
                                        class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                                        ><i class="fas fa-sign-out-alt mR-10"></i>
                                        <span>Logout</span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <main class="main-content bgc-grey-100">
                    <div id="mainContent">
                        @yield('main-content')
                    </div>
                </main>
                <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                    <span
                        >Copyright © 2020 Designed by
                        <a
                            href="https://xdebuggers.com"
                            target="_blank"
                            title="Xdebuggers"
                            >Xdebuggers</a
                        >. All rights reserved.</span
                    >
                </footer>
            </div>
        </div>
@endsection
