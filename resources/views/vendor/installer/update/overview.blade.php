@extends('vendor.installer.layouts.master-update')

@section('title', trans('installer_messages.updater.welcome.title'))
@section('container')
    <p class=" tajawal_black paragraph text-center">{{ trans_choice('installer_messages.updater.overview.message', $numberOfUpdatesPending, ['number' => $numberOfUpdatesPending]) }}</p>
    <div class=" tajawal_black buttons">
        <a href="{{ route('LaravelUpdater::database') }}" class=" tajawal_black button">{{ trans('installer_messages.updater.overview.install_updates') }}</a>
    </div>
@stop
