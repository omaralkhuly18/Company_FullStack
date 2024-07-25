@extends('layouts.master')
@section('title')
    {{ trans('web_trans.choose_two') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.choose_two') }}</h1>
        </div>


        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-7">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{ route('dash.choose.two.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading') }}</label>
                                <input type="text" name="heading" class=" tajawal_black form-control"
                                    value="{{ $WhyChooseTwo->heading }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}</label>
                                <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                    value="{{ $WhyChooseTwo->heading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subheading') }}</label>
                                <input type="text" name="subheading" class=" tajawal_black form-control"
                                    value="{{ $WhyChooseTwo->subheading }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subheading_ar') }}</label>
                                <input type="text" name="subheading_ar" class=" tajawal_black form-control"
                                    value="{{ $WhyChooseTwo->subheading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.photo_over_text') }}</label>
                                <textarea name="photo_over_text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $WhyChooseTwo->photo_over_text }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for=""
                                    class=" tajawal_black form-label">{{ trans('web_trans.photo_over_text_ar') }}</label>
                                <textarea name="photo_over_text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $WhyChooseTwo->photo_over_text_ar }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for=""
                                    class=" tajawal_black form-label">{{ trans('web_trans.photo_over_heading') }}</label>
                                <input type="text" name="photo_over_heading" class=" tajawal_black form-control"
                                    value="{{ $WhyChooseTwo->photo_over_heading }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for=""
                                    class=" tajawal_black form-label">{{ trans('web_trans.photo_over_heading_ar') }}</label>
                                <input type="text" name="photo_over_heading_ar" class=" tajawal_black form-control"
                                    value="{{ $WhyChooseTwo->photo_over_heading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for=""
                                            class=" tajawal_black form-label">{{ trans('web_trans.existing_photo') }}</label>
                                        <div class=" tajawal_black photo-container">
                                            <a href="{{ asset('assets/uploads/All_Sections/choose_two/' . $WhyChooseTwo->photo) }}"
                                                class=" tajawal_black magnific"><img
                                                    src="{{ asset('assets/uploads/All_Sections/choose_two/' . $WhyChooseTwo->photo) }}"
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
                                        <form action="{{ route('dash.choose.two.element.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="add_id" value="{{ $WhyChooseTwo->id }}"
                                                autocomplete="off">
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.heading') }}*</label>
                                                <textarea name="heading" class=" tajawal_black form-control h_100" cols="30" rows="10" required=""
                                                    autocomplete="off"></textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}*</label>
                                                <textarea name="heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" required=""
                                                    autocomplete="off"></textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Icon*</label>
                                                <select id="iconSelect" name="icon" class=" tajawal_black form-select"
                                                    autocomplete="off">
                                                    <option value="">Select Icon</option>
                                                    <option value="flaticon-bank">flaticon-bank</option>
                                                    <option value="flaticon-cloud">flaticon-cloud</option>
                                                    <option value="flaticon-completed-task">flaticon-completed-task
                                                    </option>
                                                    <option value="flaticon-design">flaticon-design</option>
                                                    <option value="flaticon-digital-services">flaticon-digital-services
                                                    </option>
                                                    <option value="flaticon-diplomat">flaticon-diplomat</option>
                                                    <option value="flaticon-graphic-design">flaticon-graphic-design
                                                    </option>
                                                    <option value="flaticon-group">flaticon-group</option>
                                                    <option value="flaticon-health-check">flaticon-health-check</option>
                                                    <option value="flaticon-job-promotion">flaticon-job-promotion</option>
                                                    <option value="flaticon-laptop">flaticon-laptop</option>
                                                    <option value="flaticon-learning">flaticon-learning</option>
                                                    <option value="flaticon-marketing">flaticon-marketing</option>
                                                    <option value="flaticon-phone-call">flaticon-phone-call</option>
                                                    <option value="flaticon-promotion">flaticon-promotion</option>
                                                    <option value="flaticon-rating">flaticon-rating</option>
                                                    <option value="flaticon-recommend">flaticon-recommend</option>
                                                    <option value="flaticon-settings">flaticon-settings</option>
                                                    <option value="flaticon-success">flaticon-success</option>
                                                    <option value="flaticon-targeted-marketing">flaticon-targeted-marketing
                                                    </option>
                                                    <option value="flaticon-teaching">flaticon-teaching</option>
                                                    <option value="flaticon-technology">flaticon-technology</option>
                                                    <option value="flaticon-visitor">flaticon-visitor</option>
                                                    <option value="flaticon-web-development">flaticon-web-development
                                                    </option>
                                                </select>
                                                <div id="iconPreview"></div>
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
                                            <form action="{{ route('dash.choose.two.element.update') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="update_id" value="">
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.heading') }}*</label>
                                                    <textarea name="heading" class=" tajawal_black form-control h_100" cols="30" rows="10" required=""
                                                        autocomplete="off"></textarea>
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}*</label>
                                                    <textarea name="heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" required=""
                                                        autocomplete="off"></textarea>
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">Icon*</label>
                                                    <select id="iconSelectEdit" name="icon" class=" tajawal_black form-select"
                                                        autocomplete="off">
                                                        <option value="flaticon-bank">flaticon-bank</option>
                                                        <option value="flaticon-cloud">flaticon-cloud</option>
                                                        <option value="flaticon-completed-task">flaticon-completed-task
                                                        </option>
                                                        <option value="flaticon-design">flaticon-design</option>
                                                        <option value="flaticon-digital-services">flaticon-digital-services
                                                        </option>
                                                        <option value="flaticon-diplomat">flaticon-diplomat</option>
                                                        <option value="flaticon-graphic-design">flaticon-graphic-design
                                                        </option>
                                                        <option value="flaticon-group">flaticon-group</option>
                                                        <option value="flaticon-health-check">flaticon-health-check
                                                        </option>
                                                        <option value="flaticon-job-promotion">flaticon-job-promotion
                                                        </option>
                                                        <option value="flaticon-laptop" selected="">flaticon-laptop
                                                        </option>
                                                        <option value="flaticon-learning">flaticon-learning</option>
                                                        <option value="flaticon-marketing">flaticon-marketing</option>
                                                        <option value="flaticon-phone-call">flaticon-phone-call</option>
                                                        <option value="flaticon-promotion">flaticon-promotion</option>
                                                        <option value="flaticon-rating">flaticon-rating</option>
                                                        <option value="flaticon-recommend">flaticon-recommend</option>
                                                        <option value="flaticon-settings">flaticon-settings</option>
                                                        <option value="flaticon-success">flaticon-success</option>
                                                        <option value="flaticon-targeted-marketing">
                                                            flaticon-targeted-marketing
                                                        </option>
                                                        <option value="flaticon-teaching">flaticon-teaching</option>
                                                        <option value="flaticon-technology">flaticon-technology</option>
                                                        <option value="flaticon-visitor">flaticon-visitor</option>
                                                        <option value="flaticon-web-development">flaticon-web-development
                                                        </option>
                                                    </select>
                                                    <div id="iconPreviewEdit"><i class="icon "></i></div>
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

                            <table class=" tajawal_black table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>{{ trans('web_trans.heading') }}</th>
                                        <th>{{ trans('web_trans.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($WhyChooseTwoElements as $WhyChooseTwoElement)
                                        <tr>
                                            <td>
                                                <i class="{{ $WhyChooseTwoElement->icon }} fz_40"></i>
                                            </td>
                                            @if ($app->getLocale() == 'ar')
                                                <td>{{ $WhyChooseTwoElement->heading_ar }}</td>
                                            @else
                                                <td>{{ $WhyChooseTwoElement->heading }}</td>
                                            @endif
                                            <td>
                                                <div class=" tajawal_black btn-group" role="group">
                                                    <a href="" class=" tajawal_black btn btn-primary btn-sm btn-block edit-option"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal_1"
                                                        data-update_id="{{ $WhyChooseTwoElement->id }}"
                                                        data-icon="{{ $WhyChooseTwoElement->icon }}"
                                                        data-heading="{{ $WhyChooseTwoElement->heading }}"
                                                        data-heading_ar="{{ $WhyChooseTwoElement->heading_ar }}"><i
                                                            class=" tajawal_black fas fa-edit"></i></a>
                                                    <span style="color: white">s</span>
                                                    <form method="POST"
                                                        action="{{ route('dash.choose.two.element.delete', ['id' => $WhyChooseTwoElement->id]) }}">
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

        <script>
            window.onload = function() {
                document.getElementById('iconSelect').addEventListener('change', function() {
                    var selectedValue = this.value;
                    var previewElement = document.getElementById('iconPreview');
                    previewElement.innerHTML = '<i class="icon ' + selectedValue + '"></i>';
                });
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
        $(document).ready(function() {
            $('.edit-option').click(function() {
                var update_id = $(this).data('update_id');
                var heading = $(this).data('heading');
                var heading_ar = $(this).data('heading_ar');
                var icon = $(this).data('icon');
                var modalSelector = $(this).data('bs-target'); // Get the modal selector
                var modal = $(modalSelector);

                // Set the values in the modal's input fields
                modal.find('input[name="update_id"]').val(update_id);
                modal.find('textarea[name="heading"]').val(heading);
                modal.find('textarea[name="heading_ar"]').val(heading_ar);
                // Select the correct option in the dropdown
                modal.find('select[name="icon"]').val(icon);

                // Update the icon preview (if needed)
                var selectedIcon = modal.find('select[name="icon"]').val();
                modal.find('#iconPreviewEdit').html('<i class="icon ' + selectedIcon + '"></i>');
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
