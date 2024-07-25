@extends('layouts.master')
@section('title')
{{trans('web_trans.video_two')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{trans('web_trans.video_two')}}</h1>
        </div>
        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-12">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{route('dash.video.two.update')}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col-md-12">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}*</label>
                                        <textarea name="heading" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off">{{$VideoTwo->heading}}</textarea>
                                    </div>
                                </div>
                                <div class=" tajawal_black col-md-12">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}*</label>
                                        <textarea name="heading_ar" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off">{{$VideoTwo->heading_ar}}</textarea>
                                    </div>
                                </div>
                                <div class=" tajawal_black col-md-12">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">Youtube Video Id *</label>
                                        <input type="text" name="youtube_video_id" class=" tajawal_black form-control"
                                            value="{{$VideoTwo->youtube_video_id}}" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">Update</button>
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
