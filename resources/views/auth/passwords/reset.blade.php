@extends('layouts.app')

@section('content')
<div class=" tajawal_black container">
    <div class=" tajawal_black row justify-content-center">
        <div class=" tajawal_black col-md-8">
            <div class=" tajawal_black card">
                <div class=" tajawal_black card-header">{{ __('Reset Password') }}</div>

                <div class=" tajawal_black card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class=" tajawal_black row mb-3">
                            <label for="email" class=" tajawal_black col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class=" tajawal_black col-md-6">
                                <input id="email" type="email" class=" tajawal_black form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class=" tajawal_black invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" tajawal_black row mb-3">
                            <label for="password" class=" tajawal_black col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class=" tajawal_black col-md-6">
                                <input id="password" type="password" class=" tajawal_black form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class=" tajawal_black invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" tajawal_black row mb-3">
                            <label for="password-confirm" class=" tajawal_black col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class=" tajawal_black col-md-6">
                                <input id="password-confirm" type="password" class=" tajawal_black form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class=" tajawal_black row mb-0">
                            <div class=" tajawal_black col-md-6 offset-md-4">
                                <button type="submit" class=" tajawal_black btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
