@extends('layouts.app')

@section('content')
<div class=" tajawal_black container">
    <div class=" tajawal_black row justify-content-center">
        <div class=" tajawal_black col-md-8">
            <div class=" tajawal_black card">
                <div class=" tajawal_black card-header">{{ __('Confirm Password') }}</div>

                <div class=" tajawal_black card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class=" tajawal_black row mb-3">
                            <label for="password" class=" tajawal_black col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class=" tajawal_black col-md-6">
                                <input id="password" type="password" class=" tajawal_black form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class=" tajawal_black invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" tajawal_black row mb-0">
                            <div class=" tajawal_black col-md-8 offset-md-4">
                                <button type="submit" class=" tajawal_black btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class=" tajawal_black btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
