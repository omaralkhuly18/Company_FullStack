@extends('layouts.master')
@section('title')
    {{ trans('web_trans.orders') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
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
                                            <th class=" tajawal_black sorting sorting_asc" tabindex="0" aria-controls="dtable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="SL: activate to sort column descending"
                                                style="width: 81.9219px;">SL</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 323.953px;">{{ trans('web_trans.name') }}</th>

                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Email: activate to sort column ascending"
                                                style="width: 323.953px;">{{ trans('web_trans.email') }}</th>

                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Phone: activate to sort column ascending"
                                                style="width: 323.953px;">{{ trans('web_trans.phone') }}</th>

                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Pricing: activate to sort column ascending"
                                                style="width: 323.953px;">{{ trans('web_trans.pricing') }}</th>

                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Approved: activate to sort column ascending"
                                                style="width: 323.953px;">{{ trans('web_trans.approved') }}</th>

                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 171.484px;">{{ trans('web_trans.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($Orders as $Order)
                                            <tr class=" tajawal_black odd">
                                                <td class=" tajawal_black sorting_1">{{ $loop->iteration }}</td>
                                                <td>{{ $Order->name }}</td>
                                                <td>{{ $Order->email }}</td>
                                                <td>{{ $Order->phone }}</td>
                                                <td>{{ $Order->pricing->name }}</td>

                                                <td>
                                                    @if ($Order->approved == 1)
                                                        <button class=" tajawal_black btn btn-success btn-sm">
                                                            {{ trans('web_trans.approved_dn') }}
                                                        </button>
                                                    @else
                                                        <form method="POST"
                                                            action="{{ route('dash.pricing.order.approved', ['id' => $Order->id]) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class=" tajawal_black btn btn-danger btn-sm">
                                                                {{ trans('web_trans.want_to_approve') }}
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class=" tajawal_black btn-group" role="group">
                                                        <form method="POST"
                                                            action="{{ route('dash.pricing.order.delete', ['id' => $Order->id]) }}">
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
