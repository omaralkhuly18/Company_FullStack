@extends('layouts.master')
@section('title')
    {{ trans('web_trans.english_trans') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">Website Texts</h1>
        </div>
        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <form action="{{ route('dash.translation.english.update') }}" method="post">
                    @csrf
                    @method('PUT')
                    <table class=" tajawal_black table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class=" tajawal_black w_50_p">Key</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($translations as $key => $value)
                                <tr>
                                    <td>
                                        {{ $key }}
                                        <input type="hidden" class=" tajawal_black form-control" name="translations[{{ $key }}]"
                                            value="{{ $value }}" autocomplete="off">
                                    </td>
                                    <td>
                                        <input type="text" name="translations[{{ $key }}]" class=" tajawal_black form-control"
                                            value="{{ $value }}" autocomplete="off">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">Update</button>
                </form>
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
