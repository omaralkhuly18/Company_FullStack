@extends('layouts.master')
@section('title')
    {{ trans('web_trans.feature_two') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.feature_two') }}</h1>
        </div>


        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-7">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{ route('dash.feature.two.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading') }}</label>
                                <input type="text" name="heading" class=" tajawal_black form-control" value="{{ $FeatureTwo->heading }}"
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}</label>
                                <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                    value="{{ $FeatureTwo->heading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subheading') }}</label>
                                <input type="text" name="subheading" class=" tajawal_black form-control"
                                    value="{{ $FeatureTwo->subheading }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subheading_ar') }}</label>
                                <input type="text" name="subheading_ar" class=" tajawal_black form-control"
                                    value="{{ $FeatureTwo->subheading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.text') }}</label>
                                <textarea name="text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $FeatureTwo->text }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.text_ar') }}</label>
                                <textarea name="text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $FeatureTwo->text_ar }}</textarea>
                            </div>
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for=""
                                            class=" tajawal_black form-label">{{ trans('web_trans.existing_photo') }}</label>
                                        <div class=" tajawal_black photo-container">
                                            <a href="{{ asset('assets/uploads/All_Sections/feature_two/' . $FeatureTwo->photo) }}"
                                                class=" tajawal_black magnific"><img
                                                    src="{{ asset('assets/uploads/All_Sections/feature_two/' . $FeatureTwo->photo) }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for=""
                                            class=" tajawal_black form-label">{{ trans('web_trans.change_photo') }}</label>
                                        <div><input type="file" name="photo" autocomplete="off"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class=" tajawal_black btn btn-success mb-50 btn-common">{{ trans('web_trans.update_btn') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-md-5">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <h4><b>{{ trans('web_trans.elements') }}</b></h4>
                        <div class=" tajawal_black mb_10">
                            <a href="" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="fas fa-plus"></i>
                                {{ trans('web_trans.add_item_btn') }}</a>
                        </div>

                        <!-- Modal -->
                        <div class=" tajawal_black modal fade" id="add_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                <div class=" tajawal_black modal-content">
                                    <div class=" tajawal_black modal-header">
                                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                                            {{ trans('web_trans.add_item_btn') }}</h1>
                                        <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class=" tajawal_black modal-body">
                                        <form action="{{ route('dash.feature.two.element.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="add_id" value="{{ $FeatureTwo->id }}">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                    *</label>
                                                <input type="text" name="name" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}
                                                    *</label>
                                                <input type="text" name="name_ar" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <button type="submit"
                                                    class=" tajawal_black btn btn-primary btn-sm">{{ trans('web_trans.submit_btn') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // Modal -->


                        <div class=" tajawal_black table-responsive">
                            <div class=" tajawal_black modal fade" id="edit_modal_1" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                    <div class=" tajawal_black modal-content">
                                        <div class=" tajawal_black modal-header">
                                            <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                                                {{ trans('web_trans.update_btn') }}</h1>
                                            <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class=" tajawal_black modal-body">
                                            <form action="{{ route('dash.feature.two.element.update') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="update_id" value="">
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.name') }} *</label>
                                                    <input type="text" name="name" class=" tajawal_black form-control"
                                                        value="" required="" autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }} *</label>
                                                    <input type="text" name="name_ar" class=" tajawal_black form-control"
                                                        value="" required="" autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <button type="submit"
                                                        class=" tajawal_black btn btn-primary btn-sm">{{ trans('web_trans.update') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class=" tajawal_black table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>{{ trans('web_trans.name') }}</th>
                                        <th>{{ trans('web_trans.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($FeatureTwoElements as $FeatureTwoElement)
                                        <tr>
                                            @if ($app->getLocale() == 'ar')
                                                <td>{{ $FeatureTwoElement->name_ar }}</td>
                                            @else
                                                <td>{{ $FeatureTwoElement->name }}</td>
                                            @endif
                                            <td>
                                                <div class=" tajawal_black btn-group" role="group">
                                                    <a href="" class=" tajawal_black btn btn-primary btn-sm btn-block edit-option"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal_1"
                                                        data-update_id="{{ $FeatureTwoElement->id }}"
                                                        data-name="{{ $FeatureTwoElement->name }}"
                                                        data-name_ar="{{ $FeatureTwoElement->name_ar }}"><i
                                                            class=" tajawal_black fas fa-edit"></i></a>
                                                    <span style="color: white">s</span>
                                                    <form method="POST"
                                                        action="{{ route('dash.feature.two.element.delete', ['id' => $FeatureTwoElement->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class=" tajawal_black btn btn-danger btn-sm"
                                                            onclick="return confirm('{{ trans('web_trans.delete_sure_msg') }}')"><i
                                                                class=" tajawal_black fas fa-trash"></i></button>
                                                    </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.edit-option').click(function() {
                var update_id = $(this).data('update_id');
                var name = $(this).data('name');
                var name_ar = $(this).data('name_ar');
                var modalSelector = $(this).data('bs-target'); // Get the modal selector
                var modal = $(modalSelector);

                // Set the values in the modal's input fields
                modal.find('input[name="update_id"]').val(update_id);
                modal.find('input[name="name"]').val(name);
                modal.find('input[name="name_ar"]').val(name_ar);

            });
        });
    </script>
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
