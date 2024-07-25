@extends('layouts.master')
@section('title')
{{ trans('web_trans.video_one') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.video_one') }}</h1>
        </div>
        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-12">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{route('dash.video.one.update')}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col-md-6">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading') }}*</label>
                                        <input type="text" name="heading" class=" tajawal_black form-control"
                                            value="{{$VideoOne->heading}}" autocomplete="off">
                                    </div>
                                </div>
                                <div class=" tajawal_black col-md-6">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}*</label>
                                        <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                            value="{{$VideoOne->heading_ar}}" autocomplete="off">
                                    </div>
                                </div>
                                <div class=" tajawal_black col-md-6">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">Youtube Video Id *</label>
                                        <input type="text" name="youtube_video_id" class=" tajawal_black form-control"
                                            value="{{$VideoOne->youtube_video_id}}" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.existing_photo') }}</label>
                                        <div class=" tajawal_black photo-container">
                                            <a href=""
                                                class=" tajawal_black magnific"><img
                                                    src="{{ asset('assets/uploads/All_Sections/video_one/' . $VideoOne->photo) }}"
                                                    alt="{{ asset('assets/uploads/All_Sections/video_one/' . $VideoOne->photo) }}"></a>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.change_photo') }}</label>
                                        <div><input type="file" name="photo" autocomplete="off"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
