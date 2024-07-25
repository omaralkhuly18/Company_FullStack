@extends('layouts.master')
@section('title')
    {{ trans('web_trans.menu_manage') }}
@endsection

@section('css')
@endsection


@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.menu_manage') }}</h1>
        </div>

        <form action="{{ route('dash.menu.manage.update') }}" method="post">
            @csrf
            @method('PUT')
            <div class=" tajawal_black row">
                <div class=" tajawal_black col-md-8">
                    <div class=" tajawal_black card shadow mb-4">
                        <div class=" tajawal_black card-body">
                            <div class=" tajawal_black table-responsive">
                                <table class=" tajawal_black table table-bordered table-sm" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>{{ trans('web_trans.name') }}</th>
                                            <th>{{ trans('web_trans.name_ar') }}</th>
                                            <th>{{ trans('web_trans.status') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($MenuManages as $index => $MenuManage)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><input name="menu_name[]" class=" tajawal_black form-control" value="{{$MenuManage->menu_name }}" ></td>
                                                <td><input name="menu_name_ar[]" class=" tajawal_black form-control" value="{{$MenuManage->menu_name_ar }}" ></td>

                                                <td>
                                                    <input type="hidden" name="menu_id[]" value="{{ $MenuManage->id }}">
                                                    <select name="status[]" class=" tajawal_black form-select" autocomplete="off">
                                                        <option value="Show" {{ $MenuManage->status == 1 ? 'selected' : '' }}>Show</option>
                                                        <option value="Hide" {{ $MenuManage->status == 0 ? 'selected' : '' }}>Hide</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <button type="submit" class=" tajawal_black btn btn-success">{{ trans('web_trans.update_btn') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
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













{{-- @extends('layouts.master')
@section('title')
    {{ trans('web_trans.menu_manage') }}
@endsection

@section('css')
@endsection


@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.menu_manage') }}</h1>
            <div class=" tajawal_black mb_10">
                <a href="" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="fas fa-plus"></i>
                    {{ trans('web_trans.add_menu') }}</a>
            </div>
        </div>

        <div class=" tajawal_black modal fade" id="add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
            style="display: none;">
            <div class=" tajawal_black modal-dialog modal-dialog-centered">
                <div class=" tajawal_black modal-content">
                    <div class=" tajawal_black modal-header">
                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                            {{ trans('web_trans.add_menu') }}</h1>
                        <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class=" tajawal_black modal-body">
                        <form action="{{ route('dash.menu.manage.store') }}" method="post">
                            @csrf

                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }}*</label>
                                <input type="text" name="name_add" class=" tajawal_black form-control" required=""
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }}*</label>
                                <input type="text" name="name_ar_add" class=" tajawal_black form-control" required=""
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <select name="parent" class=" tajawal_black form-select parent-select" autocomplete="off" required>
                                    <option value="parent">{{ trans('web_trans.parent_menu') }}</option>
                                    <option value="child">{{ trans('web_trans.child_menu') }}</option>
                                </select>
                            </div>
                            <div class=" tajawal_black mb-3 child-name-field" style="display: none;">
                                <select name="child_name" class=" tajawal_black form-select parent-select" autocomplete="off">
                                    @foreach ($MenuManages as $MenuManage)
                                        <option value="{{ $MenuManage->id }}">
                                            @if ($app->getLocale() == 'ar')
                                                {{ $MenuManage->menu_name_ar }}
                                            @else
                                                {{ $MenuManage->id }}
                                                {{ $MenuManage->menu_name }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <select name="status" class=" tajawal_black form-select" autocomplete="off" required>
                                    <option value="1">Show</option>
                                    <option value="0">Hide</option>
                                </select>
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



        <div class=" tajawal_black modal fade" id="edit_modal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class=" tajawal_black modal-dialog modal-dialog-centered">
                <div class=" tajawal_black modal-content">
                    <div class=" tajawal_black modal-header">
                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">
                            {{ trans('web_trans.update_btn') }}</h1>
                        <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class=" tajawal_black modal-body">
                        <form action="{{ route('dash.menu.manage.update') }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="update_id" value="">
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name') }} *</label>
                                <input type="text" name="name" class=" tajawal_black form-control" value="" required=""
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.name_ar') }} *</label>
                                <input type="text" name="name_ar" class=" tajawal_black form-control" value="" required=""
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <select name="parent_update" class=" tajawal_black form-select parent_update-select" autocomplete="off"
                                    required>
                                    <option value="parent">{{ trans('web_trans.parent_menu') }}</option>
                                    <option value="child">{{ trans('web_trans.child_menu') }}</option>
                                </select>
                            </div>
                            <div class=" tajawal_black mb-3 child-name-field_update" style="display: none;">
                                <select name="child_name_update" class=" tajawal_black form-select parent-select" autocomplete="off">
                                    @foreach ($MenuManages as $MenuManage)
                                        <option value="{{ $MenuManage->id }}">
                                            @if ($app->getLocale() == 'ar')
                                                {{ $MenuManage->menu_name_ar }}
                                            @else
                                                {{ $MenuManage->menu_name }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <select name="status" class=" tajawal_black form-select" autocomplete="off" required>
                                    <option value="1">Show</option>
                                    <option value="0">Hide</option>
                                </select>
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
        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-12">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black table-responsive">
                            <table class=" tajawal_black table table-bordered table-sm" id="" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>{{ trans('web_trans.name') }}</th>
                                        <th>{{ trans('web_trans.name_ar') }}</th>
                                        <th>{{ trans('web_trans.parent_menu') }}</th>
                                        <th>{{ trans('web_trans.parent_menu_name') }}</th>
                                        <th>{{ trans('web_trans.status') }}</th>
                                        <th>{{ trans('web_trans.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($MenuManages as $index => $MenuManage)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $MenuManage->menu_name }}</td>
                                            <td>{{ $MenuManage->menu_name_ar }}</td>
                                            <td>
                                                @if ($MenuManage->is_parent == 1)
                                                    {{ trans('web_trans.parent_menu') }}
                                                @else
                                                    {{ trans('web_trans.child_menu') }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($MenuManage->parent)
                                                    @if ($app->getLocale() == 'ar')
                                                        {{ $MenuManage->parent->menu_name_ar }}
                                                    @else
                                                        {{ $MenuManage->parent->menu_name }}
                                                    @endif
                                                @else
                                                    {{ trans('web_trans.parent_menu') }}
                                                @endif
                                            </td>
                                            <td>
                                                @if ($MenuManage->status == 1)
                                                    show
                                                @else
                                                    hide
                                                @endif
                                            </td>
                                            <td>
                                                <div class=" tajawal_black btn-group" role="group">
                                                    <a href="" class=" tajawal_black btn btn-primary btn-sm btn-block edit-option"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal_1"
                                                        data-update_id="{{ $MenuManage->id }}"
                                                        data-name="{{ $MenuManage->menu_name }}"
                                                        data-name_ar="{{ $MenuManage->menu_name_ar }}"
                                                        data-parent_update="{{ $MenuManage->is_parent }}"
                                                        data-child_name_update="{{ $MenuManage->parent_id }}"
                                                        data-status="{{ $MenuManage->status }}"><i
                                                            class=" tajawal_black fas fa-edit"></i></a>
                                                    <span style="color: white">s</span>
                                                    <form method="POST"
                                                        action="{{ route('dash.menu.manage.delete', ['id' => $MenuManage->id]) }}">
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
                var parent_update = $(this).data('parent_update') == 1 ? 'parent' : 'child';
                var child_name_update = $(this).data('child_name_update');
                var status = $(this).data('status');
                var modalSelector = $(this).data('bs-target'); // Get the modal selector
                var modal = $(modalSelector);

                // Set the values in the modal's input fields
                modal.find('input[name="update_id"]').val(update_id);
                modal.find('input[name="name"]').val(name);
                modal.find('input[name="name_ar"]').val(name_ar);
                modal.find('select[name="parent_update"]').val(parent_update);
                modal.find('select[name="child_name_update"]').val(child_name_update);

                // Set the status selection based on the retrieved value
                modal.find('select[name="status"]').val(status); // Set the value

                // Toggle child name field visibility based on parent selection
                if (parent_update === 'parent') {
                    modal.find('.child-name-field_update').hide();
                } else {
                    modal.find('.child-name-field_update').show();
                }
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
    <script>
        $(document).ready(function() {
            // Function to toggle child name field visibility based on dropdown selection
            $('.parent-select').change(function() {
                var selectedValue = $(this).val();
                if (selectedValue === 'parent') {
                    $('.child-name-field').hide();
                } else {
                    $('.child-name-field').show();
                }
            });
        });
    </script>
@endsection
 --}}