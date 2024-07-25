@extends('layouts.master')
@section('title')
@endsection

@section('css')
@endsection
@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">Home Page Contact Photos</h1>
        </div>


        <form action="{{route('dash.home.contact.photo.update')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class=" tajawal_black row">
                <div class=" tajawal_black col-md-6">
                    <div class=" tajawal_black card shadow mb-4">
                        <div class=" tajawal_black card-body">
                            <h5 class=" tajawal_black border-1"><b>Home Page 1</b></h5>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Existing Photo</label>
                                <div class=" tajawal_black photo-container">
                                    <a href="{{ asset('assets/uploads/home_pages/' . $HomePhotoOne) }}"
                                        class=" tajawal_black magnific"><img
                                            src="{{ asset('assets/uploads/home_pages/' . $HomePhotoOne) }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Change Photo</label>
                                <div>
                                    <input type="file" name="home_1_contact_photo" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" tajawal_black col-md-6">
                    <div class=" tajawal_black card shadow mb-4">
                        <div class=" tajawal_black card-body">
                            <h5 class=" tajawal_black border-1"><b>Home Page 2</b></h5>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Existing Photo</label>
                                <div class=" tajawal_black photo-container">
                                    <a href="{{ asset('assets/uploads/home_pages/' . $HomePhotoTwo) }}"
                                        class=" tajawal_black magnific"><img
                                            src="{{ asset('assets/uploads/home_pages/' . $HomePhotoTwo) }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Change Photo</label>
                                <div>
                                    <input type="file" name="home_2_contact_photo" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" tajawal_black col-md-6">
                    <div class=" tajawal_black card shadow mb-4">
                        <div class=" tajawal_black card-body">
                            <h5 class=" tajawal_black border-1"><b>Home Page 3</b></h5>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Existing Photo</label>
                                <div class=" tajawal_black photo-container">
                                    <a href="{{ asset('assets/uploads/home_pages/' . $HomePhotoThree) }}"
                                        class=" tajawal_black magnific"><img
                                            src="{{ asset('assets/uploads/home_pages/' . $HomePhotoThree) }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Change Photo</label>
                                <div>
                                    <input type="file" name="home_3_contact_photo" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" tajawal_black col-md-6">
                    <div class=" tajawal_black card shadow mb-4">
                        <div class=" tajawal_black card-body">
                            <h5 class=" tajawal_black border-1"><b>Home Page 4</b></h5>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Existing Photo</label>
                                <div class=" tajawal_black photo-container">
                                    <a href="{{ asset('assets/uploads/home_pages/' . $HomeFourPhoto) }}"
                                        class=" tajawal_black magnific"><img
                                            src="{{ asset('assets/uploads/home_pages/' . $HomeFourPhoto) }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">Change Photo</label>
                                <div>
                                    <input type="file" name="home_4_contact_photo" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">Update</button>

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
