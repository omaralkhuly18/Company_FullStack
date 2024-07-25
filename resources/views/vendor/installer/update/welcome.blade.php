@extends('vendor.installer.layouts.master-update')

@section('title', trans('installer_messages.updater.welcome.title'))
@section('container')
    <p class=" tajawal_black paragraph text-center">
    	{{ trans('installer_messages.updater.welcome.message') }}
    </p>
    <div class=" tajawal_black buttons">
        <a href="{{ route('LaravelUpdater::overview') }}" class=" tajawal_black button">{{ trans('installer_messages.next') }}</a>
    </div>
@stop