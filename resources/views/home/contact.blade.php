@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
    <meta name="description" content="{{ $Contact->seo_descr_ar  }}">
    @else
    <meta name="description" content="{{ $Contact->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Contact->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Contact->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $Contact->seo_title_ar }}">
        <meta property="og:description" content="{{ $Contact->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $Contact->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $Contact->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $Contact->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $Contact->seo_title }}">
        <meta property="og:description" content="{{ $Contact->seo_descr }}">
        <meta property="og:site_name" content="{{ $Contact->seo_title }}">
        <meta name="twitter:title" content="{{ $Contact->seo_title }}">
        <meta name="twitter:description" content="{{ $Contact->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $Contact->seo_title_ar }}
    @else
        {{ $Contact->seo_title }}
    @endif
@endsection

@section('css')
@endsection
@section('content')
    <html lang="en">
    <section class=" tajawal_black page-title"
        style="background-image: url({{ asset('assets/uploads/settings/banner/' . $setting->banner) }});">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black title-outer">
                <h1 class=" tajawal_black title">
                    @if ($app->getLocale() == 'ar')
                        {{ $Contact->title_ar }}
                    @else
                        {{ $Contact->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $Contact->title_ar }}
                        @else
                            {{ $Contact->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class=" tajawal_black contact-details">
        <div class=" tajawal_black container ">
            <div class=" tajawal_black row">
                <div class=" tajawal_black col-xl-7 col-lg-6">
                    <div class=" tajawal_black sec-title">
                        @if ($app->getLocale() == 'ar')
                            <span class=" tajawal_black sub-title">
                                {{ $Contact->send_mail_subheading_ar }}
                            </span>
                            <h2>{{ $Contact->send_mail_heading_ar }}</h2>
                        @else
                            <span class=" tajawal_black sub-title">
                                {{ $Contact->send_mail_subheading }}
                            </span>
                            <h2>{{ $Contact->send_mail_heading }}</h2>
                        @endif
                    </div>
                    <form id="contact-form" name="contact_form" class=" tajawal_black " action="{{ route('dash.contact.store') }}"
                        method="post">
                        @csrf
                        <div class=" tajawal_black row">
                            <div class=" tajawal_black col-sm-6">
                                <div class=" tajawal_black mb-3">
                                    <input name="name" class=" tajawal_black form-control" type="text"
                                        placeholder="{{ trans('web_trans.full_name') }}" required="" autocomplete="off">
                                </div>
                            </div>
                            <div class=" tajawal_black col-sm-6">
                                <div class=" tajawal_black mb-3">
                                    <input name="email" class=" tajawal_black form-control" type="email"
                                        placeholder="{{ trans('web_trans.email') }}" required="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class=" tajawal_black mb-3">
                            <input name="subject" class=" tajawal_black form-control" type="text"
                                placeholder="{{ trans('web_trans.subject') }}" required="" autocomplete="off">
                        </div>
                        <div class=" tajawal_black mb-3">
                            <textarea name="message" class=" tajawal_black form-control" rows="7" placeholder="{{ trans('web_trans.message') }}"
                                required="" autocomplete="off"></textarea>
                        </div>


                        <div class=" tajawal_black mb-3">
                            <input name="form_botcheck" class=" tajawal_black form-control" type="hidden" value=""
                                autocomplete="off">
                            <button type="submit" class=" tajawal_black theme-btn btn-style-one" data-loading-text="Please wait..."><span
                                    class=" tajawal_black btn-title">{{ trans('web_trans.send_msg') }}</span></button>
                        </div>
                    </form>
                </div>
                <div class=" tajawal_black col-xl-5 col-lg-6">
                    <div class=" tajawal_black contact-details__right">
                        <div class=" tajawal_black sec-title">
                            @if ($app->getLocale() == 'ar')
                                <span class=" tajawal_black sub-title">
                                    {{ $Contact->information_subheading_ar }}
                                </span>
                                <h2>{{ $Contact->information_heading_ar }}</h2>
                                <div class=" tajawal_black text">{{ $Contact->information_text_ar }}</div>
                            @else
                                <span class=" tajawal_black sub-title">
                                    {{ $Contact->information_subheading }}
                                </span>
                                <h2>{{ $Contact->information_heading }}</h2>
                                <div class=" tajawal_black text">{{ $Contact->information_text }}</div>
                            @endif


                            <ul class=" tajawal_black list-unstyled contact-details__info">
                                <li>
                                    <div class=" tajawal_black icon bg-theme-color2">
                                        <span class=" tajawal_black lnr-icon-phone-plus"></span>
                                    </div>
                                    <span style="width:10px"></span>
                                    <div class=" tajawal_black text">
                                        @if ($app->getLocale() == 'ar')
                                            <h6>{{ $Contact->information_phone_title_ar }}</h6>
                                        @else
                                            <h6>{{ $Contact->information_phone_title }}</h6>
                                        @endif
                                        <a
                                            href="tel:{{ $Contact->information_phone_value }}">{{ $Contact->information_phone_value }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class=" tajawal_black icon">
                                        <span class=" tajawal_black lnr-icon-envelope1"></span>
                                    </div>
                                    <span style="width:10px"></span>
                                    <div class=" tajawal_black text">
                                        @if ($app->getLocale() == 'ar')
                                            <h6>{{ $Contact->information_email_title_ar }}</h6>
                                        @else
                                            <h6>{{ $Contact->information_email_title }}</h6>
                                        @endif
                                        <a
                                            href="mailto:{{ $Contact->information_email_value }}">{{ $Contact->information_email_value }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class=" tajawal_black icon">
                                        <span class=" tajawal_black lnr-icon-location"></span>
                                    </div>
                                    <span style="width:10px"></span>
                                    <div class=" tajawal_black text">
                                        @if ($app->getLocale() == 'ar')
                                            <h6>{{ $Contact->information_address_title_ar }}</h6>
                                            <span>{{ $Contact->information_address_value_ar }}</span>
                                        @else
                                            <h6>{{ $Contact->information_address_title }}</h6>
                                            <span>{{ $Contact->information_address_value }}</span>
                                        @endif

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class=" tajawal_black map-section">
        {!! $setting->map !!}
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#contact-form').submit(function(event) {
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
        });
    </script>
@endsection
