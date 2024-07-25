@extends('home.layouts.master')

@section('meta_description')
    <meta name="description" content="{{ trans('web_trans.products') }}">
@endsection

@section('key')
    @php
        $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ',  trans('web_trans.products') );
        $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
    @endphp
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    <meta property="og:title" content="{{ trans('web_trans.products') }}">
    <meta property="og:description" content="{{ trans('web_trans.products') }}">
    <meta property="og:site_name" content="{{ trans('web_trans.products') }}">
    <meta name="twitter:title" content="{{ trans('web_trans.products') }}">
    <meta name="twitter:description" content="{{ trans('web_trans.products') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    {{ trans('web_trans.products') }}
@endsection

@section('css')
@endsection

@section('content')
    <section class=" tajawal_black page-title"
        style="background-image: url({{ asset('assets/uploads/settings/banner/' . $setting->banner) }});">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black title-outer">
                <h1 class=" tajawal_black title">

                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>

                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class=" tajawal_black news-section">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black row">
                @foreach ($Products as $Product)
                    <div class=" tajawal_black news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                        style="visibility: visible; animation-name: none;">
                        <div class=" tajawal_black inner-box">
                            <div class=" tajawal_black image-box">
                                @if ($app->getLocale() == 'ar')
                                    <figure class=" tajawal_black image"><a
                                            href="{{ asset('assets/uploads/products/' . $Product->photo) }}"><img
                                                src="{{ asset('assets/uploads/products/' . $Product->photo) }}"
                                                alt=""></a></figure>
                                @else
                                    <figure class=" tajawal_black image"><a
                                            href="{{ asset('assets/uploads/products/' . $Product->photo) }}"><img
                                                src="{{ asset('assets/uploads/products/' . $Product->photo) }}"
                                                alt=""></a></figure>
                                @endif
                            </div>
                            <div class=" tajawal_black content-box">
                                <ul class=" tajawal_black post-info">
                                </ul>
                                @if ($app->getLocale() == 'ar')
                                    <h4 class=" tajawal_black title"><a
                                            href="{{ route('siteCustomProduct', ['slug' => $Product->slug_ar]) }}">
                                            {{ $Product->name_ar }}
                                        </a>
                                    </h4>
                                @else
                                    <h4 class=" tajawal_black title"><a
                                            href="{{ route('siteCustomProduct', ['slug' => $Product->slug]) }}">
                                            {{ $Product->name }}
                                        </a>
                                    </h4>
                                @endif
                                @if ($Product->discount)
                                    <h4 class=" tajawal_black title">
                                        <del style="color:red">{{ trans('web_trans.price') }}: {{ $Product->price }}</del>
                                    </h4>
                                    <h4 class=" tajawal_black title">
                                        {{ trans('web_trans.after_discount') }}:
                                        {{ $Product->price - $Product->discount }}
                                    </h4>
                                @else
                                    <h4 class=" tajawal_black title">
                                        {{ trans('web_trans.price') }}: {{ $Product->price }}
                                    </h4>
                                @endif
                                <h4 class=" tajawal_black title">
                                    {{ trans('web_trans.amount') }}: {{ $Product->amount }}
                                </h4>

                                @if ($app->getLocale() == 'ar')
                                    <a href="{{ route('siteCustomProduct', ['slug' => $Product->slug_ar]) }}"
                                        class=" tajawal_black read-more"> <i class=" fa fa-long-arrow-alt-right "></i></a>
                                @else
                                    <a href="{{ route('siteCustomProduct', ['slug' => $Product->slug]) }}"
                                        class=" tajawal_black read-more"> <i class=" fa fa-long-arrow-alt-right "></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
