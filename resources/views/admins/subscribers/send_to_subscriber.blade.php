@extends('layouts.master')
@section('title')
{{ trans('web_trans.send_msg') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        @if (session('error'))
            <div class=" tajawal_black alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.send_msg') }}</h1>
            <a href="{{route('dash.subscriber.index')}}"
                class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-bars"></i>{{ trans('web_trans.subscribers') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{route('dash.send.email.subscriber')}}" method="post">
                   @csrf
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }} *</label>
                        <input type="text" class=" tajawal_black form-control" name="subject" autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.content') }}*</label>
                        <textarea name="content" class=" tajawal_black form-control h_200" cols="30" rows="10" autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">{{trans('web_trans.send_email')}}</button>
                </form>
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
