@extends('vendor.installer.layouts.master-update')

@section('title', trans('installer_messages.updater.final.title'))
@section('container')
    <p class=" tajawal_black paragraph text-center">{{ session('message')['message'] }}</p>
    <div class=" tajawal_black buttons">
        <a href="{{ url('/') }}" class=" tajawal_black button">{{ trans('installer_messages.updater.final.exit') }}</a>
    </div>
@stop
