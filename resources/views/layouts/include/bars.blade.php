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
                                            src="{{ asset('images/logo-ico.png') }}"
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
                                        ><i class="ti-arrow-circle-left"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu scrollable pos-r">
                        <li class="nav-item mT-30 actived">
                            <a class="sidebar-link" href="{{route('dashboard')}}"
                                ><span class="icon-holder"
                                    ><i class="c-blue-500 ti-home"></i> </span
                                ><span class="title">Dashboard</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="{{route('messages')}}"
                                ><span class="icon-holder"
                                    ><i class="c-brown-500 ti-email"></i> </span
                                ><span class="title">Messages</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="{{route('announcement.index')}}"
                                ><span class="icon-holder"
                                    ><i
                                        class="c-deep-purple-500 ti-comment-alt"
                                    ></i> </span
                                ><span class="title">Announcements</span></a
                            >
                        </li>

                        <li class="nav-item">
                            <a class="sidebar-link" href="{{route('user.index')}}"
                                ><span class="icon-holder"
                                    ><i
                                        class="c-light-blue-500 ti-pencil"
                                    ></i> </span
                                ><span class="title">Users</span></a
                            >
                        </li>
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
                                    ><i class="ti-menu"></i
                                ></a>
                            </li>
                            <li class="search-box">
                                <a
                                    class="search-toggle no-pdd-right"
                                    href="javascript:void(0);"
                                    ><i
                                        class="search-icon ti-search pdd-right-10"
                                    ></i>
                                    <i
                                        class="search-icon-close ti-close pdd-right-10"
                                    ></i
                                ></a>
                            </li>
                            <li class="search-input">
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Search..."
                                />
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="notifications dropdown">
                                <span class="counter bgc-blue">3</span>
                                <a
                                    href=""
                                    class="dropdown-toggle no-after"
                                    data-toggle="dropdown"
                                    ><i class="ti-email"></i
                                ></a>
                                <ul class="dropdown-menu">
                                    <li class="pX-20 pY-15 bdB">
                                        <i class="ti-email pR-10"></i>
                                        <span class="fsz-sm fw-600 c-grey-900"
                                            >Emails</span
                                        >
                                    </li>
                                    <li>
                                        <ul
                                            class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm"
                                        >
                                            <li>
                                                <a
                                                    href=""
                                                    class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                                                    ><div class="peer mR-15">
                                                        <img
                                                            class="w-3r bdrs-50p"
                                                            src="https://randomuser.me/api/portraits/men/1.jpg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div
                                                        class="peer peer-greed"
                                                    >
                                                        <div>
                                                            <div
                                                                class="peers jc-sb fxw-nw mB-5"
                                                            >
                                                                <div
                                                                    class="peer"
                                                                >
                                                                    <p
                                                                        class="fw-500 mB-0"
                                                                    >
                                                                        John Doe
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="peer"
                                                                >
                                                                    <small
                                                                        class="fsz-xs"
                                                                        >5 mins
                                                                        ago</small
                                                                    >
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="c-grey-600 fsz-sm"
                                                                >Want to create
                                                                your own
                                                                customized data
                                                                generator for
                                                                your
                                                                app...</span
                                                            >
                                                        </div>
                                                    </div></a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=""
                                                    class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                                                    ><div class="peer mR-15">
                                                        <img
                                                            class="w-3r bdrs-50p"
                                                            src="https://randomuser.me/api/portraits/men/2.jpg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div
                                                        class="peer peer-greed"
                                                    >
                                                        <div>
                                                            <div
                                                                class="peers jc-sb fxw-nw mB-5"
                                                            >
                                                                <div
                                                                    class="peer"
                                                                >
                                                                    <p
                                                                        class="fw-500 mB-0"
                                                                    >
                                                                        Moo Doe
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="peer"
                                                                >
                                                                    <small
                                                                        class="fsz-xs"
                                                                        >15 mins
                                                                        ago</small
                                                                    >
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="c-grey-600 fsz-sm"
                                                                >Want to create
                                                                your own
                                                                customized data
                                                                generator for
                                                                your
                                                                app...</span
                                                            >
                                                        </div>
                                                    </div></a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=""
                                                    class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100"
                                                    ><div class="peer mR-15">
                                                        <img
                                                            class="w-3r bdrs-50p"
                                                            src="https://randomuser.me/api/portraits/men/3.jpg"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <div
                                                        class="peer peer-greed"
                                                    >
                                                        <div>
                                                            <div
                                                                class="peers jc-sb fxw-nw mB-5"
                                                            >
                                                                <div
                                                                    class="peer"
                                                                >
                                                                    <p
                                                                        class="fw-500 mB-0"
                                                                    >
                                                                        Lee Doe
                                                                    </p>
                                                                </div>
                                                                <div
                                                                    class="peer"
                                                                >
                                                                    <small
                                                                        class="fsz-xs"
                                                                        >25 mins
                                                                        ago</small
                                                                    >
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="c-grey-600 fsz-sm"
                                                                >Want to create
                                                                your own
                                                                customized data
                                                                generator for
                                                                your
                                                                app...</span
                                                            >
                                                        </div>
                                                    </div></a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pX-20 pY-15 ta-c bdT">
                                        <span
                                            ><a
                                                href="email.html"
                                                class="c-grey-600 cH-blue fsz-sm td-n"
                                                >View All Email
                                                <i
                                                    class="fs-xs ti-angle-right mL-10"
                                                ></i></a
                                        ></span>
                                    </li>
                                </ul>
                            </li>
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
                                            >John Doe</span
                                        >
                                    </div></a
                                >
                                <ul class="dropdown-menu fsz-sm">
                                    <li>
                                        <a
                                            href=""
                                            class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                                            ><i class="ti-user mR-10"></i>
                                            <span>Profile</span></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            href="email.html"
                                            class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                                            ><i class="ti-email mR-10"></i>
                                            <span>Messages</span></a
                                        >
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        href="#"
                                        class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                                        ><i class="ti-power-off mR-10"></i>
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
