@extends('layouts.master')
@section('title')
    {{ trans('web_trans.clients') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if(session('success'))
        @endif

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{ trans('web_trans.clients') }}</h1>
            <a href="{{ route('dash.client.create') }}" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                    class=" tajawal_black fas fa-plus"></i> {{ trans('web_trans.add_item_btn') }}
            </a>
        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <div class=" tajawal_black table-responsive">
                    <table class=" tajawal_black table table-bordered table-sm dataTable no-footer" id="dtable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>{{ trans('web_trans.photo') }}</th>
                                <th>URL</th>
                                <th>{{ trans('web_trans.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('assets/uploads/clients/' . $client->photo) }}" alt=""
                                            class=" tajawal_black w_200">
                                    </td>
                                    <td>{{ $client->url }}</td>
                                    <td>
                                        <div class=" tajawal_black btn-group" role="group">

                                            <a href="{{ route('dash.client.show.update', ['id' => $client->id]) }}"
                                                class=" tajawal_black btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <span style="color: white">s</span>
                                            <form method="POST"
                                                action="{{ route('dash.client.delete', ['id' => $client->id]) }}">
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
@endsection

@section('js')

<script>
    @if(session('success'))
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
