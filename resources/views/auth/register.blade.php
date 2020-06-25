@extends('layouts.include.auth')
@section('title', 'Register')
@section('form')
<div
                class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r"
                style="min-width: 320px;"
            >
                <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-normal text-dark">{{ __('First Name') }}</label>
                        <input
                            name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus
                            type="text"
                            class="form-control  @error('firstname') is-invalid @enderror"
                            placeholder="John"
                            id="firstname"
                        />
                        @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="text-normal text-dark">{{ __('Last Name') }}</label>
                        <input
                            name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus
                            type="text"
                            class="form-control  @error('lastname') is-invalid @enderror"
                            placeholder="Doe"
                            id="lastname"
                        />
                        @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="text-normal text-dark">{{ __('Birthday') }}</label>
                        <input
                            name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus
                            type="date"
                            class="form-control  @error('birthday') is-invalid @enderror"
                            placeholder="19.04.1996"
                            id="birthday"
                        />
                        @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone" class="text-normal text-dark">{{ __('Phone') }}</label>
                        <input
                            name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus
                            type="number"
                            class="form-control  @error('phone') is-invalid @enderror"
                            placeholder="05310096754"
                            id="phone"
                        />
                        @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
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
                        <label class="text-normal text-dark"
                            >{{ __('Confirm Password') }}</label
                        >
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Password"
                            id="password-confirm"
                            name="password_confirmation" required autocomplete="new-password"
                        />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <div class="form-group">

                        <a class="btn btn-link" href="{{ route('login') }}">
                            {{ __("Already have an account? Login Now!") }}
                        </a>
                    </div>
                </form>
            </div>
@endsection
