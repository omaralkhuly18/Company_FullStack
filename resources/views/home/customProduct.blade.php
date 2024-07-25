@extends('home.layouts.master')
@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $Product->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $Product->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Product->descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Product->descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $Product->seo_title_ar }}">
        <meta property="og:description" content="{{ $Product->descr_ar }}">
        <meta property="og:site_name" content="{{ $Product->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $Product->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $Product->descr_ar }}">
    @else
        <meta property="og:title" content="{{ $Product->seo_title }}">
        <meta property="og:description" content="{{ $Product->descr }}">
        <meta property="og:site_name" content="{{ $Product->seo_title }}">
        <meta name="twitter:title" content="{{ $Product->seo_title }}">
        <meta name="twitter:description" content="{{ $Product->descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/products/{{ $Product->photo }}">
    <meta name="twitter:image" content="assets/uploads/products/{{ $Product->photo }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $Product->seo_title_ar }}
    @else
        {{ $Product->seo_title }}
    @endif
@endsection

@section('css')
@endsection

@section('content')
    @if (session('success'))
    @endif
    <section class=" tajawal_black page-title"
        style="background-image: url({{ asset('assets/uploads/settings/banner/' . $setting->banner) }});">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black title-outer">
                <h1 class=" tajawal_black title">
                    @if ($app->getLocale() == 'ar')
                        {{ $Product->seo_title_ar }}
                    @else
                        {{ $Product->seo_title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $Product->name_ar }}
                        @else
                            {{ $Product->name }}
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
                            <img src="{{ asset('assets/uploads/products/' . $Product->photo) }}" alt="">
                        </div>
                        <div class=" tajawal_black blog-details__content">

                            <p class=" tajawal_black blog-details__text-2">
                                @if ($app->getLocale() == 'ar')
                                    {!! html_entity_decode($Product->descr_ar) !!}
                                @else
                                    {!! html_entity_decode($Product->descr) !!}
                                @endif
                            </p>

                        </div>

                        <div class=" tajawal_black blog-details__content">
                            @if ($Product->discount)
                                <h4 class=" tajawal_black title">
                                    <del style="color:red">{{ trans('web_trans.price') }}: {{ $Product->price }}</del>
                                </h4>
                                <h4 class=" tajawal_black title">
                                    {{ trans('web_trans.after_discount') }}: {{ $Product->price - $Product->discount }}
                                </h4>
                            @else
                                <h4 class=" tajawal_black title">
                                    {{ trans('web_trans.price') }}: {{ $Product->price }}
                                </h4>
                            @endif
                        </div>
                        @if ($Product->amount && $Product->amount != 0)
                            <div class=" tajawal_black blog-details__content">
                                <h4 class=" tajawal_black title">
                                    {{ trans('web_trans.amount') }}: {{ $Product->amount }}
                                </h4>
                            </div>
                            <br>
                            <div class=" tajawal_black btn-box animate-2">
                                <a href="javascript:void(0);" class=" tajawal_black theme-btn btn-style-one hover-light" id="expandButton">
                                    <span class=" tajawal_black btn-title">
                                        {{ trans('web_trans.order_now') }}
                                    </span>
                                </a>
                            </div>
                            <div id="formContainer" style="display: none;">
                                <form action="{{ route('siteProductOrder') }}" method="post" id="order-form">
                                    @csrf
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }} *</label>
                                        <input type="text" name="name" class=" tajawal_black form-control" required=""
                                            autocomplete="off" required>
                                        @error('name')
                                            @foreach ($errors->get('name') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                        <input type="hidden" name="product_id" required="" value="{{ $Product->id }}">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.email') }} *</label>
                                        <input type="text" name="email" class=" tajawal_black form-control" required=""
                                            autocomplete="off" required>
                                        @error('email')
                                            @foreach ($errors->get('email') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>

                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.phone') }} *</label>
                                        <input type="text" name="phone" class=" tajawal_black form-control" required=""
                                            autocomplete="off" required>
                                        @error('phone')
                                            @foreach ($errors->get('phone') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.amount') }} *</label>
                                        <input type="number" name="quantity" class=" tajawal_black form-control" required=""
                                            max="{{ $Product->amount }}" autocomplete="off" required>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <button type="submit"
                                            class=" tajawal_black theme-btn btn-style-one hover-light">{{ trans('web_trans.submit_btn') }}</button>
                                    </div>
                                </form>
                            </div>
                        @else
                            <div class=" tajawal_black blog-details__content">
                                <h4 class=" tajawal_black title" style="color: red">
                                    {{ trans('web_trans.out_of_stock') }}
                                </h4>
                            </div>
                        @endif


                    </div>
                </div>

                <div class=" tajawal_black col-xl-4 col-lg-5">
                    <div class=" tajawal_black sidebar">
                        <div class=" tajawal_black sidebar__single sidebar__category">
                            <h3 class=" tajawal_black sidebar__title mb-20">{{ trans('web_trans.categories') }}</h3>
                            <ul class=" tajawal_black sidebar__category-list list-unstyled">
                                @foreach ($Caregories as $Caregory)
                                    <li>
                                        @if ($app->getLocale() == 'ar')
                                            <a
                                                href="{{ route('siteCustomProductCategory', ['slug' => $Caregory->slug_ar]) }}">{{ $Caregory->name_ar }}<span
                                                    class=" tajawal_black icon-right-arrow"></span></a>
                                        @else
                                            <a
                                                href="{{ route('siteCustomProductCategory', ['slug' => $Caregory->slug]) }}">{{ $Caregory->name }}<span
                                                    class=" tajawal_black icon-right-arrow"></span></a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#expandButton').click(function() {
                $('#formContainer').toggle();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#order-form').submit(function(event) {
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
