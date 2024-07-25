@extends('layouts.master')
@section('title')
    {{ trans('web_trans.create_team') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.create_team') }}</h1>
            <a href="{{ route('dash.team.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-bars"></i>{{ trans('web_trans.all_items_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.team.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
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
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}
                                                    *</label>
                                                <input type="text" name="name_ar" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                                @error('slug_ar')
                                                    @foreach ($errors->get('slug_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Slug*</label>
                                                <input type="text" name="slug_ar" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                                @error('slug_ar')
                                                    @foreach ($errors->get('slug_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.designation_ar') }} *</label>
                                                <input type="text" name="designation_ar" class=" tajawal_black form-control"
                                                    value="" autocomplete="off">
                                                @error('designation_ar')
                                                    @foreach ($errors->get('designation_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.tags') }}</label>
                                        <textarea name="tagline_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>

                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for=""
                                            class=" tajawal_black form-label">{{ trans('web_trans.experience_text') }}</label>
                                        <textarea name="experience_text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>

                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO {{ trans('web_trans.title') }}</label>
                                        <input type="text" name="seo_title_ar" class=" tajawal_black form-control" value=""
                                            autocomplete="off">

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
                                <button class=" tajawal_black accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                    {{ trans('web_trans.english') }} <i class="arrow down"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class=" tajawal_black accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class=" tajawal_black accordion-body">
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                    *</label>
                                                <input type="text" name="name" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                                @error('name')
                                                    @foreach ($errors->get('name') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Slug*</label>
                                                <input type="text" name="slug" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                                @error('slug')
                                                    @foreach ($errors->get('slug') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.designation') }} *</label>
                                                <input type="text" name="designation" class=" tajawal_black form-control"
                                                    value="" autocomplete="off">
                                                @error('designation')
                                                    @foreach ($errors->get('designation') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.tags') }}</label>
                                        <textarea name="tagline" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.email') }}</label>
                                                <input type="text" name="email" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.phone') }}</label>
                                                <input type="text" name="phone" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Website</label>
                                                <input type="text" name="website" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Facebook</label>
                                                <input type="text" name="facebook" class=" tajawal_black form-control"
                                                    value="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Twitter</label>
                                                <input type="text" name="twitter" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Linkedin</label>
                                                <input type="text" name="linkedin" class=" tajawal_black form-control"
                                                    value="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Instagram</label>
                                                <input type="text" name="instagram" class=" tajawal_black form-control"
                                                    value="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">YouTube</label>
                                                <input type="text" name="youtube" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Pinterest</label>
                                                <input type="text" name="pinterest" class=" tajawal_black form-control"
                                                    value="" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for=""
                                            class=" tajawal_black form-label">{{ trans('web_trans.experience_text') }}</label>
                                        <textarea name="experience_text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO
                                            {{ trans('web_trans.title') }}</label>
                                        <input type="text" name="seo_title" class=" tajawal_black form-control" value=""
                                            autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">SEO
                                            {{ trans('web_trans.description') }}</label>
                                        <textarea name="seo_meta_description" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                    </div>
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.photo') }}
                                                    *</label>
                                                <div><input type="file" name="photo" autocomplete="off"></div>
                                                @error('photo')
                                                    @foreach ($errors->get('photo') as $error)
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
                        class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.submit_btn') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
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
