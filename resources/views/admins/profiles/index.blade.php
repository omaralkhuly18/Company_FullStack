@extends('layouts.master')
@section('title')
    {{trans('web_trans.profile')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{trans('web_trans.edit_profile')}}</h1>
        </div>

        <form action="{{route('dash.profile.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class=" tajawal_black card shadow mb-4 t-left">
                <div class=" tajawal_black card-body">
                    <div class=" tajawal_black row">
                        <div class=" tajawal_black col-md-12">
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.existing_photo')}}</label>
                                <div>
                                    <img src="{{asset('assets/dist-admin/uploads/admin.jpg')}}"
                                        alt="" class=" tajawal_black w_200">
                                </div>
                            </div>
                            
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.name')}}</label>
                                <input type="text" name="name" class=" tajawal_black form-control" value="{{ Auth::user()->name}}"
                                    autocomplete="off" required>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.email')}}</label>
                                <input type="text" name="email" class=" tajawal_black form-control" value="{{ Auth::user()->email }}"
                                    autocomplete="off" required>
                            </div>

                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.phone')}}</label>
                                <input type="text" name="phone" class=" tajawal_black form-control" value="{{ Auth::user()->phone }}"
                                    autocomplete="off" required>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.password')}} current</label>
                                <input type="password" name="password" class=" tajawal_black form-control" autocomplete="off" required>
                            </div>


                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.password')}} New</label>
                                <input type="password" name="new_password" class=" tajawal_black form-control" autocomplete="off" >
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.confirm_password')}}</label>
                                <input type="password" name="password_confirmation" class=" tajawal_black form-control" autocomplete="off">
                            </div>
                            <button type="submit" class=" tajawal_black btn btn-success btn-block mb_50 btn-common">{{trans('web_trans.update_btn')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection

@section('js')
@endsection
