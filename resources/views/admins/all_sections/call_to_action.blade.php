@extends('layouts.master')
@section('title')
Call to Action
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">Call to Action</h1>
        </div>
        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-12">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{ route('dash.action.update') }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.text')}}</label>
                                <textarea name="text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $CallToAction->text }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.text_ar')}}</label>
                                <textarea name="text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $CallToAction->text_ar }}</textarea>
                            </div>
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.phone')}}</label>
                                        <input type="text" name="phone" class=" tajawal_black form-control"
                                            value="{{ $CallToAction->phone }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.email')}}</label>
                                        <input type="text" name="email" class=" tajawal_black form-control"
                                            value="{{ $CallToAction->email }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">Icon</label>
                                        <select id="iconSelectEdit" name="icon" class=" tajawal_black form-select" autocomplete="off">
                                            <option value="flaticon-bank" {{ $CallToAction->icon == 'flaticon-bank' ? 'selected' : '' }}>
                                                flaticon-bank</option>
                                            <option value="flaticon-cloud" {{ $CallToAction->icon == 'flaticon-cloud' ? 'selected' : '' }}>
                                                flaticon-cloud</option>
                                            <option value="flaticon-completed-task"
                                                {{ $CallToAction->icon == 'flaticon-completed-task' ? 'selected' : '' }}>
                                                flaticon-completed-task</option>
                                            <option value="flaticon-design"
                                                {{ $CallToAction->icon == 'flaticon-design' ? 'selected' : '' }}>flaticon-design</option>
                                            <option value="flaticon-digital-services"
                                                {{ $CallToAction->icon == 'flaticon-digital-services' ? 'selected' : '' }}>
                                                flaticon-digital-services</option>
                                            <option value="flaticon-diplomat"
                                                {{ $CallToAction->icon == 'flaticon-diplomat' ? 'selected' : '' }}>flaticon-diplomat
                                            </option>
                                            <option value="flaticon-graphic-design"
                                                {{ $CallToAction->icon == 'flaticon-graphic-design' ? 'selected' : '' }}>
                                                flaticon-graphic-design</option>
                                            <option value="flaticon-group"
                                                {{ $CallToAction->icon == 'flaticon-group' ? 'selected' : '' }}>flaticon-group</option>
                                            <option value="flaticon-health-check"
                                                {{ $CallToAction->icon == 'flaticon-health-check' ? 'selected' : '' }}>
                                                flaticon-health-check</option>
                                            <option value="flaticon-job-promotion"
                                                {{ $CallToAction->icon == 'flaticon-job-promotion' ? 'selected' : '' }}>
                                                flaticon-job-promotion</option>
                                            <option value="flaticon-laptop"
                                                {{ $CallToAction->icon == 'flaticon-laptop' ? 'selected' : '' }}>flaticon-laptop</option>
                                            <option value="flaticon-learning"
                                                {{ $CallToAction->icon == 'flaticon-learning' ? 'selected' : '' }}>flaticon-learning
                                            </option>
                                            <option value="flaticon-marketing"
                                                {{ $CallToAction->icon == 'flaticon-marketing' ? 'selected' : '' }}>flaticon-marketing
                                            </option>
                                            <option value="flaticon-phone-call"
                                                {{ $CallToAction->icon == 'flaticon-phone-call' ? 'selected' : '' }}>flaticon-phone-call
                                            </option>
                                            <option value="flaticon-promotion"
                                                {{ $CallToAction->icon == 'flaticon-promotion' ? 'selected' : '' }}>flaticon-promotion
                                            </option>
                                            <option value="flaticon-rating"
                                                {{ $CallToAction->icon == 'flaticon-rating' ? 'selected' : '' }}>flaticon-rating</option>
                                            <option value="flaticon-recommend"
                                                {{ $CallToAction->icon == 'flaticon-recommend' ? 'selected' : '' }}>flaticon-recommend
                                            </option>
                                            <option value="flaticon-settings"
                                                {{ $CallToAction->icon == 'flaticon-settings' ? 'selected' : '' }}>flaticon-settings
                                            </option>
                                            <option value="flaticon-success"
                                                {{ $CallToAction->icon == 'flaticon-success' ? 'selected' : '' }}>flaticon-success
                                            </option>
                                            <option value="flaticon-targeted-marketing"
                                                {{ $CallToAction->icon == 'flaticon-targeted-marketing' ? 'selected' : '' }}>
                                                flaticon-targeted-marketing</option>
                                            <option value="flaticon-teaching"
                                                {{ $CallToAction->icon == 'flaticon-teaching' ? 'selected' : '' }}>flaticon-teaching
                                            </option>
                                            <option value="flaticon-technology"
                                                {{ $CallToAction->icon == 'flaticon-technology' ? 'selected' : '' }}>flaticon-technology
                                            </option>
                                            <option value="flaticon-visitor"
                                                {{ $CallToAction->icon == 'flaticon-visitor' ? 'selected' : '' }}>flaticon-visitor
                                            </option>
                                            <option value="flaticon-web-development"
                                                {{ $CallToAction->icon == 'flaticon-web-development' ? 'selected' : '' }}>
                                                flaticon-web-development</option>
                                        </select>
                                        <div id="iconPreviewEdit"><i class="icon {{ $CallToAction->icon }}"></i></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">{{trans('web_trans.update_btn')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.onload = function() {
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
