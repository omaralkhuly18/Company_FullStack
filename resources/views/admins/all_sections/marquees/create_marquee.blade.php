@extends('layouts.master')
@section('title')
    {{ trans('web_trans.create_marquee') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.create_marquee') }}</h1>
            <a href="{{ route('dash.marquee.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-bars"></i> {{ trans('web_trans.all_items_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.marquee.store') }}" method="post">
                    @csrf
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.item') }}*</label>
                        <input type="text" name="item" class=" tajawal_black form-control" value="" autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.item_ar') }}*</label>
                        <input type="text" name="item_ar" class=" tajawal_black form-control" value="" autocomplete="off">
                    </div>
                    <button type="submit"
                        class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.submit_btn') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
