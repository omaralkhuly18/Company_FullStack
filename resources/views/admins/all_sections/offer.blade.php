@extends('layouts.master')
@section('title')
    {{ trans('web_trans.offers') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.offers') }}</h1>
        </div>


        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-7">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{ route('dash.offer.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading') }}</label>
                                <input type="text" name="heading" class=" tajawal_black form-control" value="{{ $Offer->heading }}"
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}</label>
                                <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                    value="{{ $Offer->heading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subheading') }}</label>
                                <input type="text" name="subheading" class=" tajawal_black form-control"
                                    value="{{ $Offer->sub_heading }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subheading_ar') }}</label>
                                <input type="text" name="subheading_ar" class=" tajawal_black form-control"
                                    value="{{ $Offer->sub_heading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.text') }}</label>
                                <textarea name="text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Offer->text }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.text_ar') }}</label>
                                <textarea name="text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Offer->text_ar }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Icon</label>
                                <select id="iconSelectEdit" name="icon" class=" tajawal_black form-select" autocomplete="off">
                                    <option value="flaticon-bank" {{ $Offer->icon == 'flaticon-bank' ? 'selected' : '' }}>
                                        flaticon-bank</option>
                                    <option value="flaticon-cloud"
                                        {{ $Offer->icon == 'flaticon-cloud' ? 'selected' : '' }}>
                                        flaticon-cloud</option>
                                    <option value="flaticon-completed-task"
                                        {{ $Offer->icon == 'flaticon-completed-task' ? 'selected' : '' }}>
                                        flaticon-completed-task</option>
                                    <option value="flaticon-design"
                                        {{ $Offer->icon == 'flaticon-design' ? 'selected' : '' }}>flaticon-design</option>
                                    <option value="flaticon-digital-services"
                                        {{ $Offer->icon == 'flaticon-digital-services' ? 'selected' : '' }}>
                                        flaticon-digital-services</option>
                                    <option value="flaticon-diplomat"
                                        {{ $Offer->icon == 'flaticon-diplomat' ? 'selected' : '' }}>flaticon-diplomat
                                    </option>
                                    <option value="flaticon-graphic-design"
                                        {{ $Offer->icon == 'flaticon-graphic-design' ? 'selected' : '' }}>
                                        flaticon-graphic-design</option>
                                    <option value="flaticon-group"
                                        {{ $Offer->icon == 'flaticon-group' ? 'selected' : '' }}>flaticon-group</option>
                                    <option value="flaticon-health-check"
                                        {{ $Offer->icon == 'flaticon-health-check' ? 'selected' : '' }}>
                                        flaticon-health-check</option>
                                    <option value="flaticon-job-promotion"
                                        {{ $Offer->icon == 'flaticon-job-promotion' ? 'selected' : '' }}>
                                        flaticon-job-promotion</option>
                                    <option value="flaticon-laptop"
                                        {{ $Offer->icon == 'flaticon-laptop' ? 'selected' : '' }}>flaticon-laptop</option>
                                    <option value="flaticon-learning"
                                        {{ $Offer->icon == 'flaticon-learning' ? 'selected' : '' }}>flaticon-learning
                                    </option>
                                    <option value="flaticon-marketing"
                                        {{ $Offer->icon == 'flaticon-marketing' ? 'selected' : '' }}>flaticon-marketing
                                    </option>
                                    <option value="flaticon-phone-call"
                                        {{ $Offer->icon == 'flaticon-phone-call' ? 'selected' : '' }}>flaticon-phone-call
                                    </option>
                                    <option value="flaticon-promotion"
                                        {{ $Offer->icon == 'flaticon-promotion' ? 'selected' : '' }}>flaticon-promotion
                                    </option>
                                    <option value="flaticon-rating"
                                        {{ $Offer->icon == 'flaticon-rating' ? 'selected' : '' }}>flaticon-rating</option>
                                    <option value="flaticon-recommend"
                                        {{ $Offer->icon == 'flaticon-recommend' ? 'selected' : '' }}>flaticon-recommend
                                    </option>
                                    <option value="flaticon-settings"
                                        {{ $Offer->icon == 'flaticon-settings' ? 'selected' : '' }}>flaticon-settings
                                    </option>
                                    <option value="flaticon-success"
                                        {{ $Offer->icon == 'flaticon-success' ? 'selected' : '' }}>flaticon-success
                                    </option>
                                    <option value="flaticon-targeted-marketing"
                                        {{ $Offer->icon == 'flaticon-targeted-marketing' ? 'selected' : '' }}>
                                        flaticon-targeted-marketing</option>
                                    <option value="flaticon-teaching"
                                        {{ $Offer->icon == 'flaticon-teaching' ? 'selected' : '' }}>flaticon-teaching
                                    </option>
                                    <option value="flaticon-technology"
                                        {{ $Offer->icon == 'flaticon-technology' ? 'selected' : '' }}>flaticon-technology
                                    </option>
                                    <option value="flaticon-visitor"
                                        {{ $Offer->icon == 'flaticon-visitor' ? 'selected' : '' }}>flaticon-visitor
                                    </option>
                                    <option value="flaticon-web-development"
                                        {{ $Offer->icon == 'flaticon-web-development' ? 'selected' : '' }}>
                                        flaticon-web-development</option>
                                </select>
                                <div id="iconPreview"><i class="icon {{ $Offer->icon }}"></i></div>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.tags') }}</label>
                                <textarea name="tagline" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Offer->tagline }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.tags_ar') }}</label>
                                <textarea name="tagline_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $Offer->tagline_ar }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Youtube Video Id</label>
                                <input type="text" name="youtube_video_id" class=" tajawal_black form-control"
                                    value="{{ $Offer->youtube_video_id }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for=""
                                            class=" tajawal_black form-label">{{ trans('web_trans.existing_photo') }}</label>
                                        <div class=" tajawal_black photo-container">
                                            <a href="{{ asset('assets/uploads/All_Sections/offers/' . $Offer->photo) }}"
                                                class=" tajawal_black magnific"><img
                                                    src="{{ asset('assets/uploads/All_Sections/offers/' . $Offer->photo) }}"
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
                            <a href="" data-bs-toggle="modal" data-bs-target="#add_modal"><i
                                    class=" tajawal_black fas fa-plus"></i> {{ trans('web_trans.add_item_btn') }}</a>
                        </div>

                        <!-- Add Offer Element Modal -->
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
                                        <form action="{{ route('dash.offer.element.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="offer_id" value="{{ $Offer->id }}">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.item') }}*</label>
                                                <input type="text" name="item" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.item_ar') }}*</label>
                                                <input type="text" name="item_ar" class=" tajawal_black form-control" required=""
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
                        <!-- End Offer Element Modal -->


                        <div class=" tajawal_black table-responsive">
                            <!-- Update Offer Element Modal -->
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
                                            <form action="{{ route('dash.offer.element.update') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="">
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.item') }}*</label>
                                                    <input type="text" name="item" class=" tajawal_black form-control"
                                                        value="" required="" autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.item_ar') }}*</label>
                                                    <input type="text" name="item_ar" class=" tajawal_black form-control"
                                                        value="" required="" autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <button type="submit"
                                                        class=" tajawal_black btn btn-primary btn-sm">{{ trans('web_trans.update_btn') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Offer Element Modal -->

                            <table class=" tajawal_black table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>{{ trans('web_trans.item') }}</th>
                                        <th>{{ trans('web_trans.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($OfferElements as $OfferElement)
                                        <tr>
                                            @if ($app->getLocale() == 'ar')
                                                <td>{{ $OfferElement->item_ar }}</td>
                                            @else
                                                <td>{{ $OfferElement->item }}</td>
                                            @endif
                                            <td>
                                                <div class=" tajawal_black btn-group" role="group">

                                                    <a href="" class=" tajawal_black btn btn-primary btn-sm btn-block edit-option"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal_1"
                                                        data-id="{{ $OfferElement->id }}"
                                                        data-item="{{ $OfferElement->item }}"
                                                        data-item_ar="{{ $OfferElement->item_ar }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <span style="color: white">s</span>
                                                    <form method="POST"
                                                        action="{{ route('dash.offer.element.delete', ['id' => $OfferElement->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class=" tajawal_black btn btn-danger btn-sm"
                                                            onclick="return confirm('{{ trans('web_trans.delete_sure_msg') }}')"><i
                                                                class=" tajawal_black fas fa-trash"></i></button>
                                                    </form>
                                                </div>
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
                var id = $(this).data('id');
                var item = $(this).data('item');
                var item_ar = $(this).data('item_ar');
                var modalSelector = $(this).data('bs-target'); // Get the modal selector
                var modal = $(modalSelector);
                modal.find('form').attr('action',
                    "{{ route('dash.offer.element.update') }}"); // Set the correct form action URL
                modal.find('input[name="id"]').val(id);
                modal.find('input[name="item"]').val(item);
                modal.find('input[name="item_ar"]').val(item_ar);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#iconSelect').change(function() {
                var selectedValue = $(this).val();
                var previewElement = $('#iconPreview');
                previewElement.html('<i class="icon ' + selectedValue + '"></i>');
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
