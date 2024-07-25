@extends('layouts.master')
@section('title')
    {{ trans('web_trans.update_services') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.update_services') }}</h1>
            <a href="{{ route('dash.service.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-bars"></i> {{ trans('web_trans.all_items_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.service.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $Service->id }}">
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
                                                    value="{{ $Service->name_ar }}" autocomplete="off">
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
                                                    value="{{ $Service->slug_ar }}" autocomplete="off">
                                                @error('slug_ar')
                                                    @foreach ($errors->get('slug_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.short_description') }}
                                            *</label>
                                        <textarea name="short_description_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Service->short_descr_ar }}</textarea>
                                        @error('short_description_ar')
                                            @foreach ($errors->get('short_description_ar') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.description') }} *
                                        </label>
                                        <textarea name="description_ar" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off"
                                            id="mce_0">{{ $Service->descr_ar }}</textarea>
                                        @error('description_ar')
                                            @foreach ($errors->get('description_ar') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO {{ trans('web_trans.title') }}</label>
                                        <input type="text" name="seo_title" class=" tajawal_black form-control"
                                            value="{{ $Service->seo_title_ar }}" autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO
                                            {{ trans('web_trans.description') }}</label>
                                        <textarea name="seo_meta_description" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Service->seo_descr_ar }}</textarea>
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
                                                <label for="" class=" tajawal_black form-label">Name *</label>
                                                <input type="text" name="name" class=" tajawal_black form-control"
                                                    value="{{ $Service->name }}" autocomplete="off">
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
                                                    value="{{ $Service->slug }}" autocomplete="off">
                                                @error('slug')
                                                    @foreach ($errors->get('slug') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">Short Description *</label>
                                        <textarea name="short_description" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Service->short_descr }}</textarea>
                                        @error('short_description')
                                            @foreach ($errors->get('short_description') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">Description * </label>
                                        <textarea name="description" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off"
                                            id="mce_0">{{ $Service->descr }}</textarea>
                                        @error('description')
                                            @foreach ($errors->get('description') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror

                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Icon*</label>
                                                <select id="iconSelect" name="icon" class=" tajawal_black form-select"
                                                    autocomplete="off" required>
                                                    <option value="flaticon-bank"
                                                        {{ $Service->icon == 'flaticon-bank' ? 'selected' : '' }}>
                                                        flaticon-bank</option>
                                                    <option value="flaticon-cloud"
                                                        {{ $Service->icon == 'flaticon-cloud' ? 'selected' : '' }}>
                                                        flaticon-cloud</option>
                                                    <option value="flaticon-completed-task"
                                                        {{ $Service->icon == 'flaticon-completed-task' ? 'selected' : '' }}>
                                                        flaticon-completed-task</option>
                                                    <option value="flaticon-design"
                                                        {{ $Service->icon == 'flaticon-design' ? 'selected' : '' }}>
                                                        flaticon-design</option>
                                                    <option value="flaticon-digital-services"
                                                        {{ $Service->icon == 'flaticon-digital-services' ? 'selected' : '' }}>
                                                        flaticon-digital-services</option>
                                                    <option value="flaticon-diplomat"
                                                        {{ $Service->icon == 'flaticon-diplomat' ? 'selected' : '' }}>
                                                        flaticon-diplomat
                                                    </option>
                                                    <option value="flaticon-graphic-design"
                                                        {{ $Service->icon == 'flaticon-graphic-design' ? 'selected' : '' }}>
                                                        flaticon-graphic-design</option>
                                                    <option value="flaticon-group"
                                                        {{ $Service->icon == 'flaticon-group' ? 'selected' : '' }}>
                                                        flaticon-group</option>
                                                    <option value="flaticon-health-check"
                                                        {{ $Service->icon == 'flaticon-health-check' ? 'selected' : '' }}>
                                                        flaticon-health-check</option>
                                                    <option value="flaticon-job-promotion"
                                                        {{ $Service->icon == 'flaticon-job-promotion' ? 'selected' : '' }}>
                                                        flaticon-job-promotion</option>
                                                    <option value="flaticon-laptop"
                                                        {{ $Service->icon == 'flaticon-laptop' ? 'selected' : '' }}>
                                                        flaticon-laptop
                                                    </option>
                                                    <option value="flaticon-learning"
                                                        {{ $Service->icon == 'flaticon-learning' ? 'selected' : '' }}>
                                                        flaticon-learning
                                                    </option>
                                                    <option value="flaticon-marketing"
                                                        {{ $Service->icon == 'flaticon-marketing' ? 'selected' : '' }}>
                                                        flaticon-marketing
                                                    </option>
                                                    <option value="flaticon-phone-call"
                                                        {{ $Service->icon == 'flaticon-phone-call' ? 'selected' : '' }}>
                                                        flaticon-phone-call
                                                    </option>
                                                    <option value="flaticon-promotion"
                                                        {{ $Service->icon == 'flaticon-promotion' ? 'selected' : '' }}>
                                                        flaticon-promotion
                                                    </option>
                                                    <option value="flaticon-rating"
                                                        {{ $Service->icon == 'flaticon-rating' ? 'selected' : '' }}>
                                                        flaticon-rating
                                                    </option>
                                                    <option value="flaticon-recommend"
                                                        {{ $Service->icon == 'flaticon-recommend' ? 'selected' : '' }}>
                                                        flaticon-recommend
                                                    </option>
                                                    <option value="flaticon-settings"
                                                        {{ $Service->icon == 'flaticon-settings' ? 'selected' : '' }}>
                                                        flaticon-settings
                                                    </option>
                                                    <option value="flaticon-success"
                                                        {{ $Service->icon == 'flaticon-success' ? 'selected' : '' }}>
                                                        flaticon-success
                                                    </option>
                                                    <option value="flaticon-targeted-marketing"
                                                        {{ $Service->icon == 'flaticon-targeted-marketing' ? 'selected' : '' }}>
                                                        flaticon-targeted-marketing</option>
                                                    <option value="flaticon-teaching"
                                                        {{ $Service->icon == 'flaticon-teaching' ? 'selected' : '' }}>
                                                        flaticon-teaching
                                                    </option>
                                                    <option value="flaticon-technology"
                                                        {{ $Service->icon == 'flaticon-technology' ? 'selected' : '' }}>
                                                        flaticon-technology
                                                    </option>
                                                    <option value="flaticon-visitor"
                                                        {{ $Service->icon == 'flaticon-visitor' ? 'selected' : '' }}>
                                                        flaticon-visitor
                                                    </option>
                                                    <option value="flaticon-web-development"
                                                        {{ $Service->icon == 'flaticon-web-development' ? 'selected' : '' }}>
                                                        flaticon-web-development</option>
                                                </select>

                                                <div id="iconPreview"><i class="icon {{ $Service->icon }}"></i></div>
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Phone</label>
                                                <input type="text" name="phone" class=" tajawal_black form-control"
                                                    value="{{ $Service->phone }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO Title</label>
                                        <input type="text" name="seo_title" class=" tajawal_black form-control"
                                            value="{{ $Service->seo_title }}" autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO Meta Description</label>
                                        <textarea name="seo_meta_description" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Service->seo_descr }}</textarea>
                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Existing Photo</label>
                                                <div class=" tajawal_black photo-container">
                                                    <a href="{{ asset('assets/uploads/services/photos/' . $Service->photo) }}"
                                                        class=" tajawal_black magnific"><img
                                                            src="{{ asset('assets/uploads/services/photos/' . $Service->photo) }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Change Photo</label>
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
                                                <label for="" class=" tajawal_black form-label">Existing Banner</label>
                                                <div class=" tajawal_black photo-container">
                                                    <a href="{{ asset('assets/uploads/services/banners/' . $Service->banner) }}"
                                                        class=" tajawal_black magnific"><img
                                                            src="{{ asset('assets/uploads/services/banners/' . $Service->banner) }}"
                                                            alt=""></a>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Change Banner</label>
                                                <div><input type="file" name="banner" autocomplete="off"></div>
                                                @error('banner')
                                                    @foreach ($errors->get('banner') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Existing PDF</label>
                                                <div class=" tajawal_black photo-container">
                                                    <a
                                                        href="{{ asset('assets/uploads/services/pdfs/' . $Service->pdf) }}"><img
                                                            src="{{ asset('assets/dist-admin/uploads/pdf.svg') }}"
                                                            alt=""></a>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Change PDF</label>
                                                <div><input type="file" name="pdf" autocomplete="off"></div>
                                                @error('pdf')
                                                    @foreach ($errors->get('pdf') as $error)
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
                    <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">Update</button>
                </form>
            </div>
        </div>
        <script>
            window.onload = function() {
                document.getElementById('iconSelect').addEventListener('change', function() {
                    var selectedValue = this.value;
                    var previewElement = document.getElementById('iconPreview');
                    previewElement.innerHTML = '<i class="icon ' + selectedValue + '"></i>';
                });
            };
        </script>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#iconSelect').change(function() {
                var selectedValue = $(this).val();
                var previewElement = $('#iconPreview');
                previewElement.html('<i class="icon ' + selectedValue + '"></i>');
            });
        });
    </script>
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
@endsection
