@extends('layouts.master')
@section('title')
    {{ trans('web_trans.create_FAQs') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.create_FAQs') }}</h1>
            <a href="{{ route('dash.FAQ.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-bars"></i>
                {{ trans('web_trans.all_items_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.FAQ.store') }}" method="post">
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
                                    <div class=" tajawal_black mb-3">
                                        <label for=""
                                            class=" tajawal_black form-label">{{ trans('web_trans.question_ar') }}*</label>
                                        <input type="text" name="question_ar" class=" tajawal_black form-control" value=""
                                            autocomplete="off" required>
                                        @error('question_ar')
                                            @foreach ($errors->get('question_ar') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.answer_ar') }}*</label>
                                        <textarea name="answer_ar" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off" id="mce_0"></textarea>
                                        @error('answer_ar')
                                            @foreach ($errors->get('answer_ar') as $error)
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
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.question') }}*</label>
                                        <input type="text" name="question" class=" tajawal_black form-control" value=""
                                            autocomplete="off" required>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.answer') }}*</label>
                                        <textarea name="answer" class=" tajawal_black form-control editor" cols="30" rows="10" autocomplete="off" id="mce_0"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=" tajawal_black mb-3">
                        <button type="submit"
                            class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.submit_btn') }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'blocks| bold italic underline| link | align| numlist bullist | removeformat',
            menubar: false,
        });
        
    </script>
    
@endsection
