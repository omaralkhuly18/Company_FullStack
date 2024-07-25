@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
    <meta name="description" content="{{ $Blog->seo_descr_ar }}">
    @else
    <meta name="description" content="{{ $Blog->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Blog->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Blog->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $Blog->seo_title_ar }}">
        <meta property="og:description" content="{{ $Blog->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $Blog->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $Blog->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $Blog->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $Blog->seo_title }}">
        <meta property="og:description" content="{{ $Blog->seo_descr }}">
        <meta property="og:site_name" content="{{ $Blog->seo_title }}">
        <meta name="twitter:title" content="{{ $Blog->seo_title }}">
        <meta name="twitter:description" content="{{ $Blog->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $Blog->seo_title_ar }}
    @else
        {{ $Blog->seo_title }}
    @endif
@endsection

@section('css')
@endsection

@section('content')
    <section class=" tajawal_black page-title"
        style="background-image: url({{ asset('assets/uploads/settings/banner/' . $setting->banner) }});">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black title-outer">
                <h1 class=" tajawal_black title">
                    @if ($app->getLocale() == 'ar')
                        {{ $Blog->seo_title_ar }}
                    @else
                        {{ $Blog->seo_title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $Blog->title_ar }}
                        @else
                            {{ $Blog->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class=" tajawal_black blog-details">
        <div class=" tajawal_black container">
            <div class=" tajawal_black row">
                <div class=" tajawal_black col-xl-8 col-lg-7">
                    <div class=" tajawal_black blog-details__left">
                        <div class=" tajawal_black blog-details__img">
                            <img src="{{ asset('assets/uploads/posts/' . $Blog->photo) }}" alt="">
                            <div class=" tajawal_black blog-details__date">
                                <span class=" tajawal_black day">
                                    {{ $Blog->created_at->format('d') }}
                                </span>
                                <span class=" tajawal_black month">
                                    {{ $Blog->created_at->formatLocalized('%b') }}
                                </span>
                            </div>
                        </div>
                        <div class=" tajawal_black blog-details__content">
                            <ul class=" tajawal_black list-unstyled blog-details__meta">
                                <li><a href="javascript:void;"><i class="fas fa-user-circle"></i> Admin</a></li>
                            </ul>
                            <p class=" tajawal_black blog-details__text-2">
                                @if ($app->getLocale() == 'ar')
                                    {!! html_entity_decode($Blog->descr_ar) !!}
                                @else
                                    {!! html_entity_decode($Blog->descr) !!}
                                @endif
                            </p>
                        </div>
                        <div class=" tajawal_black blog-details__bottom">
                            <p class=" tajawal_black blog-details__tags"> <span>{{ trans('web_trans.tags') }}</span>
                                @foreach ($Blog->tags as $Tag)
                                    <a href="{{ route('siteCustomTag', $Tag->name) }}">{{ $Tag->name }}</a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>

                <div class=" tajawal_black col-xl-4 col-lg-5">
                    <div class=" tajawal_black sidebar">
                        <div class=" tajawal_black sidebar__single sidebar__search" style="direction: ltr">
                            <form action="{{route('siteCustomSearch')}}" class=" tajawal_black sidebar__search-form"
                                method="get">
                            
                                <input name="search_text" type="search" placeholder="{{trans('web_trans.search_here')}}" required=""
                                    autocomplete="off">
                                <button type="submit"><i class="lnr-icon-search"></i></button>
                            </form>
                        </div>

                        <div class=" tajawal_black sidebar__single sidebar__post" >
                            <h3 class=" tajawal_black sidebar__title">{{trans('web_trans.latest_posts')}}</h3>
                            <ul class=" tajawal_black sidebar__post-list list-unstyled" style="direction: ltr" >
                                @foreach ($LatestPosts as $LatestPost)
                                    <li>
                                        <div class=" tajawal_black sidebar__post-image"> <img
                                                src="{{ asset('assets/uploads/posts/' . $LatestPost->photo) }}"
                                                alt=""> </div>
                                        <div class=" tajawal_black sidebar__post-content">
                                            <h3> <span class=" tajawal_black sidebar__post-content-meta"><i
                                                        class=" tajawal_black fas fa-user-circle" ></i>Admin
                                                </span>
                                                @if ($app->getLocale() == 'ar')
                                                    <a
                                                        href="{{ route('siteCustomBlog', ['slug' => $LatestPost->slug_ar]) }}">
                                                        {{ $LatestPost->title_ar }}
                                                    </a>
                                                @else
                                                    <a
                                                        href="{{ route('siteCustomBlog', ['slug' => $LatestPost->slug_ar]) }}">
                                                        {{ $LatestPost->title }}
                                                    </a>
                                                @endif
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class=" tajawal_black sidebar__single sidebar__category">
                            <h3 class=" tajawal_black sidebar__title mb-20">{{trans('web_trans.categories')}}</h3>
                            <ul class=" tajawal_black sidebar__category-list list-unstyled">
                                @foreach ($Caregories as $Caregory)
                                    <li>
                                        @if ($app->getLocale() == 'ar')
                                            <a href="{{ route('siteCustomCategory', ['slug' => $Caregory->slug_ar]) }}">{{ $Caregory->name_ar }}<span
                                                    class=" tajawal_black icon-right-arrow"></span></a>
                                        @else
                                            <a href="{{ route('siteCustomCategory', ['slug' => $Caregory->slug]) }}">{{ $Caregory->name }}<span
                                                    class=" tajawal_black icon-right-arrow"></span></a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class=" tajawal_black sidebar__single sidebar__tags">
                            <h3 class=" tajawal_black sidebar__title">{{trans('web_trans.tags')}}</h3>
                            <div class=" tajawal_black sidebar__tags-list">
                                @foreach($Tags as $Tag)
                                <a href="{{ route('siteCustomTag', $Tag) }}">{{$Tag}}</a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
