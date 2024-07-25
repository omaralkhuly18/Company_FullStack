@extends('layouts.master')
@section('title')
    {{ trans('web_trans.update') }} Portfolio
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.update') }} Portfolio</h1>
            <a href="{{ route('dash.portfolio.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-bars"></i>{{ trans('web_trans.all_items_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.portfolio.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $Portfolio->id }}">
                    <div class=" tajawal_black accordion" id="accordionExample">
                        <div class=" tajawal_black accordion-item">
                            <h2 class=" tajawal_black accordion-header" id="headingOne">
                                <button class=" tajawal_black accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    {{ trans('web_trans.arabic') }} <i class="arrow down"></i>
                                </button>
                            </h2>
                            <div id="collapseOne" class=" tajawal_black accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class=" tajawal_black accordion-body">
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}
                                                    *</label>
                                                <input type="text" name="name_ar" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->name_ar }}" autocomplete="off">
                                                @error('name_ar')
                                                    @foreach ($errors->get('name_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Slug*</label>
                                                <input type="text" name="slug_ar" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->slug_ar }}" autocomplete="off">
                                                @error('slug_ar')
                                                    @foreach ($errors->get('slug_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.description') }} *
                                        </label>
                                        <textarea name="description_ar" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off"
                                            id="mce_0">{{ $Portfolio->descr_ar }}</textarea>
                                        @error('description_ar')
                                            @foreach ($errors->get('description_ar') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.client') }}</label>
                                                <input type="text" name="client" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->client_ar }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.location') }}</label>
                                                <input type="text" name="location" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->location_ar }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO {{ trans('web_trans.title') }}</label>
                                        <input type="text" name="seo_title" class=" tajawal_black form-control"
                                            value="{{ $Portfolio->seo_title_ar }}" autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO
                                            {{ trans('web_trans.description') }}</label>
                                        <textarea name="seo_meta_description" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Portfolio->seo_descr_ar }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=" tajawal_black accordion" id="accordionExample">
                        <div class=" tajawal_black accordion-item">
                            <h2 class=" tajawal_black accordion-header" id="headingTwo">
                                <button class=" tajawal_black accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                    {{ trans('web_trans.english') }} <i class="arrow down"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class=" tajawal_black accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class=" tajawal_black accordion-body">
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                    *</label>
                                                <input type="text" name="name" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->name }}" autocomplete="off">
                                                @error('name')
                                                    @foreach ($errors->get('name') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Slug*</label>
                                                <input type="text" name="slug" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->slug }}" autocomplete="off">
                                                @error('slug')
                                                    @foreach ($errors->get('slug') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.description') }} *
                                        </label>
                                        <textarea name="description" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off"
                                            id="mce_0">{{ $Portfolio->descr }}</textarea>
                                        @error('description')
                                            @foreach ($errors->get('description') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.date') }}</label>
                                                <input type="text" name="date" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->date }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.client') }}</label>
                                                <input type="text" name="client" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->client }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Website</label>
                                                <input type="text" name="website" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->website }}" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.location') }}</label>
                                                <input type="text" name="location" class=" tajawal_black form-control"
                                                    value="{{ $Portfolio->location }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO
                                            {{ trans('web_trans.title') }}</label>
                                        <input type="text" name="seo_title" class=" tajawal_black form-control"
                                            value="{{ $Portfolio->seo_title }}" autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO
                                            {{ trans('web_trans.description') }}</label>
                                        <textarea name="seo_meta_description" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Portfolio->seo_descr }}</textarea>
                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.existing_photo') }}</label>
                                                <div class=" tajawal_black photo-container">
                                                    <a href="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                        class=" tajawal_black magnific"><img
                                                            src="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.change_photo') }}</label>
                                                <div><input type="file" name="photo" autocomplete="off"></div>
                                                @error('photo')
                                                    @foreach ($errors->get('photo') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.existing_banner') }}</label>
                                                <div class=" tajawal_black photo-container">
                                                    <a href="{{ asset('assets/uploads/portfolios/banners/' . $Portfolio->banner) }}"
                                                        class=" tajawal_black magnific"><img
                                                            src="{{ asset('assets/uploads/portfolios/banners/' . $Portfolio->banner) }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.change_banner') }}</label>
                                                <div><input type="file" name="banner" autocomplete="off"></div>
                                                @error('banner')
                                                    @foreach ($errors->get('banner') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit"
                        class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>

                </form>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        tinymce.init({
            selector: 'textarea[description], textarea[description_ar]',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'blocks| bold italic underline| link | align| numlist bullist | removeformat',
            menubar: false,
        });
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
@endsection
