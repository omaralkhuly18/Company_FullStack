@extends('layouts.master')
@section('title')
{{ trans('web_trans.settings') }}
@endsection

@section('css')
@endsection

@section('content')
<div class=" tajawal_black container-fluid">
    @if (session('success'))
    <h1 class=" tajawal_black h3 mb-0 text-gray-800">
        {{ trans('web_trans.edited_and_uploaded_successfully') }}
    </h1>
    @endif
    <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class=" tajawal_black h3 mb-0 text-gray-800">
            {{ trans('web_trans.settings') }}
        </h1>
    </div>

    <form id="updateSettingsForm" action="{{ route('dash.setting.update') }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class=" tajawal_black card shadow mb-4 t-left">
            <div class=" tajawal_black card-body">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black col-xl-3 col-lg-4 col-md-5 col-sm-12">
                        <ul class=" tajawal_black nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link active" id="tab__logo_favicon" data-bs-toggle="pill" href="#item__logo_favicon" role="tab" aria-controls="item__logo_favicon" aria-selected="true">
                                    {{trans('web_trans.logo_and_favicon')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__404" data-bs-toggle="pill" href="#item__404" role="tab" aria-controls="item__404" aria-selected="false" tabindex="-1">404
                                    {{trans('web_trans.page_photo')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__banner" data-bs-toggle="pill" href="#item__banner" role="tab" aria-controls="item__banner" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.banner')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__login_page_photo" data-bs-toggle="pill" href="#item__login_page_photo" role="tab" aria-controls="item__login_page_photo" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.login_page_photo')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__home_page" data-bs-toggle="pill" href="#item__home_page" role="tab" aria-controls="item__home_page" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.home_page_setup')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__social_media" data-bs-toggle="pill" href="#item__social_media" role="tab" aria-controls="item__social_media" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.social_media')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__top_bar" data-bs-toggle="pill" href="#item__top_bar" role="tab" aria-controls="item__top_bar" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.top_bar')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__footer" data-bs-toggle="pill" href="#item__footer" role="tab" aria-controls="item__footer" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.footer')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__map" data-bs-toggle="pill" href="#item__map" role="tab" aria-controls="item__map" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.map')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__cookie_consent" data-bs-toggle="pill" href="#item__cookie_consent" role="tab" aria-controls="item__cookie_consent" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.cookie_consent')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__google_analytic" data-bs-toggle="pill" href="#item__google_analytic" role="tab" aria-controls="item__google_analytic" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.google_nalytic')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__google_recaptcha" data-bs-toggle="pill" href="#item__google_recaptcha" role="tab" aria-controls="item__google_recaptcha" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.google_recaptcha')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__tawk_live_chat" data-bs-toggle="pill" href="#item__tawk_live_chat" role="tab" aria-controls="item__tawk_live_chat" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.tawk_live_chat')}}
                                </a>
                            </li>
                            <li class=" tajawal_black nav-item" role="presentation">
                                <a class=" tajawal_black nav-link" id="tab__other" data-bs-toggle="pill" href="#item__other" role="tab" aria-controls="item__other" aria-selected="false" tabindex="-1">
                                    {{trans('web_trans.other')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=" tajawal_black col-xl-9 col-lg-8 col-md-7 col-sm-12">
                        <div class=" tajawal_black tab-content" id="v-pills-tabContent">
                            <div class=" tajawal_black tab-pane fade active show" id="item__logo_favicon" role="tabpanel" aria-labelledby="tab__logo_favicon">


                                <table class=" tajawal_black table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class=" tajawal_black w_50_p">
                                                {{trans('web_trans.existing_logo')}}
                                            </td>
                                            <td>
                                                {{trans('web_trans.change_logo')}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="logoHeaderPreview" class=" tajawal_black text-center bg_eeeeee">
                                                <img src="{{ asset('assets/uploads/settings/logo/' . $Setting->logo) }}" alt="" class=" tajawal_black w_200">
                                            </td>
                                            <td>
                                                <label for="logoUpload" class=" tajawal_black tajawal_black btn btn-primary">
                                                    {{ trans('web_trans.upload_image') }}
                                                </label>
                                                <strong>
                                                    {{ trans('web_trans.or') }}
                                                </strong>
                                                <div class=" tajawal_black tajawal_black dragBox" ondragover="event.preventDefault();" ondrop="drop(event, 'logoHeaderPreview')">
                                                    {{ trans('web_trans.drag_and_drop_image_here') }}
                                                    <input type="file" name="logo" id="logoUpload" class=" tajawal_black tajawal_black hidden-input" onchange="dragNdrop(event, 'logoHeaderPreview')" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class=" tajawal_black table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class=" tajawal_black w_50_p">
                                                {{trans('web_trans.existing_logo_sticky')}}
                                            </td>
                                            <td>
                                                {{trans('web_trans.change_logo_sticky')}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="stickyLogoHeaderPreview" class=" tajawal_black text-center bg_eeeeee">
                                                <img src="{{ asset('assets/uploads/settings/logo/' . $Setting->sticky) }}" alt="" class=" tajawal_black w_200">

                                            </td>
                                            <td>
                                                <label for="stickyLogoHeaderUpload" class=" tajawal_black tajawal_black btn btn-primary">
                                                    {{ trans('web_trans.upload_image') }}
                                                </label>
                                                <strong>
                                                    {{ trans('web_trans.or') }}
                                                </strong>
                                                <div class=" tajawal_black tajawal_black dragBox" ondragover="event.preventDefault();" ondrop="drop(event, 'stickyLogoHeaderPreview')">
                                                    {{ trans('web_trans.drag_and_drop_image_here') }}
                                                    <input type="file" name="logo_sticky" id="stickyLogoHeaderUpload" class=" tajawal_black tajawal_black hidden-input" onchange="dragNdrop(event, 'stickyLogoHeaderPreview')" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class=" tajawal_black table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class=" tajawal_black w_50_p">
                                                {{trans('web_trans.existing_favicon')}}
                                            </td>
                                            <td>
                                                {{trans('web_trans.change_favicon')}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="faviconLogoHeaderPreview" class=" tajawal_black text-center bg_eeeeee">
                                                <img src="{{ asset('assets/uploads/settings/logo/' . $Setting->favicon) }}" alt="" class=" tajawal_black w_100">
                                            </td>
                                            <td>
                                                <label for="faviconLogoHeaderUpload" class=" tajawal_black tajawal_black btn btn-primary">
                                                    {{ trans('web_trans.upload_image') }}
                                                </label>
                                                <strong>
                                                    {{ trans('web_trans.or') }}
                                                </strong>
                                                <div class=" tajawal_black tajawal_black dragBox" ondragover="event.preventDefault();" ondrop="drop(event, 'faviconLogoHeaderPreview')">
                                                    {{ trans('web_trans.drag_and_drop_image_here') }}
                                                    <input type="file" name="favicon" id="faviconLogoHeaderUpload" class=" tajawal_black tajawal_black hidden-input" onchange="dragNdrop(event, 'faviconLogoHeaderPreview')" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class=" tajawal_black tab-pane fade" id="item__404" role="tabpanel" aria-labelledby="tab__404">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-6 col-md-12">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.existing_photo')}}
                                            </label>
                                            <div id="photo404Preview">
                                                <img src="{{ asset('assets/uploads/settings/404/' . $Setting->page404) }}" alt="" class=" tajawal_black w_200">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.change_photo')}}
                                            </label>
                                            <div>
                                                <label for="photo404Upload" class=" tajawal_black tajawal_black btn btn-primary">
                                                    {{ trans('web_trans.upload_image') }}
                                                </label>
                                                <strong>
                                                    {{ trans('web_trans.or') }}
                                                </strong>
                                                <div class=" tajawal_black tajawal_black dragBox" ondragover="event.preventDefault();" ondrop="drop(event, 'photo404Preview')">

                                                    {{ trans('web_trans.drag_and_drop_image_here') }}
                                                    <input type="file" name="image_404" id="photo404Upload" class=" tajawal_black tajawal_black hidden-input" onchange="dragNdrop(event, 'photo404Preview')" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class=" tajawal_black tab-pane fade" id="item__banner" role="tabpanel" aria-labelledby="tab__banner">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-6 col-md-12">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.existing_photo')}}
                                            </label>
                                            <div id="bannerPhotoPreview">
                                                <img src="{{ asset('assets/uploads/settings/banner/' . $Setting->banner) }}" alt="" class=" tajawal_black w_300">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.change_photo')}}
                                            </label>
                                            <div>
                                                <label for="bannerPhotoUpload" class=" tajawal_black tajawal_black btn btn-primary">
                                                    {{ trans('web_trans.upload_image') }}
                                                </label>
                                                <strong>
                                                    {{ trans('web_trans.or') }}
                                                </strong>
                                                <div class=" tajawal_black tajawal_black dragBox" ondragover="event.preventDefault();" ondrop="drop(event, 'bannerPhotoPreview')">

                                                    {{ trans('web_trans.drag_and_drop_image_here') }}
                                                    <input type="file" name="banner" id="bannerPhotoUpload" class=" tajawal_black tajawal_black hidden-input" onchange="dragNdrop(event, 'bannerPhotoPreview')" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class=" tajawal_black tab-pane fade" id="item__login_page_photo" role="tabpanel" aria-labelledby="tab__login_page_photo">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-6 col-md-12">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.existing_photo')}}
                                            </label>
                                            <div id="loginPhotoPreview">
                                                <img src="{{ asset('assets/uploads/settings/login/' . $Setting->login) }}" alt="" class=" tajawal_black w_300">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.change_photo')}}
                                            </label>
                                            <div>
                                                <label for="photoLoginUpload" class=" tajawal_black tajawal_black btn btn-primary">
                                                    {{ trans('web_trans.upload_image') }}
                                                </label>
                                                <strong>
                                                    {{ trans('web_trans.or') }}
                                                </strong>
                                                <div class=" tajawal_black tajawal_black dragBox" ondragover="event.preventDefault();" ondrop="drop(event, 'loginPhotoPreview')">

                                                    {{ trans('web_trans.drag_and_drop_image_here') }}
                                                    <input type="file" name="login" id="photoLoginUpload" class=" tajawal_black tajawal_black hidden-input" onchange="dragNdrop(event, 'loginPhotoPreview')" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class=" tajawal_black tab-pane fade" id="item__home_page" role="tabpanel" aria-labelledby="tab__home_page">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <label for="" class=" tajawal_black form-label">
                                            {{trans('web_trans.home_page_show')}}
                                        </label>
                                        <select name="home_show" class=" tajawal_black form-control select2 select2-hidden-accessible" autocomplete="off">
                                            <option value="Home 1" {{ $Setting->home_shown == 'Home 1' ? 'selected' : '' }}>
                                                {{trans('web_trans.home_1')}}
                                            </option>
                                            <option value="Home 2" {{ $Setting->home_shown == 'Home 2' ? 'selected' : '' }}>
                                                {{trans('web_trans.home_2')}}
                                            </option>
                                            <option value="Home 3" {{ $Setting->home_shown == 'Home 3' ? 'selected' : '' }}>
                                                {{trans('web_trans.home_3')}}
                                            </option>
                                            <option value="Home 4" {{ $Setting->home_shown == 'Home 4' ? 'selected' : '' }}>
                                                {{trans('web_trans.home_4')}}
                                            </option>
                                        </select>
                                    </div>

                                    <div class=" tajawal_black col-md-12">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">SEO {{trans('web_trans.title')}}</label>
                                            <input type="text" name="home_seo_title" class=" tajawal_black form-control" value="{{ $Setting->home_seo_title }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">SEO {{trans('web_trans.title_ar')}}</label>
                                            <input type="text" name="home_seo_title_ar" class=" tajawal_black form-control" value="{{ $Setting->home_seo_title_ar }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">SEO {{trans('web_trans.description')}}</label>
                                            <textarea name="home_seo_meta_description" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off">{{ $Setting->home_seo_descr }}</textarea>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">SEO {{trans('web_trans.description_ar')}}</label>
                                            <textarea name="home_seo_meta_description_ar" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off">{{ $Setting->home_seo_descr_ar }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class=" tajawal_black tab-pane fade" id="item__social_media" role="tabpanel" aria-labelledby="tab__social_media">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.facebook')}}
                                            </label>
                                            <input type="text" name="facebook" class=" tajawal_black form-control" value="{{ $Setting->facebook }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.twitter')}}
                                            </label>
                                            <input type="text" name="twitter" class=" tajawal_black form-control" value="{{ $Setting->twitter }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.linkedIn')}}
                                            </label>
                                            <input type="text" name="linkedin" class=" tajawal_black form-control" value="{{ $Setting->linkedin }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.instagram')}}
                                            </label>
                                            <input type="text" name="instagram" class=" tajawal_black form-control" value="{{ $Setting->instagram }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.youtube')}}
                                            </label>
                                            <input type="text" name="youtube" class=" tajawal_black form-control" value="{{ $Setting->youtube }}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.pinterest')}}
                                            </label>
                                            <input type="text" name="pinterest" class=" tajawal_black form-control" value="{{ $Setting->pintrest }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=" tajawal_black tab-pane fade" id="item__top_bar" role="tabpanel" aria-labelledby="tab__top_bar">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.email') }}</label>
                                            <input type="text" name="top_bar_email" class=" tajawal_black form-control" value="{{ $Setting->top_email }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.address') }}</label>
                                            <input type="text" name="top_bar_address" class=" tajawal_black form-control" value="{{ $Setting->top_address }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.address_ar') }}</label>
                                            <input type="text" name="top_bar_address_ar" class=" tajawal_black form-control" value="{{ $Setting->top_address_ar }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.phone') }}</label>
                                            <input type="text" name="top_bar_phone" class=" tajawal_black form-control" value="{{ $Setting->top_phone }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class=" tajawal_black tab-pane fade" id="item__footer" role="tabpanel" aria-labelledby="tab__footer">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.email') }}</label>
                                            <input type="text" name="footer_email" class=" tajawal_black form-control" value="{{ $Setting->footer_email }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.phone') }}</label>
                                            <input type="text" name="footer_phone" class=" tajawal_black form-control" value="{{ $Setting->footer_phone }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.address') }}</label>
                                            <input type="text" name="footer_address" class=" tajawal_black form-control" value="{{ $Setting->footer_address }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.address_ar') }}</label>
                                            <input type="text" name="footer_address_ar" class=" tajawal_black form-control" value="{{ $Setting->footer_address_ar }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.copyright_text') }}</label>
                                            <input type="text" name="footer_copyright" class=" tajawal_black form-control" value="{{ $Setting->footer_copyright }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.copyright_text_ar') }}</label>
                                            <input type="text" name="footer_copyright_ar" class=" tajawal_black form-control" value="{{ $Setting->footer_copyright_ar }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.text') }}</label>
                                            <textarea name="footer_text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Setting->footer_text }}</textarea>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.text_ar') }}</label>
                                            <textarea name="footer_text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Setting->footer_text_ar }}</textarea>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.links_heading') }}</label>
                                            <input type="text" name="footer_links_heading" class=" tajawal_black form-control" value="{{ $Setting->footer_links }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.links_heading_ar') }}</label>
                                            <input type="text" name="footer_links_heading_ar" class=" tajawal_black form-control" value="{{ $Setting->footer_links_ar }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subscriber_heading') }}</label>
                                            <input type="text" name="footer_subscriber_heading" class=" tajawal_black form-control" value="{{ $Setting->footer_subscriber }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subscriber_heading_ar') }}</label>
                                            <input type="text" name="footer_subscriber_heading_ar" class=" tajawal_black form-control" value="{{ $Setting->footer_subscriber_ar }}" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subscriber_text') }}</label>
                                            <textarea name="footer_subscriber_text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Setting->footer_subscriber_text }}</textarea>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subscriber_text_ar') }}</label>
                                            <textarea name="footer_subscriber_text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Setting->footer_subscriber_text_ar }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=" tajawal_black tab-pane fade" id="item__map" role="tabpanel" aria-labelledby="tab__map">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">iframe code</label>
                                            <textarea name="map" class=" tajawal_black form-control h_150" cols="30" rows="10" autocomplete="off">{{ $Setting->map }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=" tajawal_black tab-pane fade" id="item__cookie_consent" role="tabpanel" aria-labelledby="tab__cookie_consent">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-12 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.message')}}
                                            </label>
                                            <textarea name="cookie_consent_message" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off">{{ $Setting->cookie_message }}</textarea>
                                        </div>
                                        <div class=" tajawal_black row">
                                            <div class=" tajawal_black col-md-6">
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">
                                                        {{trans('web_trans.text_color')}}
                                                    </label>
                                                    <input type="text" name="cookie_consent_text_color" class=" tajawal_black form-control jscolor" value="{{ $Setting->cookie_text_color }}" autocomplete="off" style="background-image: none; background-color: rgb(248, 255, 237); color:{{ $Setting->cookie_text_color }}">
                                                </div>
                                            </div>
                                            <div class=" tajawal_black col-md-6">
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">
                                                        {{trans('web_trans.background_color')}}
                                                    </label>
                                                    <input type="text" name="cookie_consent_bg_color" class=" tajawal_black form-control jscolor" value="{{ $Setting->cookie_bg_color }}" autocomplete="off" style="background-image: none; background-color: {{ $Setting->cookie_bg_color }}; color: rgb(255, 255, 255);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" tajawal_black row">
                                            <div class=" tajawal_black col-md-6">
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">
                                                        {{trans('web_trans.button_text_color')}}
                                                    </label>
                                                    <input type="text" name="cookie_consent_button_text_color" class=" tajawal_black form-control jscolor" value="{{ $Setting->cookie_btn_text_color }}" autocomplete="off" style="background-image: none; background-color: rgb(0, 0, 0); color:{{ $Setting->cookie_btn_text_color }}">
                                                </div>
                                            </div>
                                            <div class=" tajawal_black col-md-6">
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">
                                                        {{trans('web_trans.button_background_color')}}
                                                    </label>
                                                    <input type="text" name="cookie_consent_button_bg_color" class=" tajawal_black form-control jscolor" value="{{ $Setting->cookie_btn_bg_color }}" autocomplete="off" style="background-image: none; background-color: {{ $Setting->cookie_btn_bg_color }}; color: rgb(0, 0, 0);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" tajawal_black row">
                                            <div class=" tajawal_black col-md-6">
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">
                                                        {{trans('web_trans.button_text')}}
                                                    </label>
                                                    <input type="text" name="cookie_consent_button_text" class=" tajawal_black form-control" value="{{ $Setting->cookie_btn_text }}" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class=" tajawal_black col-md-6">
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">
                                                        {{trans('web_trans.status')}}
                                                    </label>
                                                    <select name="cookie_consent_status" class=" tajawal_black form-select" autocomplete="off">
                                                        <option value="Show" {{ $Setting->cookie_status == 1 ? 'selected' : '' }}>
                                                            {{trans('web_trans.show')}}
                                                        </option>
                                                        <option value="Hide" {{ $Setting->cookie_status == 0 ? 'selected' : '' }}>
                                                            {{trans('web_trans.hide')}}
                                                        </option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=" tajawal_black tab-pane fade" id="item__google_analytic" role="tabpanel" aria-labelledby="tab__google_analytic">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">
                                            {{('web_trans.analytic_code')}}
                                        </label>
                                        <input type="text" name="google_analytic_id" class=" tajawal_black form-control" value="{{ $Setting->google_code }}" autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">
                                            {{trans('web_trans.status')}}
                                        </label>
                                        <select name="google_analytic_status" class=" tajawal_black form-select" autocomplete="off">
                                            <option value="Show" selected="" {{ $Setting->google_status == 1 ? 'selected' : '' }}>
                                                {{trans('web_trans.show')}}
                                            </option>
                                            <option value="Hide" {{ $Setting->google_status == 0 ? 'selected' : '' }}>
                                                {{trans('web_trans.hide')}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class=" tajawal_black tab-pane fade" id="item__google_recaptcha" role="tabpanel" aria-labelledby="tab__google_recaptcha">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">
                                            {{trans('web_trans.recaptcha_site_key')}}
                                        </label>
                                        <input type="text" name="google_recaptcha_site_key" class=" tajawal_black form-control" value="{{ $Setting->google_recabtcha }}" autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">
                                            {{trans('web_trans.status')}}
                                        </label>
                                        <select name="google_recaptcha_status" class=" tajawal_black form-select" autocomplete="off">
                                            <option value="Show" {{ $Setting->google_recabtcha_status == 1 ? 'selected' : '' }}>
                                                {{trans('web_trans.show')}}
                                            </option>
                                            <option value="Hide" {{ $Setting->google_recabtcha_status == 0 ? 'selected' : '' }}>
                                                {{trans('web_trans.hide')}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class=" tajawal_black tab-pane fade" id="item__tawk_live_chat" role="tabpanel" aria-labelledby="tab__tawk_live_chat">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">
                                            {{trans('web_trans.property_id')}}
                                        </label>
                                        <input type="text" name="tawk_live_chat_property_id" class=" tajawal_black form-control" value="{{ $Setting->livewire_id }}" autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">
                                            {{trans('web_trans.status')}}
                                        </label>
                                        <select name="tawk_live_chat_status" class=" tajawal_black form-select" autocomplete="off">
                                            <option value="Show" {{ $Setting->livewire_status == 1 ? 'selected' : '' }}>
                                                {{trans('web_trans.show')}}
                                            </option>
                                            <option value="Hide" {{ $Setting->livewire_status == 0 ? 'selected' : '' }}>
                                                {{trans('web_trans.hide')}}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class=" tajawal_black tab-pane fade" id="item__other" role="tabpanel" aria-labelledby="tab__other">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-lg-6 col-md-12 mb-3">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.sticky_header')}}
                                            </label>
                                            <select name="sticky_header" class=" tajawal_black form-select" autocomplete="off">
                                                <option value="Show" {{ $Setting->sticky_header == 1 ? 'selected' : '' }}>
                                                    {{trans('web_trans.show')}}
                                                </option>
                                                <option value="Hide" {{ $Setting->sticky_header == 0 ? 'selected' : '' }}>
                                                    {{trans('web_trans.hide')}}
                                                </option>
                                            </select>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.preloader')}}
                                            </label>
                                            <select name="preloader" class=" tajawal_black form-select" autocomplete="off">
                                                <option value="Show" {{ $Setting->preloader == 1 ? 'selected' : '' }}>
                                                    {{trans('web_trans.show')}}
                                                </option>
                                                <option value="Hide" {{ $Setting->preloader == 0 ? 'selected' : '' }}>
                                                    {{trans('web_trans.hide')}}
                                                </option>
                                            </select>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.layout_direction')}}
                                            </label>
                                            <select name="layout_direction" class=" tajawal_black form-select" autocomplete="off">
                                                <option value="LTR" {{ $Setting->layout_direction == 'LTR' ? 'selected' : '' }}>
                                                    {{trans('web_trans.ltr')}}
                                                </option>
                                                <option value="RTL" {{ $Setting->layout_direction == 'RTL' ? 'selected' : '' }}>
                                                    {{trans('web_trans.rtl')}}
                                                </option>
                                            </select>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.language')}}
                                            </label>
                                            <select name="language" class=" tajawal_black form-select" autocomplete="off">
                                                <option value="ar" {{ $Setting->language == 'ar' ? 'selected' : '' }}>{{trans('web_trans.ar')}}
                                                </option>
                                                <option value="en" {{ $Setting->language == 'en' ? 'selected' : '' }}>{{trans('web_trans.en')}}
                                                </option>
                                            </select>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">
                                                {{trans('web_trans.theme_color')}}
                                            </label>
                                            <input type="text" name="theme_color" class=" tajawal_black form-control jscolor" value="{{ $Setting->theme_color }}" autocomplete="off" style="background-image: none; background-color: {{ $Setting->theme_color }}; color: rgb(96, 20, 20);">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class=" tajawal_black style_but_submit btn btn-success btn-block mb_50 btn-common">
            {{trans('web_trans.update')}}
        </button>
    </form>

</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#updateSettingsForm').on('submit', function(e) {
            e.preventDefault();

            // Serialize the form data
            var formData = new FormData(this);

            // Send an AJAX request to update the settings
            $.ajax({
                url: "{{ route('dash.setting.update') }}", // Replace with your update route
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
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