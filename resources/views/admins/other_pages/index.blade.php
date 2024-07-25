@extends('layouts.master')
@section('title')
    {{ trans('web_trans.other_pages') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.other_pages') }}</h1>
        </div>


        <div class=" tajawal_black card shadow mb-4 t-left">
            <div class=" tajawal_black card-body">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black col-xl-3 col-lg-4 col-md-5 col-sm-12">
                        <ul class=" tajawal_black nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link active" id="tab__about" data-bs-toggle="pill" href="#item__about"
                                    role="tab" aria-controls="item__about"
                                    aria-selected="true">{{ trans('web_trans.about') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__team_members" data-bs-toggle="pill" href="#item__team_members"
                                    role="tab" aria-controls="item__team_members" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.team_members') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__testimonials" data-bs-toggle="pill" href="#item__testimonials"
                                    role="tab" aria-controls="item__testimonials" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.testimonials') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__pricing" data-bs-toggle="pill" href="#item__pricing"
                                    role="tab" aria-controls="item__pricing" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.pricing') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__faq" data-bs-toggle="pill" href="#item__faq" role="tab"
                                    aria-controls="item__faq" aria-selected="false" tabindex="-1">FAQ</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__services" data-bs-toggle="pill" href="#item__services"
                                    role="tab" aria-controls="item__services" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.Services') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__portfolios" data-bs-toggle="pill" href="#item__portfolios"
                                    role="tab" aria-controls="item__portfolios" aria-selected="false"
                                    tabindex="-1">Portfolios</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__blog" data-bs-toggle="pill" href="#item__blog" role="tab"
                                    aria-controls="item__blog" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.blog') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__contact" data-bs-toggle="pill" href="#item__contact"
                                    role="tab" aria-controls="item__contact" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.contact') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__terms" data-bs-toggle="pill" href="#item__terms"
                                    role="tab" aria-controls="item__terms" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.terms') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__privacy" data-bs-toggle="pill" href="#item__privacy"
                                    role="tab" aria-controls="item__privacy" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.privacy') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__search" data-bs-toggle="pill" href="#item__search"
                                    role="tab" aria-controls="item__search" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.search') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__tag" data-bs-toggle="pill" href="#item__tag"
                                    role="tab" aria-controls="item__tag" aria-selected="false"
                                    tabindex="-1">{{ trans('web_trans.tags') }}</a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__custom_page" data-bs-toggle="pill"
                                    href="#item__custom_page" role="tab" aria-controls="item__custom_page"
                                    aria-selected="false" tabindex="-1">{{ trans('web_trans.custom_page') }}</a>
                            </li>
                        </ul>
                    </div>

                    <div class=" tajawal_black col-xl-9 col-lg-8 col-md-7 col-sm-12">
                        <div class=" tajawal_black tab-content" id="v-pills-tabContent">
                            {{-- About --}}
                            <div class=" tajawal_black tab-pane fade active show" id="item__about" role="tabpanel"
                                aria-labelledby="tab__about">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">

                                        <form action="{{ route('dash.other.page.about.update') }}" method="post"
                                            enctype="multipart/form-data" id="about_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_about_title" class=" tajawal_black form-control"
                                                    value="{{ $About->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_about_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $About->title_ar }}" autocomplete="off">
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.welcome_one') }}</label>
                                                <select name="page_about_welcome_status" class=" tajawal_black form-select"
                                                    autocomplete="off">
                                                    <option value="1"
                                                        {{ $About->welcome_one_status == 1 ? 'selected' : '' }}>Show
                                                    </option>
                                                    <option value="0"
                                                        {{ $About->welcome_one_status == 0 ? 'selected' : '' }}>Hide
                                                    </option>
                                                </select>
                                            </div>


                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_service_heading"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.Services') }} -
                                                    {{ trans('web_trans.heading') }}</label>
                                                <textarea name="page_about_service_heading" id="page_about_service_heading" class=" tajawal_black form-control h_100"
                                                    cols="30" rows="10" autocomplete="off">{{ $About->service_heading }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_service_heading_ar"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.Services') }} -
                                                    {{ trans('web_trans.heading_ar') }}</label>
                                                <textarea name="page_about_service_heading_ar" id="page_about_service_heading_ar" class=" tajawal_black form-control h_100"
                                                    cols="30" rows="10" autocomplete="off">{{ $About->service_heading_ar }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_service_subheading"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.Services') }} -
                                                    {{ trans('web_trans.subheading') }}</label>
                                                <input type="text" name="page_about_service_subheading"
                                                    id="page_about_service_subheading" class=" tajawal_black form-control"
                                                    value="{{ $About->service_subheading }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_service_subheading"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.Services') }} -
                                                    {{ trans('web_trans.subheading_ar') }}</label>
                                                <input type="text" name="page_about_service_subheading_ar"
                                                    id="page_about_service_subheading_ar" class=" tajawal_black form-control"
                                                    value="{{ $About->service_subheading_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_service_text"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.Services') }} -
                                                    {{ trans('web_trans.text') }}</label>
                                                <textarea name="page_about_service_text" id="page_about_service_text" class=" tajawal_black form-control h_100" cols="30"
                                                    rows="10" autocomplete="off">{{ $About->service_text }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_service_text_ar"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.Services') }} -
                                                    {{ trans('web_trans.text_ar') }}</label>
                                                <textarea name="page_about_service_text_ar" id="page_about_service_text_ar" class=" tajawal_black form-control h_100"
                                                    cols="30" rows="10" autocomplete="off">{{ $About->service_text_ar }}</textarea>
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_service_how_many"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.Services') }} -
                                                    {{ trans('web_trans.how_many') }}</label>
                                                <input type="text" name="page_about_service_how_many"
                                                    id="page_about_service_how_many" class=" tajawal_black form-control"
                                                    value="{{ $About->how_many_service }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_service_status"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.Services') }} -
                                                    {{ trans('web_trans.status') }}</label>
                                                <select name="page_about_service_status" id="page_about_service_status"
                                                    class=" tajawal_black form-select" autocomplete="off">
                                                    <option
                                                        value="1"{{ $About->service_status === 1 ? 'selected' : '' }}>
                                                        Show</option>
                                                    <option value="0"
                                                        {{ $About->service_status === 0 ? 'selected' : '' }}>Hide</option>
                                                </select>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_team_members_heading"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.team_members') }} -
                                                    {{ trans('web_trans.heading') }}</label>
                                                <textarea name="page_about_team_members_heading" id="page_about_team_members_heading" class=" tajawal_black form-control h_100"
                                                    cols="30" rows="10" autocomplete="off">{{ $About->team_member_heading }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_team_members_heading_ar"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.team_members') }} -
                                                    {{ trans('web_trans.heading_ar') }}</label>
                                                <textarea name="page_about_team_members_heading_ar" id="page_about_team_members_heading_ar"
                                                    class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $About->team_member_heading_ar }}</textarea>
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_team_members_subheading"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.team_members') }} -
                                                    {{ trans('web_trans.subheading') }}</label>
                                                <input type="text" name="page_about_team_members_subheading"
                                                    id="page_about_team_members_subheading" class=" tajawal_black form-control"
                                                    value="{{ $About->team_member_subheading }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_team_members_subheading_ar"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.team_members') }} -
                                                    {{ trans('web_trans.subheading_ar') }}</label>
                                                <input type="text" name="page_about_team_members_subheading_ar"
                                                    id="page_about_team_members_subheading_ar" class=" tajawal_black form-control"
                                                    value="{{ $About->team_member_subheading_ar }}" autocomplete="off">
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_team_members_how_many"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.team_members') }} -
                                                    {{ trans('web_trans.how_many') }}</label>
                                                <input type="text" name="page_about_team_members_how_many"
                                                    id="page_about_team_members_how_many" class=" tajawal_black form-control"
                                                    value="{{ $About->how_many_team_member }}" autocomplete="off">
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_team_members_status"
                                                    class=" tajawal_black form-label">{{ trans('web_trans.team_members') }} -
                                                    {{ trans('web_trans.status') }}</label>
                                                <select name="page_about_team_members_status"
                                                    id="page_about_team_members_status" class=" tajawal_black form-select"
                                                    autocomplete="off">
                                                    <option value="1"
                                                        {{ $About->team_member_status === 1 ? 'selected' : '' }}>Show
                                                    </option>
                                                    <option value="0"
                                                        {{ $About->team_member_status === 0 ? 'selected' : '' }}>Hide
                                                    </option>
                                                </select>
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_seo_title" class=" tajawal_black form-label">Seo
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_about_seo_title"
                                                    id="page_about_seo_title" class=" tajawal_black form-control"
                                                    value="{{ $About->seo_title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_seo_title_ar" class=" tajawal_black form-label">Seo
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_about_seo_title_ar"
                                                    id="page_about_seo_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $About->seo_title_ar }}" autocomplete="off">
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_seo_meta_description" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}
                                                </label>
                                                <textarea name="page_about_seo_meta_description" id="page_about_seo_meta_description" class=" tajawal_black form-control h_70"
                                                    cols="30" rows="10" autocomplete="off">{{ $About->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_about_seo_meta_description_ar" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}
                                                </label>
                                                <textarea name="page_about_seo_meta_description_ar" id="page_about_seo_meta_description_ar" class=" tajawal_black form-control h_70"
                                                    cols="30" rows="10" autocomplete="off">{{ $About->seo_descr_ar }}</textarea>
                                            </div>

                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>


                                    </div>
                                </div>
                            </div>

                            {{-- Team Member --}}
                            <div class=" tajawal_black tab-pane fade" id="item__team_members" role="tabpanel"
                                aria-labelledby="tab__team_members">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.team.update') }}" method="post"
                                            id="team_member_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_team_members_title" class=" tajawal_black form-control"
                                                    value="{{ $TeamMember->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_team_members_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $TeamMember->title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_team_members_seo_title"
                                                    class=" tajawal_black form-control" value="{{ $TeamMember->seo_title }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_team_members_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $TeamMember->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_team_members_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $TeamMember->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_team_members_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $TeamMember->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            {{-- Testimonial --}}
                            <div class=" tajawal_black tab-pane fade" id="item__testimonials" role="tabpanel"
                                aria-labelledby="tab__testimonials">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.testimonial.update') }}" method="post"
                                            id="testimonial_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_testimonials_title" class=" tajawal_black form-control"
                                                    value="{{ $Testimonial->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_testimonials_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Testimonial->title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_testimonials_seo_title"
                                                    class=" tajawal_black form-control" value="{{ $Testimonial->seo_title }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_testimonials_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Testimonial->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_testimonials_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Testimonial->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_testimonials_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Testimonial->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            {{-- Pricing --}}
                            <div class=" tajawal_black tab-pane fade" id="item__pricing" role="tabpanel"
                                aria-labelledby="tab__pricing">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.pricing.update') }}" method="post"
                                            id="pricing_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_pricing_title" class=" tajawal_black form-control"
                                                    value="{{ $Pricing->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_pricing_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $Pricing->title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_pricing_seo_title" class=" tajawal_black form-control"
                                                    value="{{ $Pricing->seo_title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_pricing_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Pricing->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_pricing_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Pricing->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_pricing_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Pricing->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            {{-- FAQ --}}
                            <div class=" tajawal_black tab-pane fade" id="item__faq" role="tabpanel" aria-labelledby="tab__faq"
                                id="faq_form">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.FAQ.update') }}" method="post"
                                            id="faq_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_faq_title" class=" tajawal_black form-control"
                                                    value="{{ $FAQ->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_faq_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $FAQ->title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_faq_seo_title" class=" tajawal_black form-control"
                                                    value="{{ $FAQ->seo_title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_faq_seo_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $FAQ->seo_title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_faq_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $FAQ->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_faq_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $FAQ->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            {{-- Service --}}
                            <div class=" tajawal_black tab-pane fade" id="item__services" role="tabpanel"
                                aria-labelledby="tab__services">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.service.update') }}" method="post"
                                            id="service_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_services_title" class=" tajawal_black form-control"
                                                    value="{{ $Service->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_services_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $Service->title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_services_seo_title" class=" tajawal_black form-control"
                                                    value="{{ $Service->seo_title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_services_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Service->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_services_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Service->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_services_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Service->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Porfolio --}}
                            <div class=" tajawal_black tab-pane fade" id="item__portfolios" role="tabpanel"
                                aria-labelledby="tab__portfolios">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.portfolio.update') }}" method="post"
                                            id="portfolio_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_portfolios_title" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_portfolios_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Portfolio->title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_portfolios_seo_title"
                                                    class=" tajawal_black form-control" value="{{ $Portfolio->seo_title }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_portfolios_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Portfolio->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_portfolios_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Portfolio->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_portfolios_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Portfolio->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Blog --}}
                            <div class=" tajawal_black tab-pane fade" id="item__blog" role="tabpanel" aria-labelledby="tab__blog">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.blog.update') }}" method="post"
                                            id="blog_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_blog_title" class=" tajawal_black form-control"
                                                    value="{{ $Blog->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_blog_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $Blog->title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_blog_seo_title" class=" tajawal_black form-control"
                                                    value="{{ $Blog->seo_title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_blog_seo_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $Blog->seo_title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_blog_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Blog->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_blog_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Blog->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Contact --}}
                            <div class=" tajawal_black tab-pane fade" id="item__contact" role="tabpanel"
                                aria-labelledby="tab__contact">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.contact.update') }}" method="post"
                                            id="contact_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_contact_title" class=" tajawal_black form-control"
                                                    value="{{ $Contact->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_contact_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $Contact->title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black row">
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.send_mail_heading') }}</label>
                                                        <input type="text" name="page_contact_send_mail_heading"
                                                            class=" tajawal_black form-control"
                                                            value="{{ $Contact->send_mail_heading }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.send_mail_heading_ar') }}</label>
                                                        <input type="text" name="page_contact_send_mail_heading_ar"
                                                            class=" tajawal_black form-control"
                                                            value="{{ $Contact->send_mail_heading_ar }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.send_mail_subheading') }}</label>
                                                        <input type="text" name="page_contact_send_mail_subheading"
                                                            class=" tajawal_black form-control"
                                                            value="{{ $Contact->send_mail_subheading }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.send_mail_subheading_ar') }}</label>
                                                        <input type="text" name="page_contact_send_mail_subheading_ar"
                                                            class=" tajawal_black form-control"
                                                            value="{{ $Contact->send_mail_subheading_ar }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" tajawal_black row">
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_heading') }}</label>
                                                        <input type="text" name="page_contact_info_heading"
                                                            class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_heading }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_heading_ar') }}</label>
                                                        <input type="text" name="page_contact_info_heading_ar"
                                                            class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_heading_ar }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_subheading') }}</label>
                                                        <input type="text" name="page_contact_info_subheading"
                                                            class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_subheading }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_subheading_ar') }}</label>
                                                        <input type="text" name="page_contact_info_subheading_ar"
                                                            class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_subheading_ar }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.information_text') }}</label>
                                                <textarea name="page_contact_info_text" class=" tajawal_black form-control h_100" cols="30" rows="10"
                                                    autocomplete="off">{{ $Contact->information_text }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.information_text_ar') }}</label>
                                                <textarea name="page_contact_info_text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10"
                                                    autocomplete="off">{{ $Contact->information_text_ar }}</textarea>
                                            </div>

                                            <div class=" tajawal_black row">
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_phone_title"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_phone_title') }}</label>
                                                        <input type="text" name="page_contact_info_phone_title"
                                                            id="page_contact_info_phone_title" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_phone_title }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_phone_title"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_phone_title_ar') }}</label>
                                                        <input type="text" name="page_contact_info_phone_title_ar"
                                                            id="page_contact_info_phone_title_ar" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_phone_title_ar }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-12">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_phone_value"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_phone_value') }}</label>
                                                        <input type="text" name="page_contact_info_phone_value"
                                                            id="page_contact_info_phone_value" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_phone_value }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" tajawal_black row">
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_email_title"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_email_title') }}</label>
                                                        <input type="text" name="page_contact_info_email_title"
                                                            id="page_contact_info_email_title" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_email_title }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_email_title"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_email_title_ar') }}</label>
                                                        <input type="text" name="page_contact_info_email_title_ar"
                                                            id="page_contact_info_email_title_ar" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_email_title_ar }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-12">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_email_value"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_email_value') }}</label>
                                                        <input type="text" name="page_contact_info_email_value"
                                                            id="page_contact_info_email_value" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_email_value }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" tajawal_black row">
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_address_title"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_address_title') }}</label>
                                                        <input type="text" name="page_contact_info_address_title"
                                                            id="page_contact_info_address_title" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_address_title }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_address_title_ar"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_address_title_ar') }}</label>
                                                        <input type="text" name="page_contact_info_address_title_ar"
                                                            id="page_contact_info_address_title_ar" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_address_title_ar }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_address_value"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_address_value') }}</label>
                                                        <input type="text" name="page_contact_info_address_value"
                                                            id="page_contact_info_address_value" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_address_value }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-6">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="page_contact_info_address_value_ar"
                                                            class=" tajawal_black form-label">{{ trans('web_trans.information_address_value_ar') }}</label>
                                                        <input type="text" name="page_contact_info_address_value_ar"
                                                            id="page_contact_info_address_value_ar" class=" tajawal_black form-control"
                                                            value="{{ $Contact->information_address_value_ar }}"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <label for="page_contact_seo_title" class=" tajawal_black form-label">seo
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_contact_seo_title"
                                                    id="page_contact_seo_title" class=" tajawal_black form-control"
                                                    value="{{ $Contact->seo_title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_contact_seo_title_ar" class=" tajawal_black form-label">Seo
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_contact_seo_title_ar"
                                                    id="page_contact_seo_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $Contact->seo_title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_contact_seo_meta_description" class=" tajawal_black form-label">Seo
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_contact_seo_meta_description" id="page_contact_seo_meta_description"
                                                    class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off">{{ $Contact->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="page_contact_seo_meta_description_ar" class=" tajawal_black form-label">Seo
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_contact_seo_meta_description_ar" id="page_contact_seo_meta_description_ar"
                                                    class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off">{{ $Contact->seo_descr_ar }}</textarea>
                                            </div>

                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Term --}}
                            <div class=" tajawal_black tab-pane fade" id="item__terms" role="tabpanel"
                                aria-labelledby="tab__terms">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 gap-1">
                                        <form action="{{ route('dash.other.page.term.update') }}" method="post"
                                            id="term_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_terms_title" class=" tajawal_black form-control"
                                                    value="{{ $Term->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_terms_title_ar" class=" tajawal_black form-control"
                                                    value="{{ $Term->title_ar }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.content') }}</label>
                                                <textarea name="page_terms_content" class=" tajawal_black form-control editor" cols="30" rows="10"
                                                    autocomplete="off" id="mce_0">{{ $Term->content }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.content_ar') }}</label>
                                                <textarea name="page_terms_content_ar" class=" tajawal_black form-control editor" cols="30" rows="10"
                                                    autocomplete="off" id="mce_0">{{ $Term->content_ar }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_terms_seo_title" class=" tajawal_black form-control"
                                                    value="{{ $Term->seo_title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_terms_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Term->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_terms_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Term->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_terms_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Term->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            {{-- Privacy --}}
                            <div class=" tajawal_black tab-pane fade" id="item__privacy" role="tabpanel"
                                aria-labelledby="tab__privacy">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.privacy.update') }}" method="post"
                                            id="privacy_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_privacy_title" class=" tajawal_black form-control"
                                                    value="{{ $Privacy->title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_privacy_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Privacy->title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.content') }}</label>
                                                <textarea name="page_privacy_content" class=" tajawal_black form-control editor" cols="30" rows="10"
                                                    autocomplete="off" id="mce_2">{{ $Privacy->content }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.content_ar') }}</label>
                                                <textarea name="page_privacy_content_ar" class=" tajawal_black form-control editor" cols="30" rows="10"
                                                    autocomplete="off" id="mce_2">{{ $Privacy->content_ar }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_privacy_seo_title"
                                                    class=" tajawal_black form-control" value="{{ $Privacy->seo_title }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_privacy_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Privacy->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO Meta
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_privacy_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Privacy->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO Meta
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_privacy_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Privacy->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            {{-- Search --}}
                            <div class=" tajawal_black tab-pane fade" id="item__search" role="tabpanel"
                                aria-labelledby="tab__search">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.search.update') }}" method="post"
                                            id="search_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_search_seo_title"
                                                    class=" tajawal_black form-control" value="{{ $Search->seo_title }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_search_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Search->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_search_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Search->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_search_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Search->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Tag --}}
                            <div class=" tajawal_black tab-pane fade" id="item__tag" role="tabpanel" aria-labelledby="tab__tag">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <form action="{{ route('dash.other.page.tag.update') }}" method="post"
                                            id="tag_form">
                                            @csrf
                                            @method('PUT')
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title') }}</label>
                                                <input type="text" name="page_tag_seo_title" class=" tajawal_black form-control"
                                                    value="{{ $Tag->seo_title }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.title_ar') }}</label>
                                                <input type="text" name="page_tag_seo_title_ar"
                                                    class=" tajawal_black form-control" value="{{ $Tag->seo_title_ar }}"
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description') }}</label>
                                                <textarea name="page_tag_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Tag->seo_descr }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">SEO
                                                    {{ trans('web_trans.description_ar') }}</label>
                                                <textarea name="page_tag_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10"
                                                    autocomplete="off">{{ $Tag->seo_descr_ar }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- Custom Page --}}
                            <div class=" tajawal_black tab-pane fade" id="item__custom_page" role="tabpanel"
                                aria-labelledby="tab__custom_page">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 gap-1">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#add_modal"
                                            class=" tajawal_black d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm mb_30"><i
                                                class=" tajawal_black fas fa-plus"></i> {{ trans('web_trans.add_item_btn') }}
                                        </a>
                                        <!-- Modal -->
                                        <div class=" tajawal_black modal fade" id="add_modal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class=" tajawal_black modal-dialog modal-xl modal-dialog-centered">
                                                <div class=" tajawal_black modal-content">
                                                    <div class=" tajawal_black modal-header">
                                                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                                                            {{ trans('web_trans.add_item_btn') }}
                                                        </h1>
                                                        <button type="button" class=" tajawal_black btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class=" tajawal_black modal-body">
                                                        <form action="{{ route('dash.other.page.custom.store') }}"
                                                            method="post">
                                                            @csrf
                                                            <div class=" tajawal_black row">
                                                                <div class=" tajawal_black col-md-6">
                                                                    <div class=" tajawal_black mb-3">
                                                                        <label for=""
                                                                            class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                                            *</label>
                                                                        <input type="text" name="name"
                                                                            class=" tajawal_black form-control" value=""
                                                                            autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class=" tajawal_black col-md-6">
                                                                    <div class=" tajawal_black mb-3">
                                                                        <label for=""
                                                                            class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}
                                                                            *</label>
                                                                        <input type="text" name="name_ar"
                                                                            class=" tajawal_black form-control" value=""
                                                                            autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class=" tajawal_black col-md-6">
                                                                    <div class=" tajawal_black mb-3">
                                                                        <label for=""
                                                                            class=" tajawal_black form-label">Slug*</label>
                                                                        <input type="text" name="slug"
                                                                            class=" tajawal_black form-control" value=""
                                                                            autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class=" tajawal_black col-md-6">
                                                                    <div class=" tajawal_black mb-3">
                                                                        <label for="" class=" tajawal_black form-label">Arabic
                                                                            Slug*</label>
                                                                        <input type="text" name="slug_ar"
                                                                            class=" tajawal_black form-control" value=""
                                                                            autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=" tajawal_black mb-3">
                                                                <label for=""
                                                                    class=" tajawal_black form-label">{{ trans('web_trans.content') }}*</label>
                                                                <textarea name="content" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off"
                                                                    id="mce_3"></textarea>

                                                            </div>
                                                            <div class=" tajawal_black mb-3">
                                                                <label for=""
                                                                    class=" tajawal_black form-label">{{ trans('web_trans.content_ar') }}*</label>
                                                                <textarea name="content_ar" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off"
                                                                    id="mce_3"></textarea>

                                                            </div>
                                                            <div class=" tajawal_black mb-3">
                                                                <label for="" class=" tajawal_black form-label">SEO
                                                                    {{ trans('web_trans.title') }}</label>
                                                                <input type="text" name="seo_title"
                                                                    class=" tajawal_black form-control" value=""
                                                                    autocomplete="off">
                                                            </div>
                                                            <div class=" tajawal_black mb-3">
                                                                <label for="" class=" tajawal_black form-label">SEO
                                                                    {{ trans('web_trans.title_ar') }}</label>
                                                                <input type="text" name="seo_title_ar"
                                                                    class=" tajawal_black form-control" value=""
                                                                    autocomplete="off">
                                                            </div>
                                                            <div class=" tajawal_black mb-3">
                                                                <label for="" class=" tajawal_black form-label">SEO
                                                                    {{ trans('web_trans.description') }}</label>
                                                                <textarea name="seo_meta_description" class=" tajawal_black form-control h_100" cols="30" rows="10"
                                                                    autocomplete="off"></textarea>
                                                            </div>
                                                            <div class=" tajawal_black mb-3">
                                                                <label for="" class=" tajawal_black form-label">SEO
                                                                    {{ trans('web_trans.description_ar') }}</label>
                                                                <textarea name="seo_meta_description_ar" class=" tajawal_black form-control h_100" cols="30" rows="10"
                                                                    autocomplete="off"></textarea>
                                                            </div>
                                                            <button type="submit"
                                                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.submit_btn') }}</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- // Modal -->
                                        <div class=" tajawal_black table-responsive">
                                            <div class=" tajawal_black modal fade" id="edit_modal_1" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class=" tajawal_black modal-dialog modal-xl modal-dialog-centered">
                                                    <div class=" tajawal_black modal-content">
                                                        <div class=" tajawal_black modal-header">
                                                            <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                                                                {{ trans('web_trans.update_btn') }}</h1>
                                                            <button type="button" class=" tajawal_black btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class=" tajawal_black modal-body">
                                                            <form action="{{ route('dash.other.page.custom.update') }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="update_id" value="">
                                                                <div class=" tajawal_black row">
                                                                    <div class=" tajawal_black col-md-6">
                                                                        <div class=" tajawal_black mb-3">
                                                                            <label for=""
                                                                                class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                                                *</label>
                                                                            <input type="text" name="name"
                                                                                class=" tajawal_black form-control" value=""
                                                                                autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" tajawal_black col-md-6">
                                                                        <div class=" tajawal_black mb-3">
                                                                            <label for=""
                                                                                class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}
                                                                                *</label>
                                                                            <input type="text" name="name_ar"
                                                                                class=" tajawal_black form-control" value=""
                                                                                autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" tajawal_black col-md-6">
                                                                        <div class=" tajawal_black mb-3">
                                                                            <label for=""
                                                                                class=" tajawal_black form-label">Slug*</label>
                                                                            <input type="text" name="slug"
                                                                                class=" tajawal_black form-control" value=""
                                                                                autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                    <div class=" tajawal_black col-md-6">
                                                                        <div class=" tajawal_black mb-3">
                                                                            <label for=""
                                                                                class=" tajawal_black form-label">Arabic Slug*</label>
                                                                            <input type="text" name="slug_ar"
                                                                                class=" tajawal_black form-control" value=""
                                                                                autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" tajawal_black mb-3">
                                                                    <label for=""
                                                                        class=" tajawal_black form-label">{{ trans('web_trans.content') }}*</label>
                                                                    <textarea name="content_update" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off"
                                                                        ></textarea>
                                                                </div>
                                                                <div class=" tajawal_black mb-3">
                                                                    <label for=""
                                                                        class=" tajawal_black form-label">{{ trans('web_trans.content_ar') }}*</label>
                                                                    <textarea name="content_update_ar" class=" tajawal_black form-control editor" cols="30" rows="10"
                                                                        autocomplete="off"></textarea>
                                                                </div>
                                                                <div class=" tajawal_black mb-3">
                                                                    <label for="" class=" tajawal_black form-label">SEO
                                                                        {{ trans('web_trans.title') }}</label>
                                                                    <input type="text" name="seo_title"
                                                                        class=" tajawal_black form-control" value=""
                                                                        autocomplete="off">
                                                                </div>
                                                                <div class=" tajawal_black mb-3">
                                                                    <label for="" class=" tajawal_black form-label">SEO
                                                                        {{ trans('web_trans.title_ar') }}</label>
                                                                    <input type="text" name="seo_title_ar"
                                                                        class=" tajawal_black form-control" value=""
                                                                        autocomplete="off">
                                                                </div>
                                                                <div class=" tajawal_black mb-3">
                                                                    <label for="" class=" tajawal_black form-label">SEO
                                                                        {{ trans('web_trans.description') }}</label>
                                                                    <textarea name="seo_meta_description" class=" tajawal_black form-control h_100" cols="30" rows="10"
                                                                        autocomplete="off"></textarea>
                                                                </div>
                                                                <div class=" tajawal_black mb-3">
                                                                    <label for="" class=" tajawal_black form-label">SEO
                                                                        {{ trans('web_trans.description_ar') }}</label>
                                                                    <textarea name="seo_meta_description_ar" class=" tajawal_black form-control h_100" cols="30" rows="10"
                                                                        autocomplete="off"></textarea>
                                                                </div>
                                                                <div class=" tajawal_black mb-3">
                                                                    <button type="submit"
                                                                        class=" tajawal_black btn btn-primary btn-sm">{{ trans('web_trans.update_btn') }}</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="dtable_wrapper" class=" tajawal_black dataTables_wrapper dt-bootstrap5 no-footer">

                                                <div class=" tajawal_black row dt-row">
                                                    <div class=" tajawal_black col-sm-12">
                                                        <table class=" tajawal_black table table-bordered table-sm dataTable no-footer"
                                                            id="dtable" aria-describedby="dtable_info">
                                                            <thead>
                                                                <tr>
                                                                    <th class=" tajawal_black sorting sorting_asc" tabindex="0"
                                                                        aria-controls="dtable" rowspan="1"
                                                                        colspan="1" aria-sort="ascending"
                                                                        aria-label="SL: activate to sort column descending"
                                                                        style="width: 0px;">SL</th>
                                                                    <th class=" tajawal_black sorting" tabindex="0"
                                                                        aria-controls="dtable" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Name: activate to sort column ascending"
                                                                        style="width: 0px;">
                                                                        {{ trans('web_trans.name') }}</th>
                                                                    <th class=" tajawal_black sorting" tabindex="0"
                                                                        aria-controls="dtable" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Slug: activate to sort column ascending"
                                                                        style="width: 0px;">Slug</th>
                                                                    <th class=" tajawal_black sorting" tabindex="0"
                                                                        aria-controls="dtable" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Action: activate to sort column ascending"
                                                                        style="width: 0px;">
                                                                        {{ trans('web_trans.actions') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($CustomPages as $CustomPage)
                                                                    <tr class=" tajawal_black odd">
                                                                        <td class=" tajawal_black sorting_1">{{ $loop->iteration }}
                                                                        </td>
                                                                        <td>{{ $CustomPage->name }}</td>
                                                                        <td>{{ $CustomPage->slug }}</td>
                                                                        <td>
                                                                            <div class=" tajawal_black btn-group" role="group">

                                                                                <a href="" data-bs-toggle="modal"
                                                                                    data-bs-target="#edit_modal_1"
                                                                                    class=" tajawal_black btn btn-primary btn-sm edit-option"
                                                                                    data-name="{{ $CustomPage->name }}"
                                                                                    data-slug="{{ $CustomPage->slug }}"
                                                                                    data-content_update="{{ $CustomPage->content }}"
                                                                                    data-seo_title="{{ $CustomPage->seo_title }}"
                                                                                    data-seo_descr="{{ $CustomPage->seo_descr }}"
                                                                                    data-name_ar="{{ $CustomPage->name_ar }}"
                                                                                    data-slug_ar="{{ $CustomPage->slug_ar }}"
                                                                                    data-content_update_ar="{{ $CustomPage->content_ar }}"
                                                                                    data-seo_title_ar="{{ $CustomPage->seo_title_ar }}"
                                                                                    data-seo_descr_ar="{{ $CustomPage->seo_descr_ar }}"
                                                                                    data-id="{{ $CustomPage->id }}"><i
                                                                                        class=" tajawal_black fas fa-edit"></i></a>
                                                                                <span style="color: white">s</span>
                                                                                <form method="POST"
                                                                                    action="{{ route('dash.other.page.custom.delete', ['id' => $CustomPage->id]) }}">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class=" tajawal_black btn btn-danger btn-sm"
                                                                                        onclick="return confirm('{{ trans('web_trans.delete_sure_msg') }}')"><i
                                                                                            class=" tajawal_black fas fa-trash"></i></button>
                                                                                </form>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        tinymce.init({
            selector: 'textarea[name="page_terms_content"]',
            'textarea[name="page_terms_content_ar"]',
            'textarea[name="page_privacy_content"]',
            'textarea[name="page_privacy_content_ar"]',
            'textarea[name="content_update"]',
            'textarea[name="content_update_ar"]'
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'blocks| bold italic underline| link | align| numlist bullist | removeformat',
            menubar: false,
        });
    </script>




    <script>
        $(document).ready(function() {
            $('.edit-option').click(function() {
                var name = $(this).data('name');
                var slug = $(this).data('slug');
                var content_update = $(this).data('content_update');
                var seo_title = $(this).data('seo_title');
                var seo_descr = $(this).data('seo_descr');
                var name_ar = $(this).data('name_ar');
                var slug_ar = $(this).data('slug_ar');
                var content_update_ar = $(this).data('content_update_ar');
                var seo_title_ar = $(this).data('seo_title_ar');
                var seo_descr_ar = $(this).data('seo_descr_ar');
                var id = $(this).data('id');
                var modal = $('#edit_modal_1');


                modal.find('input[name="name"]').val(name);
                modal.find('input[name="slug"]').val(slug);
                modal.find('textarea[name="content_update"]').val(content_update);
                modal.find('input[name="seo_title"]').val(seo_title);
                modal.find('textarea[name="seo_meta_description"]').val(seo_descr);
                modal.find('input[name="name_ar"]').val(name_ar);
                modal.find('input[name="slug_ar"]').val(slug_ar);
                modal.find('textarea[name="content_update_ar"]').val(content_update_ar);
                modal.find('input[name="seo_title_ar"]').val(seo_title_ar);
                modal.find('textarea[name="seo_meta_description_ar"]').val(seo_descr_ar);
                modal.find('input[name="update_id"]').val(id);
            });
        });
    </script>
    <script>
        @if (session('success'))
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 5000, // Adjust the duration in milliseconds
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });

            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        @endif
    </script>
    <script>
        $(document).ready(function() {
            // Listen for changes in the name field
            $('input[name="name_ar"]').on('input', function() {
                // Get the value of the name field
                var nameValue = $(this).val();

                // Replace spaces with hyphens and keep Arabic characters
                var slugValue = nameValue.replace(/ /g, '-');

                // Update the slug field with the generated slug
                $('input[name="slug_ar"]').val(slugValue);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Listen for changes in the name field
            $('input[name="name"]').on('input', function() {
                // Get the value of the name field
                var nameValue = $(this).val();

                // Replace spaces with hyphens and keep Arabic characters
                var slugValue = nameValue.replace(/ /g, '-');

                // Update the slug field with the generated slug
                $('input[name="slug"]').val(slugValue);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#about_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.about.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#team_member_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.team.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#testimonial_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.testimonial.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#pricing_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.pricing.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#faq_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.FAQ.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#service_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.service.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#portfolio_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.portfolio.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#blog_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.blog.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#contact_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.contact.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#term_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.term.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#privacy_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.privacy.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#search_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.search.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });

            $('#tag_form').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('dash.other.page.tag.update') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000,
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
                                title: response.success
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
