@extends('layouts.master')
@section('title')
    {{ trans('web_trans.update_item_btn') }}
@endsection
@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.update_item_btn') }}</h1>
            <a href="{{ route('dash.client.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-bars"></i> {{ trans('web_trans.all_items_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.client.update') }}" method="post"enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class=" tajawal_black row">
                        <div class=" tajawal_black col-md-4">
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">URL</label>
                                <input type="text" name="url" class=" tajawal_black form-control" value="{{ $client->url }}"
                                    autocomplete="off" required>
                                @error('url')
                                    @foreach ($errors->get('url') as $error)
                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                    @endforeach
                                @enderror
                                <input type="hidden" name="id" value="{{ $client->id }}" required>

                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black row">
                        <div class=" tajawal_black col-md-4">
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.existing_photo') }}</label>
                                <div><img src="{{ asset('assets/uploads/clients/' . $client->photo) }}" alt=""
                                        class=" tajawal_black w_200"></div>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.change_photo') }}</label>
                                <div><input type="file" name="photo" autocomplete="off"></div>
                                @error('photo')
                                    @foreach ($errors->get('photo') as $error)
                                        <div class=" tajawal_black text-danger">{{ $error }}</div>
                                    @endforeach
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
