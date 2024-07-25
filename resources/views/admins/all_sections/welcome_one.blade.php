@extends('layouts.master')
@section('title')
    {{ trans('web_trans.welcome_one') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.welcome_one') }}</h1>
        </div>

        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-7">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{ route('dash.welcome.one.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.heading') }}</label>
                                                <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->heading_ar }}" autocomplete="off">
                                                @error('heading_ar')
                                                    @foreach ($errors->get('heading_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.subheading') }}</label>
                                                <input type="text" name="subheading_ar" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->sub_heading_ar }}" autocomplete="off">
                                                @error('subheading_ar')
                                                    @foreach ($errors->get('subheading_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.text') }}</label>
                                                <textarea name="text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $WelcomeOne->text_ar }}</textarea>
                                                @error('text_ar')
                                                    @foreach ($errors->get('text_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.btn_text') }}</label>
                                                <input type="text" name="button_text_ar" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->btn_text_ar }}" autocomplete="off">
                                                @error('text')
                                                    @foreach ($errors->get('text') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.person_name') }}</label>
                                                <input type="text" name="person_name_ar" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->person_name_ar }}" autocomplete="off">
                                                @error('person_name_ar')
                                                    @foreach ($errors->get('person_name_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.person_designation') }}</label>
                                                <input type="text" name="person_designation_ar" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->person_designation_ar }}" autocomplete="off">
                                                @error('person_designation_ar')
                                                    @foreach ($errors->get('person_designation_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
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
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.heading') }}</label>
                                                <input type="text" name="heading" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->heading }}" autocomplete="off">
                                                @error('heading')
                                                    @foreach ($errors->get('heading') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.subheading') }}</label>
                                                <input type="text" name="subheading" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->sub_heading }}" autocomplete="off">
                                                @error('subheading')
                                                    @foreach ($errors->get('subheading') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.text') }}</label>
                                                <textarea name="text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $WelcomeOne->text }}</textarea>
                                                @error('text')
                                                    @foreach ($errors->get('text') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.btn_text') }}</label>
                                                <input type="text" name="button_text" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->btn_text }}" autocomplete="off">
                                                @error('btn_text')
                                                    @foreach ($errors->get('btn_text') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.btn_url') }}</label>
                                                <input type="text" name="button_url" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->btn_url }}" autocomplete="off">
                                                @error('btn_url')
                                                    @foreach ($errors->get('btn_url') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.experience_year') }}</label>
                                                <input type="text" name="experience_year" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->experience_year }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.person_name') }}</label>
                                                <input type="text" name="person_name" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->person_name }}" autocomplete="off">
                                                @error('person_name')
                                                    @foreach ($errors->get('person_name') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.person_designation') }}</label>
                                                <input type="text" name="person_designation" class=" tajawal_black form-control"
                                                    value="{{ $WelcomeOne->person_designation }}" autocomplete="off">
                                                @error('person_designation')
                                                    @foreach ($errors->get('person_designation') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black row">
                                                <div class=" tajawal_black col-md-4">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="" class=" tajawal_black form-label">
                                                            {{ trans('web_trans.existing_person_photo') }}</label>
                                                        <div class=" tajawal_black photo-container">
                                                            <a href="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->person_photo) }}"
                                                                class=" tajawal_black magnific"><img
                                                                    src="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->person_photo) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class=" tajawal_black mb-3">
                                                        <label for="" class=" tajawal_black form-label">
                                                            {{ trans('web_trans.change_person_photo') }}</label>
                                                        <div><input type="file" name="person_photo"
                                                                autocomplete="off"></div>
                                                        @error('person_photo')
                                                            @foreach ($errors->get('person_photo') as $error)
                                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                            @endforeach
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-4">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.existing_photo_one') }}</label>
                                                        <div class=" tajawal_black photo-container">
                                                            <a href="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->photo1) }}"
                                                                class=" tajawal_black magnific"><img
                                                                    src="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->photo1) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.change_photo_one') }}</label>
                                                        <div><input type="file" name="photo1" autocomplete="off">
                                                        </div>
                                                        @error('photo1')
                                                            @foreach ($errors->get('photo1') as $error)
                                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                            @endforeach
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black col-md-4">
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.existing_photo_two') }}</label>
                                                        <div class=" tajawal_black photo-container">
                                                            <a href="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->photo2) }}"
                                                                class=" tajawal_black magnific"><img
                                                                    src="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->photo2) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class=" tajawal_black mb-3">
                                                        <label for=""
                                                            class=" tajawal_black form-label">{{ trans('web_trans.change_photo_two') }}</label>
                                                        <div><input type="file" name="photo2" autocomplete="off">
                                                        </div>
                                                        @error('photo2')
                                                            @foreach ($errors->get('photo2') as $error)
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
            <div class=" tajawal_black col-md-5">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <h4><b>{{ trans('web_trans.welcome_one_element') }}</b></h4>
                        <div class=" tajawal_black mb_10">
                            <a href="" data-bs-toggle="modal" data-bs-target="#add_modal"><i
                                    class=" tajawal_black fas fa-plus"></i> {{ trans('web_trans.add_item_btn') }}</a>
                        </div>

                        <!-- Add Element Modal -->
                        <div class=" tajawal_black modal fade" id="add_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                <div class=" tajawal_black modal-content">
                                    <div class=" tajawal_black modal-header">
                                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                                            {{ trans('web_trans.heading') }}</h1>
                                        <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class=" tajawal_black modal-body">
                                        <form action="{{ route('dash.welcome.one.element.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="welcome_one_id" value="{{ $WelcomeOne->id }}">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.heading') }}*</label>
                                                <input type="text" name="heading" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}*</label>
                                                <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                                    required="" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.text') }}*</label>
                                                <textarea name="text" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off"></textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.text_ar') }}*</label>
                                                <textarea name="text_ar" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off"></textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Icon*</label>
                                                <select id="iconSelect" name="icon" class=" tajawal_black form-select"
                                                    autocomplete="off">
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

                                            <div class=" tajawal_black mb-3">
                                                <button type="submit"
                                                    class=" tajawal_black btn btn-primary btn-sm">{{ trans('web_trans.submit_btn') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Element Modal -->


                        <div class=" tajawal_black table-responsive">
                            <!-- Update Element Modal -->
                            <div class=" tajawal_black modal fade" id="edit_modal_1" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                    <div class=" tajawal_black modal-content">
                                        <div class=" tajawal_black modal-header">
                                            <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                                                {{ trans('web_trans.update_item_btn') }}</h1>
                                            <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class=" tajawal_black modal-body">
                                            <form action="{{ route('dash.welcome.one.element.update') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="">
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.heading') }}*</label>
                                                    <input type="text" name="heading" class=" tajawal_black form-control"
                                                        value="" required autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}*</label>
                                                    <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                                        value="" required autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.text') }}*</label>
                                                    <textarea name="text" class=" tajawal_black form-control h_70" cols="30" rows="10" required autocomplete="off"></textarea>
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.text_ar') }}*</label>
                                                    <textarea name="text_ar" class=" tajawal_black form-control h_70" cols="30" rows="10" required autocomplete="off"></textarea>
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">Icon*</label>
                                                    <select id="iconSelectEdit" name="icon" class=" tajawal_black form-select"
                                                        autocomplete="off">
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
                                                        <option value="flaticon-health-check">flaticon-health-check
                                                        </option>
                                                        <option value="flaticon-job-promotion" selected="">
                                                            flaticon-job-promotion</option>
                                                        <option value="flaticon-laptop">flaticon-laptop</option>
                                                        <option value="flaticon-learning">flaticon-learning</option>
                                                        <option value="flaticon-marketing">flaticon-marketing</option>
                                                        <option value="flaticon-phone-call">flaticon-phone-call</option>
                                                        <option value="flaticon-promotion">flaticon-promotion</option>
                                                        <option value="flaticon-rating">flaticon-rating</option>
                                                        <option value="flaticon-recommend">flaticon-recommend</option>
                                                        <option value="flaticon-settings">flaticon-settings</option>
                                                        <option value="flaticon-success">flaticon-success</option>
                                                        <option value="flaticon-targeted-marketing">
                                                            flaticon-targeted-marketing
                                                        </option>
                                                        <option value="flaticon-teaching">flaticon-teaching</option>
                                                        <option value="flaticon-technology">flaticon-technology</option>
                                                        <option value="flaticon-visitor">flaticon-visitor</option>
                                                        <option value="flaticon-web-development">flaticon-web-development
                                                        </option>
                                                    </select>
                                                    <div id="iconPreviewEdit"><i class="icon flaticon-graphic-design"></i>
                                                    </div>
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
                            <!-- Update Element Modal -->

                            <table class=" tajawal_black table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>{{ trans('web_trans.heading') }}</th>
                                        <th>{{ trans('web_trans.text') }}</th>
                                        <th>{{ trans('web_trans.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($WelcomeOneElements as $WelcomeOneElement)
                                        <tr>
                                            <td>
                                                <i class="{{ $WelcomeOneElement->icon }} fz_40"></i>
                                            </td>
                                            @if ($app->getLocale() == 'ar')
                                                <td>{{ $WelcomeOneElement->heading_ar }}</td>
                                                <td>{{ $WelcomeOneElement->text_ar }}</td>
                                            @else
                                                <td>{{ $WelcomeOneElement->heading }}</td>
                                                <td>{{ $WelcomeOneElement->text }}</td>
                                            @endif

                                            <td>
                                                <div class=" tajawal_black btn-group" role="group">
                                                    <a href="" class=" tajawal_black btn btn-primary btn-sm btn-block edit-option"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal_1"
                                                        data-id="{{ $WelcomeOneElement->id }}"
                                                        data-heading="{{ $WelcomeOneElement->heading }}"
                                                        data-heading_ar="{{ $WelcomeOneElement->heading_ar }}"
                                                        data-text="{{ $WelcomeOneElement->text }}"
                                                        data-text_ar="{{ $WelcomeOneElement->text_ar }}"
                                                        data-icon="{{ $WelcomeOneElement->icon }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <span style="color: white">s</span>
                                                    <form method="POST"
                                                        action="{{ route('dash.welcome.one.element.delete', ['id' => $WelcomeOneElement->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class=" tajawal_black btn btn-danger btn-sm"
                                                            onclick="return confirm('{{ trans('web_trans.delete_sure_msg') }}')"><i
                                                                class=" tajawal_black fas fa-trash"></i></button>
                                                    </form>
                                                </div>
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

        <script>
            window.onload = function() {
                document.getElementById('iconSelect').addEventListener('change', function() {
                    var selectedValue = this.value;
                    var previewElement = document.getElementById('iconPreview');
                    previewElement.innerHTML = '<i class="icon ' + selectedValue + '"></i>';
                });
                document.getElementById('iconSelectEdit').addEventListener('change', function() {
                    var selectedValueEdit = this.value;
                    var previewElementEdit = document.getElementById('iconPreviewEdit');
                    previewElementEdit.innerHTML = '<i class="icon ' + selectedValueEdit + '"></i>';
                });
            };
        </script>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.edit-option').click(function() {
                var id = $(this).data('id');
                var heading = $(this).data('heading');
                var heading_ar = $(this).data('heading_ar');
                var text = $(this).data('text');
                var text_ar = $(this).data('text_ar');
                var icon = $(this).data('icon');
                var modalSelector = $(this).data('bs-target'); // Get the modal selector
                var modal = $(modalSelector);

                // Set the values in the modal's input fields
                modal.find('input[name="id"]').val(id);
                modal.find('input[name="heading"]').val(heading);
                modal.find('input[name="heading_ar"]').val(heading_ar);
                modal.find('textarea[name="text"]').val(text);
                modal.find('textarea[name="text_ar"]').val(text_ar);

                // Select the correct option in the dropdown
                modal.find('select[name="icon"]').val(icon);

                // Update the icon preview (if needed)
                var selectedIcon = modal.find('select[name="icon"]').val();
                modal.find('#iconPreviewEdit').html('<i class="icon ' + selectedIcon + '"></i>');
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
@endsection
