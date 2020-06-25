@extends('layouts.include.auth')
@section('title', 'Login')
@section('form')
<div
                class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r"
                style="min-width: 320px;"
            >
                <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="text-normal text-dark" for="email"
                            >{{ __('E-Mail Address') }}</label
                        >
                        <input
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="name@email.com"
                            id="email"
                        />
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-normal text-dark">{{ __('Password') }}</label>
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                            placeholder="Password"
                            id="password"
                        />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="peers ai-c jc-sb fxw-nw">
                            <div class="peer">
                                <div
                                    class="checkbox checkbox-circle checkbox-info peers ai-c"
                                >
                                    <input
                                        type="checkbox"
                                        id="inputCall1"
                                        name="inputCheckboxesCall"
                                        class="peer"
                                        name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                                    />
                                    <label
                                        for="inputCall1"
                                        class="peers peer-greed js-sb ai-c"
                                        ><span class="peer peer-greed"
                                            >{{ __('Remember Me') }}</span
                                        ></label
                                    >
                                </div>
                            </div>
                            <div class="peer">
                                <button class="btn btn-primary" type="submit"> {{ __('Login') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </div>
                    <div class="form-group">

                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __("Don't have an account? Register Now!") }}
                        </a>
                    </div>
                </form>
            </div>
@endsection
