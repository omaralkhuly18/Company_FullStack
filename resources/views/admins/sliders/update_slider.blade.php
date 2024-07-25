@extends('layouts.master')
@section('title')
    {{ trans('web_trans.update_slider') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.update_slider') }}</h1>
            <a href="{{ route('dash.slider.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-bars"></i> {{ trans('web_trans.all_items_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.slider.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $Slider->id }}">
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
                                        <div class=" tajawal_black col-md-12">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.text') }}</label>
                                                <textarea name="text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Slider->text_ar }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.btn_text') }}</label>
                                                <input type="text" name="button_text_ar" class=" tajawal_black form-control"
                                                    value="{{ $Slider->btn_text_ar }}" autocomplete="off">
                                            </div>
                                        </div>
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
                                        <div class=" tajawal_black col-md-12">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Existing Photo</label>
                                                <div><img src="{{ asset('assets/uploads/sliders/' . $Slider->photo) }}"
                                                        alt="" class=" tajawal_black w_200"></div>
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
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Text</label>
                                                <textarea name="text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Slider->text }}</textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Button Text</label>
                                                <input type="text" name="button_text" class=" tajawal_black form-control"
                                                    value="{{ $Slider->btn_text }}" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Button URL</label>
                                                <input type="text" name="button_url" class=" tajawal_black form-control"
                                                    value="{{ $Slider->btn_url }}" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('js')
@endsection
