@extends('layouts.include.auth')
@section('title', 'Reset Password')
@section('form')
<div
                class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r"
                style="min-width: 320px;"
            >
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <h4 class="fw-300 c-grey-900 mB-40">Reset Password</h4>
                <form method="POST" action="{{ route('password.email') }}">
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
                        <button class="btn btn-primary" type="submit"> {{ __('Send Password Reset Link') }}</button>
                    </div>
                </form>
            </div>
@endsection


