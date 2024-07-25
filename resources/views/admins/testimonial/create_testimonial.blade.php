@extends('layouts.master')
@section('title')
    {{ trans('web_trans.create_testimonial') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.create_testimonial') }}</h1>
            <a href="{{ route('dash.testimonial.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-bars"></i>{{ trans('web_trans.all_items_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.testimonial.store') }}" method="post" enctype="multipart/form-data">
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
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}
                                                    *</label>
                                                <input type="text" name="name_ar" class=" tajawal_black form-control" value=""
                                                    autocomplete="off" required>
                                                @error('name_ar')
                                                    @foreach ($errors->get('name_ar') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.designation_ar') }} *</label>
                                                <input type="text" name="designation_ar" class=" tajawal_black form-control"
                                                    value="" required autocomplete="off">
                                                @error('designation_ar')
                                                    @foreach ($errors->get('designation') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.comment_ar') }}
                                                *</label>
                                            <textarea name="comment_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off" required></textarea>
                                            @error('comment_ar')
                                                @foreach ($errors->get('comment_ar') as $error)
                                                    <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                @endforeach
                                            @enderror
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
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                    *</label>
                                                <input type="text" name="name" class=" tajawal_black form-control" value=""
                                                    autocomplete="off" required>
                                                @error('name')
                                                    @foreach ($errors->get('name') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror

                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.designation') }} *</label>
                                                <input type="text" name="designation" class=" tajawal_black form-control" value=""
                                                    required autocomplete="off">
                                                @error('designation')
                                                    @foreach ($errors->get('designation') as $error)
                                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                                    @endforeach
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" tajawal_black col-md-4">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.rating') }}
                                                    *</label>
                                                <select name="rating" class=" tajawal_black form-select" autocomplete="off" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.comment') }}
                                            *</label>
                                        <textarea name="comment" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off" required></textarea>
                                        @error('comment')
                                            @foreach ($errors->get('comment') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
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
@endsection
