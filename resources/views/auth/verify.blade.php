@extends('layouts.app')

@section('content')
<div class=" tajawal_black container">
    <div class=" tajawal_black row justify-content-center">
        <div class=" tajawal_black col-md-8">
            <div class=" tajawal_black card">
                <div class=" tajawal_black card-header">{{ __('Verify Your Email Address') }}</div>

                <div class=" tajawal_black card-body">
                    @if (session('resent'))
                        <div class=" tajawal_black alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class=" tajawal_black d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class=" tajawal_black btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
