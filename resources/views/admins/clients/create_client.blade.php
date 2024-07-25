@extends('layouts.master')
@section('title')
{{ trans('web_trans.add_client') }}
@endsection

@section('css')
@endsection

@section('content')
<div class=" tajawal_black container-fluid">
    <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.add_client') }}</h1>
        <a href="{{ route('dash.client.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-bars"></i>
            {{ trans('web_trans.all_items_btn') }}
        </a>
    </div>

    <div class=" tajawal_black card shadow mb-4">
        <div class=" tajawal_black card-body">
            <form action="{{ route('dash.client.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" name="url" id="photoClientsURL" class="form-control" value="" autocomplete="off" required>
                            @error('url')
                            @foreach ($errors->get('url') as $error)
                            <div id="photoClientsPreview" class="text-danger">{{ $error }}</div>
                            @endforeach
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="photoUpload" class="form-label">{{ trans('web_trans.photo') }}*</label>
                            <div>
                                <label for="photoUpload" class="btn btn-primary">
                                    {{ trans('web_trans.upload_image') }}
                                </label>
                                <strong>{{ trans('web_trans.or') }}</strong>
                                <div class="dragBox" ondragover="event.preventDefault();" ondrop="drop(event, 'photoClientsPreview')">
                                    {{ trans('web_trans.drag_and_drop_image_here') }}
                                    <input type="file" name="photo" id="photoUpload" class="hidden-input" onchange="dragNdrop(event, 'photoClientsPreview')" required />
                                </div>
                            </div>
                            <div id="photoClientsPreview" 
                            style=" margin-bottom: 10px; margin-top: 10px; "></div>
                            @error('photo')
                            @foreach ($errors->get('photo') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-50 btn-common">{{ trans('web_trans.submit_btn') }}</button>
            </form>

        </div>
    </div>

</div>
@endsection

@section('js')
@endsection