@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $PricingHeader->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $PricingHeader->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $PricingHeader->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $PricingHeader->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $PricingHeader->seo_title_ar }}">
        <meta property="og:description" content="{{ $PricingHeader->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $PricingHeader->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $PricingHeader->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $PricingHeader->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $PricingHeader->seo_title }}">
        <meta property="og:description" content="{{ $PricingHeader->seo_descr }}">
        <meta property="og:site_name" content="{{ $PricingHeader->seo_title }}">
        <meta name="twitter:title" content="{{ $PricingHeader->seo_title }}">
        <meta name="twitter:description" content="{{ $PricingHeader->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $PricingHeader->seo_title_ar }}
    @else
        {{ $PricingHeader->seo_title }}
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
                        {{ $PricingHeader->title_ar }}
                    @else
                        {{ $PricingHeader->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $PricingHeader->title_ar }}
                        @else
                            {{ $PricingHeader->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class=" tajawal_black ">
        <div class=" tajawal_black container pb-70">
            <div class=" tajawal_black row">
                @foreach ($PricingPlans as $PricingPlan)
                    <div class=" tajawal_black col-xl-4 col-lg-4">
                        <div class=" tajawal_black pricing-block">
                            <div class=" tajawal_black inner-box">
                                <figure class=" tajawal_black image"><img
                                        src="{{ asset('assets/uploads/pricingPlans/' . $PricingPlan->photo) }}"
                                        alt=""></figure>
                                <div class=" tajawal_black price-box">
                                    <h4 class=" tajawal_black price"><sup>$</sup>{{ $PricingPlan->price }}</h4>
                                    <span class=" tajawal_black validaty">/ {{ $PricingPlan->period }}</span>
                                </div>
                                @if ($app->getLocale() == 'ar')
                                    <h4 class=" tajawal_black title">{{ $PricingPlan->name_ar }}</h4>
                                @else
                                    <h4 class=" tajawal_black title">{{ $PricingPlan->name }}</h4>
                                @endif
                                <ul class=" tajawal_black features">
                                    @foreach ($PricingPlan->pricingOptions as $pricingOption)
                                        @if ($app->getLocale() == 'ar')
                                            <li>{{ $pricingOption->name_ar }}</li>
                                        @else
                                            <li>{{ $pricingOption->name }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <div class=" tajawal_black btn-box">
                                    <a href="javascript:void(0);" class=" tajawal_black theme-btn btn-style-one hvr-light expandButton"
                                        data-form-container="#formContainer{{ $loop->iteration }}"><span class=" tajawal_black btn-title">
                                            @if ($app->getLocale() == 'ar')
                                                {{ $PricingPlan->btn_text_ar }}
                                            @else
                                                {{ $PricingPlan->btn_text }}
                                            @endif
                                        </span></a>
                                </div>
                                <div id="formContainer{{ $loop->iteration }}" style="display: none;">
                                    <form action="{{ route('sitePricingOrder') }}" method="post"
                                        id="order-form{{ $loop->iteration }}">
                                        @csrf
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                *</label>
                                            <input type="text" name="name" class=" tajawal_black form-control" required=""
                                                autocomplete="off" required>
                                            @error('name')
                                                @foreach ($errors->get('name') as $error)
                                                    <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                @endforeach
                                            @enderror
                                            <input type="hidden" name="pricing_id" required=""
                                                value="{{ $PricingPlan->id }}">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.email') }}
                                                *</label>
                                            <input type="text" name="email" class=" tajawal_black form-control" required=""
                                                autocomplete="off" required>
                                            @error('email')
                                                @foreach ($errors->get('email') as $error)
                                                    <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                @endforeach
                                            @enderror
                                        </div>

                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.phone') }}
                                                *</label>
                                            <input type="text" name="phone" class=" tajawal_black form-control" required=""
                                                autocomplete="off" required>
                                            @error('phone')
                                                @foreach ($errors->get('phone') as $error)
                                                    <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                @endforeach
                                            @enderror
                                        </div>

                                        <div class=" tajawal_black mb-3">
                                            <button type="submit"
                                                class=" tajawal_black theme-btn btn-style-one hover-light">{{ trans('web_trans.submit_btn') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection



@section('js')
    <script>
        $(document).ready(function() {
            $('.expandButton').click(function() {
                var formContainer = $(this).data('form-container');
                $(formContainer).toggle();
            });
        });


        $('form[id^="order-form"]').submit(function(event) {
            event.preventDefault();
            // Serialize form data
            var formData = $(this).serialize();

            // Send Ajax request
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Extract and display the success message
                    if (response.success) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 5000, // Adjust the duration in milliseconds
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer);
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer);
                            }
                        });

                        Toast.fire({
                            icon: "success",
                            title: response.success // Display the success message
                        });
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endsection
