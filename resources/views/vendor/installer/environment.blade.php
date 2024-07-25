@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.environment.menu.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
    {!! trans('installer_messages.environment.menu.title') !!}
@endsection

@section('container')

    <p class=" tajawal_black text-center">
        {!! trans('installer_messages.environment.menu.desc') !!}
    </p>
    <div class=" tajawal_black buttons">
        <a href="{{ route('LaravelInstaller::environmentWizard') }}" class=" tajawal_black button button-wizard">
            <i class="fa fa-sliders fa-fw" aria-hidden="true"></i> {{ trans('installer_messages.environment.menu.wizard-button') }}
        </a>
        <a href="{{ route('LaravelInstaller::environmentClassic') }}" class=" tajawal_black button button-classic">
            <i class="fa fa-code fa-fw" aria-hidden="true"></i> {{ trans('installer_messages.environment.menu.classic-button') }}
        </a>
    </div>

@endsection
