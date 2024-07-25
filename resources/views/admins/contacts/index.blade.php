@extends('layouts.master')
@section('title')
    {{ trans('web_trans.contact') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.contact') }}</h1>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <div class=" tajawal_black table-responsive">
                    <div id="dtable_wrapper" class=" tajawal_black dataTables_wrapper dt-bootstrap5 no-footer">

                        <div class=" tajawal_black row dt-row">
                            <div class=" tajawal_black col-sm-12">
                                <table class=" tajawal_black table table-bordered table-sm dataTable no-footer" id="dtable"
                                    aria-describedby="dtable_info">
                                    <thead>
                                        <tr>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="SL: activate to sort column ascending"
                                                style="width: 147.875px;">SL</th>
                                            <th class=" tajawal_black sorting sorting_desc" tabindex="0" aria-controls="dtable"
                                                rowspan="1" colspan="1"
                                                aria-label="name: activate to sort column ascending" aria-sort="descending"
                                                style="width: 504.5px;">{{ trans('web_trans.full_name') }}</th>
                                            <th class=" tajawal_black sorting sorting_desc" tabindex="0" aria-controls="dtable"
                                                rowspan="1" colspan="1"
                                                aria-label="Email: activate to sort column ascending" aria-sort="descending"
                                                style="width: 504.5px;">{{ trans('web_trans.email') }}</th>
                                            <th class=" tajawal_black sorting sorting_desc" tabindex="0" aria-controls="dtable"
                                                rowspan="1" colspan="1"
                                                aria-label="Subject: activate to sort column ascending"
                                                aria-sort="descending" style="width: 504.5px;">
                                                {{ trans('web_trans.subject') }}</th>
                                            <th class=" tajawal_black sorting sorting_desc" tabindex="0" aria-controls="dtable"
                                                rowspan="1" colspan="1"
                                                aria-label="message: activate to sort column ascending"
                                                aria-sort="descending" style="width: 504.5px;">
                                                {{ trans('web_trans.message') }}</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 257.234px;">{{ trans('web_trans.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Contacts as $Contact)
                                            <tr class=" tajawal_black odd">
                                                <td class=" tajawal_black ">{{ $loop->iteration }}</td>
                                                <td class=" tajawal_black sorting_1">
                                                    {{ $Contact->full_name }}
                                                </td>
                                                <td class=" tajawal_black sorting_1">
                                                    {{ $Contact->email }}
                                                </td>
                                                <td class=" tajawal_black sorting_1">
                                                    {{ $Contact->subject }}
                                                </td>
                                                <td class=" tajawal_black sorting_1">
                                                    {{ $Contact->message }}
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                        action="{{ route('dash.contact.delete', ['id' => $Contact->id]) }}">
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
