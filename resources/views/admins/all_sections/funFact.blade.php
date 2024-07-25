@extends('layouts.master')
@section('title')
    Fun Facts
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">Fun Facts</h1>
        </div>


        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-7">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{ route('dash.funfact.update') }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading') }}</label>
                                <input type="text" name="heading" class=" tajawal_black form-control" value="{{ $FunFact->heading }}"
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.heading_ar') }}</label>
                                <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                    value="{{ $FunFact->heading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subheading') }}</label>
                                <input type="text" name="subheading" class=" tajawal_black form-control"
                                    value="{{ $FunFact->sub_heading }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.subheading_ar') }}</label>
                                <input type="text" name="subheading_ar" class=" tajawal_black form-control"
                                    value="{{ $FunFact->sub_heading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.text') }}</label>
                                <textarea name="text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $FunFact->text }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.text_ar') }}</label>
                                <textarea name="text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $FunFact->text_ar }}</textarea>
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
                        <h4><b>{{trans('web_trans.elements')}}</b></h4>
                        <div class=" tajawal_black mb_10">
                            <a href="" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="fas fa-plus"></i>
                                Add Item</a>
                        </div>

                        <!-- Add FunFact Element Modal -->
                        <div class=" tajawal_black modal fade" id="add_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true" style="display: none;">
                            <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                <div class=" tajawal_black modal-content">
                                    <div class=" tajawal_black modal-header">
                                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">{{trans('web_trans.add_item_btn')}}</h1>
                                        <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class=" tajawal_black modal-body">
                                        <form action="{{ route('dash.funfact.element.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="fun_id" value="{{ $FunFact->id }}">
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
                                                <label for=""
                                                    class=" tajawal_black form-label">{{ trans('web_trans.number') }}*</label>
                                                <input type="number" name="number" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
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
                                                <div id="iconPreview"><i class="icon "></i></div>
                                            </div>

                                            <div class=" tajawal_black mb-3">
                                                <button type="submit" class=" tajawal_black btn btn-primary btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End FunFact Element Modal -->


                        <div class=" tajawal_black table-responsive">
                            <!-- update FunFact Element Modal -->
                            <div class=" tajawal_black modal fade" id="edit_modal_1" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" style="display: none;">
                                <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                    <div class=" tajawal_black modal-content">
                                        <div class=" tajawal_black modal-header">
                                            <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">Edit Element</h1>
                                            <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class=" tajawal_black modal-body">
                                            <form action="{{ route('dash.funfact.element.update') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="">
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
                                                    <label for=""
                                                        class=" tajawal_black form-label">{{ trans('web_trans.number') }}*</label>
                                                    <input type="number" name="number" class=" tajawal_black form-control"
                                                        value="" required="" autocomplete="off">
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
                                                        <option value="flaticon-job-promotion" selected="">
                                                            flaticon-job-promotion</option>
                                                        <option value="flaticon-laptop">flaticon-laptop</option>
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
                                                    <div id="iconPreviewEdit"><i class="icon "></i>
                                                    </div>
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <button type="submit" class=" tajawal_black btn btn-primary btn-sm">Update</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End FunFact Element Modal -->
                            <table class=" tajawal_black table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>{{ trans('web_trans.name') }}</th>
                                        <th>{{ trans('web_trans.number') }}</th>
                                        <th>{{ trans('web_trans.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($FunFactElements as $FunFactElement)
                                        <tr>
                                            <td>
                                                <i class="{{ $FunFactElement->icon }} fz_40"></i>
                                            </td>
                                            @if ($app->getLocale() == 'ar')
                                                <td>{{ $FunFactElement->name_ar }}</td>
                                            @else
                                                <td>{{ $FunFactElement->name }}</td>
                                            @endif
                                            <td>{{ $FunFactElement->number }}</td>
                                            <td>
                                                <div class=" tajawal_black btn-group" role="group">

                                                    <a href="#" class=" tajawal_black btn btn-primary btn-sm btn-block edit-option"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal_1"
                                                        data-id="{{ $FunFactElement->id }}"
                                                        data-name="{{ $FunFactElement->name }}"
                                                        data-name_ar="{{ $FunFactElement->name_ar }}"
                                                        data-number="{{ $FunFactElement->number }}"
                                                        data-icon="{{ $FunFactElement->icon }}"><i
                                                            class=" tajawal_black fas fa-edit"></i></a>

                                                    <span style="color: white">s</span>
                                                    <form method="POST"
                                                        action="{{ route('dash.funfact.element.delete', ['id' => $FunFactElement->id]) }}">
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
                var id = $(this).data('id');
                var name = $(this).data('name');
                var name_ar = $(this).data('name_ar');
                var number = $(this).data('number');
                var icon = $(this).data('icon');
                var modalSelector = $(this).data('bs-target'); // Get the modal selector
                var modal = $(modalSelector);

                // Set the name value in the modal's input field
                modal.find('input[name="id"]').val(id);
                modal.find('input[name="name"]').val(name);
                modal.find('input[name="name_ar"]').val(name_ar);
                modal.find('input[name="number"]').val(number);

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
