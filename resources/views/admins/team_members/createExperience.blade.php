@extends('layouts.master')
@section('title')
    {{ trans('web_trans.experience') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.experience') }}</h1>
            <div>
                <a href="{{ route('dash.team.index') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                        class=" tajawal_black fas fa-backward"></i> {{ trans('web_trans.back_team') }}</a>
                <a href="" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm" data-bs-toggle="modal"
                    data-bs-target="#experience_add_modal"><i class="fas fa-plus"></i>
                    {{ trans('web_trans.create_experience') }}</a>

                <!-- Add Experience Modal -->
                <div class=" tajawal_black modal fade" id="experience_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true" style="display: none;">
                    <div class=" tajawal_black modal-dialog modal-dialog-centered">
                        <div class=" tajawal_black modal-content">
                            <div class=" tajawal_black modal-header">
                                <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                                    {{ trans('web_trans.create_experience') }}</h1>
                                <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class=" tajawal_black modal-body">
                                <form action="{{ route('dash.team.experience.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="add_id" required="" value="{{ $id }}">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }} *</label>
                                        <input type="text" name="name" class=" tajawal_black form-control" required=""
                                            autocomplete="off">
                                        @error('name')
                                            @foreach ($errors->get('name') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }} *</label>
                                        <input type="text" name="name_ar" class=" tajawal_black form-control" required=""
                                            autocomplete="off">
                                        @error('name_ar')
                                            @foreach ($errors->get('name_ar') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{ trans('web_trans.percentage') }}
                                            *</label>
                                        <input type="number" name="percentage" class=" tajawal_black form-control" required=""
                                            autocomplete="off" min="0" max="100">
                                        @error('percentage')
                                            @foreach ($errors->get('percentage') as $error)
                                                <div class=" tajawal_black text-danger">{{ $error }}</div>
                                            @endforeach
                                        @enderror
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
                <!-- End Experience Modal -->
            </div>
        </div>
        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <div class=" tajawal_black table-responsive">

                    <!-- update Experience Modal -->
                    <div class=" tajawal_black modal fade" id="experience_edit_modal_1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true" style="display: none;">
                        <div class=" tajawal_black modal-dialog modal-dialog-centered">
                            <div class=" tajawal_black modal-content">
                                <div class=" tajawal_black modal-header">
                                    <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                                        {{ trans('web_trans.update_experience') }}</h1>
                                    <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class=" tajawal_black modal-body">
                                    <form action="{{ route('dash.team.experience.update') }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id" value="" required="">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }}
                                                *</label>
                                            <input type="text" name="name" class=" tajawal_black form-control" value="Technology"
                                                required="" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}
                                                *</label>
                                            <input type="text" name="name_ar" class=" tajawal_black form-control" value="Technology"
                                                required="" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.percentage') }}
                                                *</label>
                                            <input type="number" name="percentage" class=" tajawal_black form-control" value="90"
                                                required="" autocomplete="off" min="0" max="100">
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
                    <!-- End Experience Modal -->

                    <div id="dtable_wrapper" class=" tajawal_black dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class=" tajawal_black row dt-row">
                            <div class=" tajawal_black col-sm-12">
                                <table class=" tajawal_black table table-bordered table-sm dataTable no-footer" id="dtable"
                                    aria-describedby="dtable_info">
                                    <thead>
                                        <tr>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="SL: activate to sort column ascending"
                                                style="width: 109.531px;">SL</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 253.578px;">{{ trans('web_trans.name') }}</th>
                                            <th class=" tajawal_black sorting sorting_desc" tabindex="0" aria-controls="dtable"
                                                rowspan="1" colspan="1"
                                                aria-label="Percentage: activate to sort column ascending"
                                                style="width: 299.125px;" aria-sort="descending">
                                                {{ trans('web_trans.percentage') }}</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 221.578px;">{{ trans('web_trans.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($TeamExpreiences as $TeamExpreience)
                                            <tr class=" tajawal_black odd">
                                                <td class=" tajawal_black ">{{ $loop->iteration }}</td>
                                                @if ($app->getLocale() == 'ar')
                                                    <td>{{ $TeamExpreience->name_ar }}</td>
                                                @else
                                                    <td>{{ $TeamExpreience->name }}</td>
                                                @endif
                                                <td class=" tajawal_black sorting_1">
                                                    {{ $TeamExpreience->percentage }}
                                                </td>
                                                <td>
                                                    <div class=" tajawal_black btn-group" role="group">
                                                        <a href="#" class=" tajawal_black btn btn-primary btn-sm edit-option"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#experience_edit_modal_1"
                                                            data-name="{{ $TeamExpreience->name }}"
                                                            data-name_ar="{{ $TeamExpreience->name_ar }}"
                                                            data-percentage="{{ $TeamExpreience->percentage }}"
                                                            data-id="{{ $TeamExpreience->id }}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <span style="color: white">s</span>
                                                        <form method="POST"
                                                            action="{{ route('dash.team.experience.delete', ['id' => $TeamExpreience->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button href="#" class=" tajawal_black btn btn-danger btn-sm"
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
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.edit-option').click(function() {
                var name = $(this).data('name');
                var name_ar = $(this).data('name_ar');
                var percentage = $(this).data('percentage');
                var id = $(this).data('id');
                var modalId = $(this).data('bs-target'); // Get the modal ID associated with the button
                var modal = $(modalId);

                // Set the name value in the modal's input field
                modal.find('input[name="name"]').val(name);
                modal.find('input[name="name_ar"]').val(name_ar);
                modal.find('input[name="percentage"]').val(percentage);
                modal.find('input[name="id"]').val(id);
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
