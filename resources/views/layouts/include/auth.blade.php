@extends('layouts.admin')
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
        <div class="peers ai-s fxw-nw h-100vh">
            <div
                class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv"
                style="background-image: url({{ asset('images/showcase.jpg') }});"
            >
                <div class="pos-a centerXY">
                    <div
                        class="bgc-black bdrs-50p pos-r"
                        style="width: 120px; height: 120px;"
                    >
                        <img
                            {{-- style="width: 90px; height: 90px" --}}
                            class="pos-a centerXY"
                            src="{{ asset('images/logo.png') }}"
                            alt=""
                        />
                    </div>
                </div>
            </div>
            @include('sweetalert::alert')
            @yield('form')
        </div>
@endsection
