@extends('layouts.include.bars')
@section('main-content')
<div class="full-container">
    <div class="peers fxw-nw pos-r">
        <div class="peer bdR" id="chat-sidebar">
            <div class="layers h-100">
                <div class="layer w-100 fxg-1 scrollable pos-r ps ps--active-y">
                    @if(auth()->user()->getRole() == 'admin')
                    @foreach($users as $user)
                    @if($user != auth()->user())
                    <a href="/messages/{{$user->id}}">
                    <div
                        class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p"
                    >

                            <div class="peer">
                                <img
                                    src="https://randomuser.me/api/portraits/men/1.jpg"
                                    alt=""
                                    class="w-3r h-3r bdrs-50p"
                                />
                            </div>
                            <div class="peer peer-greed pL-20">
                            <h6 class="mB-0 lh-1 fw-400">{{$user->firstname.' '.$user->lastname}}</h6>
                            </div>

                    </div>
                </a>
                @endif
                    @endforeach
                    @else
                    <div
                        class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p"
                    >

                            <div class="peer">
                                <img
                                    src="https://randomuser.me/api/portraits/men/1.jpg"
                                    alt=""
                                    class="w-3r h-3r bdrs-50p"
                                />
                            </div>
                            <div class="peer peer-greed pL-20">
                            <h6 class="mB-0 lh-1 fw-400">{{auth()->user()->firstname.' '.auth()->user()->lastname}}</h6>
                            </div>

                    </div>
                    @endif
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div
                            class="ps__thumb-x"
                            tabindex="0"
                            style="left: 0px; width: 0px;"
                        ></div>
                    </div>
                    <div
                        class="ps__rail-y"
                        style="top: 0px; height: 578px; right: 0px;"
                    >
                        <div
                            class="ps__thumb-y"
                            tabindex="0"
                            style="top: 0px; height: 469px;"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
        @if($selected_user != null)
        <div class="peer peer-greed" id="chat-box">
            <div class="layers h-100">
                <div class="layer w-100">
                    <div class="peers fxw-nw jc-sb ai-c pY-20 pX-30 bgc-white">
                        <div class="peers ai-c">
                            <div class="peer d-n@md+">
                                <a
                                    href=""
                                    title=""
                                    id="chat-sidebar-toggle"
                                    class="td-n c-grey-900 cH-blue-500 mR-30"
                                    ><i class="ti-menu"></i
                                ></a>
                            </div>
                            <div class="peer">
                                <h6 class="lh-1 mB-0">{{$selected_user->firstname.' '.$selected_user->lastname}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r ps">
                    <div class="p-20 gapY-15">
                        <div class="peers fxw-nw">
                            <div class="peer peer-greed">
                                <div class="layers ai-fs gapY-5">
                                    @foreach($messages as $msg)
                                    <div class="layer">
                                        <div
                                            class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2"
                                        >
                                            <div class="peer mR-10">
                                                <small>{{$msg->created_at}}</small>
                                            </div>
                                            <div class="peer-greed">
                                                <span
                                                    >{{$msg->message}}</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div
                            class="ps__thumb-x"
                            tabindex="0"
                            style="left: 0px; width: 0px;"
                        ></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div
                            class="ps__thumb-y"
                            tabindex="0"
                            style="top: 0px; height: 0px;"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
