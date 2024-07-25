@extends('layouts.master')
@section('title')
    {{ trans('web_trans.Services') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.Services') }}</h1>
            <a href="{{ route('dash.service.create') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-plus"></i>{{ trans('web_trans.create_services') }}
            </a>
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
                                            <th class=" tajawal_black sorting sorting_asc" tabindex="0" aria-controls="dtable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="SL: activate to sort column descending"
                                                style="width: 41.2344px;">SL</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Photo: activate to sort column ascending"
                                                style="width: 136.438px;">{{ trans('web_trans.photo') }}</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Banner: activate to sort column ascending"
                                                style="width: 136.438px;">{{ trans('web_trans.banner') }}</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Icon: activate to sort column ascending"
                                                style="width: 56.4219px;">Icon</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 182.406px;">{{ trans('web_trans.name') }}</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Manage FAQ: activate to sort column ascending"
                                                style="width: 172.391px;">{{ trans('web_trans.manage_faq') }}</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 81.0938px;">{{ trans('web_trans.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($Services as $Service)
                                            <tr class=" tajawal_black odd">
                                                <td class=" tajawal_black sorting_1">{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class=" tajawal_black photo-container-small">
                                                        <a href="{{ asset('assets/uploads/services/photos/' . $Service->photo) }}"
                                                            class=" tajawal_black magnific"><img
                                                                src="{{ asset('assets/uploads/services/photos/' . $Service->photo) }}"
                                                                alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class=" tajawal_black photo-container-small">
                                                        <a href="{{ asset('assets/uploads/services/banners/' . $Service->banner) }}"
                                                            class=" tajawal_black magnific"><img
                                                                src="{{ asset('assets/uploads/services/banners/' . $Service->banner) }}"
                                                                alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <i class="{{ $Service->icon }} fz_40"></i>
                                                </td>
                                                @if ($app->getLocale() == 'ar')
                                                    <td>{{ $Service->name_ar }}</td>
                                                @else
                                                    <td>{{ $Service->name }}</td>
                                                @endif
                                                <td>
                                                    <a href="{{ route('dash.service.FAQ.create', ['id' => $Service->id]) }}"
                                                        class=" tajawal_black btn btn-success btn-sm rounded-pill pl_20 pr_20">{{ trans('web_trans.manage_options') }}</a>
                                                </td>
                                                <td>
                                                    <div class=" tajawal_black btn-group" role="group">

                                                        <a href="{{ route('dash.service.show.update', ['id' => $Service->id]) }}"
                                                            class=" tajawal_black btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                        <span style="color: white">s</span>
                                                        <form method="POST"
                                                            action="{{ route('dash.service.delete', ['id' => $Service->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class=" tajawal_black btn btn-danger btn-sm"
                                                                onclick="return confirm('{{ trans('web_trans.delete_sure_msg') }}')">
                                                                <i class="fas fa-trash"></i></button>
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
