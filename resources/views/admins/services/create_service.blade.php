@extends('layouts.master')
@section('title')
{{ trans('web_trans.create_services') }}
@endsection

@section('css')
@endsection

@section('content')
<div class=" tajawal_black container-fluid">

    <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.create_services') }}</h1>
        <a href="{{ route('dash.service.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-bars"></i>{{ trans('web_trans.all_items_btn') }}
        </a>
    </div>

    <div class=" tajawal_black card shadow mb-4">
        <div class=" tajawal_black card-body">
            <form action="{{ route('dash.service.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" tajawal_black accordion" id="accordionExample">
                    <div class=" tajawal_black accordion-item">
                        <h2 class=" tajawal_black accordion-header" id="headingOne">
                            <button class=" tajawal_black accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                {{ trans('web_trans.arabic') }} <i class="arrow down"></i>
                            </button>
                        </h2>
                        <div id="collapseOne" class=" tajawal_black accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class=" tajawal_black accordion-body">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-md-6">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}
                                                *</label>
                                            <input type="text" name="name_ar" class=" tajawal_black form-control" value="" autocomplete="off">
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
                                            <input type="text" name="slug_ar" class=" tajawal_black form-control" value="" autocomplete="off">
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
                                    <textarea name="short_description_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                    @error('short_description_ar')
                                    @foreach ($errors->get('short_description_ar') as $error)
                                    <div class=" tajawal_black text-danger">{{ $error }}</div>
                                    @endforeach
                                    @enderror
                                </div>
                                <div class=" tajawal_black mb-3">
                                    <label for="" class=" tajawal_black form-label">{{ trans('web_trans.description') }} *
                                    </label>
                                    <textarea name="description_ar" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off" id="mce_0"></textarea>
                                    @error('description_ar')
                                    @foreach ($errors->get('description_ar') as $error)
                                    <div class=" tajawal_black text-danger">{{ $error }}</div>
                                    @endforeach
                                    @enderror
                                </div>
                                <div class=" tajawal_black mb-3">
                                    <label for="" class=" tajawal_black form-label">SEO {{ trans('web_trans.title') }}</label>
                                    <input type="text" name="seo_title_ar" class=" tajawal_black form-control" value="" autocomplete="off">
                                </div>
                                <div class=" tajawal_black mb-3">
                                    <label for="" class=" tajawal_black form-label">SEO
                                        {{ trans('web_trans.description') }}</label>
                                    <textarea name="seo_meta_description_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class=" tajawal_black accordion" id="accordionExample">
                    <div class=" tajawal_black accordion-item">
                        <h2 class=" tajawal_black accordion-header" id="headingTwo">
                            <button class=" tajawal_black accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                {{ trans('web_trans.english') }} <i class="arrow down"></i>
                            </button>
                        </h2>
                        <div id="collapseTwo" class=" tajawal_black accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class=" tajawal_black accordion-body">
                                <div class=" tajawal_black row">
                                    <div class=" tajawal_black col-md-6">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                *</label>
                                            <input type="text" name="name" class=" tajawal_black form-control" value="" autocomplete="off" required>
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
                                            <input type="text" name="slug" class=" tajawal_black form-control" value="" autocomplete="off" required>
                                            @error('slug')
                                            @foreach ($errors->get('slug') as $error)
                                            <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class=" tajawal_black mb-3">
                                    <label for="" class=" tajawal_black form-label">{{ trans('web_trans.short_description') }} *</label>
                                    <textarea name="short_description" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                    @error('short_description')
                                    @foreach ($errors->get('short_description') as $error)
                                    <div class=" tajawal_black text-danger">{{ $error }}</div>
                                    @endforeach
                                    @enderror
                                </div>
                                <div class=" tajawal_black mb-3">
                                    <label for="" class=" tajawal_black form-label">{{ trans('web_trans.description') }}
                                        *</label>
                                    <textarea name="description" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off" id="mce_0"></textarea>
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
                                            <select id="iconSelect" name="icon" class=" tajawal_black form-select" autocomplete="off" required>
                                                <option value="">Select Icon</option>
                                                <option value="flaticon-bank">flaticon-bank</option>
                                                <option value="flaticon-cloud">flaticon-cloud</option>
                                                <option value="flaticon-completed-task">flaticon-completed-task
                                                </option>
                                                <option value="flaticon-design">flaticon-design</option>
                                                <option value="flaticon-digital-services">flaticon-digital-services
                                                </option>
                                                <option value="flaticon-diplomat">flaticon-diplomat</option>
                                                <option value="flaticon-graphic-design">flaticon-graphic-design
                                                </option>
                                                <option value="flaticon-group">flaticon-group</option>
                                                <option value="flaticon-health-check">flaticon-health-check</option>
                                                <option value="flaticon-job-promotion">flaticon-job-promotion</option>
                                                <option value="flaticon-laptop">flaticon-laptop</option>
                                                <option value="flaticon-learning">flaticon-learning</option>
                                                <option value="flaticon-marketing">flaticon-marketing</option>
                                                <option value="flaticon-phone-call">flaticon-phone-call</option>
                                                <option value="flaticon-promotion">flaticon-promotion</option>
                                                <option value="flaticon-rating">flaticon-rating</option>
                                                <option value="flaticon-recommend">flaticon-recommend</option>
                                                <option value="flaticon-settings">flaticon-settings</option>
                                                <option value="flaticon-success">flaticon-success</option>
                                                <option value="flaticon-targeted-marketing">flaticon-targeted-marketing
                                                </option>
                                                <option value="flaticon-teaching">flaticon-teaching</option>
                                                <option value="flaticon-technology">flaticon-technology</option>
                                                <option value="flaticon-visitor">flaticon-visitor</option>
                                                <option value="flaticon-web-development">flaticon-web-development
                                                </option>
                                            </select>
                                            <div id="iconPreview"></div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black col-md-6">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.phone') }}</label>
                                            <input type="text" name="phone" class=" tajawal_black form-control" value="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class=" tajawal_black mb-3">
                                    <label for="" class=" tajawal_black form-label">SEO
                                        {{ trans('web_trans.title') }}</label>
                                    <input type="text" name="seo_title" class=" tajawal_black form-control" value="" autocomplete="off">
                                </div>
                                <div class=" tajawal_black mb-3">
                                    <label for="" class=" tajawal_black form-label">SEO
                                        {{ trans('web_trans.description') }}</label>
                                    <textarea name="seo_meta_description" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                </div>
                                <div class="tajawal_black row">
                                    <div class="tajawal_black col-md-4">
                                        <div class="tajawal_black mb-3">
                                            <label for="photoURL" class="tajawal_black form-label">{{ trans('web_trans.photo') }} *</label>
                                            <div>
                                                <input type="text" id="photoURL" name="photo_url" class="form-control" readonly>
                                                <input type="file" name="photo" id="photoUpload" class="hidden-input" onchange="dragNdrop(event, 'photoPreview')" required>
                                                <div id="photoPreview"></div>
                                                @error('photo')
                                                @foreach ($errors->get('photo') as $error)
                                                <div class="tajawal_black text-danger">{{ $error }}</div>
                                                @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tajawal_black col-md-4">
                                        <div class="tajawal_black mb-3">
                                            <label for="bannerURL" class="tajawal_black form-label">{{ trans('web_trans.banner') }}</label>
                                            <div>
                                                <input type="text" id="bannerURL" name="banner_url" class="form-control" readonly>
                                                <input type="file" name="banner" id="bannerUpload" class="hidden-input" onchange="dragNdrop(event, 'bannerPreview')">
                                                <div id="bannerPreview"></div>
                                                @error('banner')
                                                @foreach ($errors->get('banner') as $error)
                                                <div class="tajawal_black text-danger">{{ $error }}</div>
                                                @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tajawal_black col-md-4">
                                        <div class="tajawal_black mb-3">
                                            <label for="pdfURL" class="tajawal_black form-label">PDF</label>
                                            <div>
                                                <input type="text" id="pdfURL" name="pdf_url" class="form-control" readonly>
                                                <input type="file" name="pdf" id="pdfUpload" class="hidden-input" onchange="dragNdrop(event, 'pdfPreview')">
                                                <div id="pdfPreview"></div>
                                                @error('pdf')
                                                @foreach ($errors->get('pdf') as $error)
                                                <div class="tajawal_black text-danger">{{ $error }}</div>
                                                @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.submit_btn') }}</button>
            </form>
        </div>
    </div>

</div>
@endsection

@section('js')
<script>
    // Wait for DOM to be fully loaded
    $(document).ready(function() {
        document.getElementById('iconSelect').addEventListener('change', function() {
            var selectedValue = this.value;
            var previewElement = document.getElementById('iconPreview');
            previewElement.innerHTML = '<i class="icon ' + selectedValue + '"></i>';
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