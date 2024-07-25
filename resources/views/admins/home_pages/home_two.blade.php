@extends('layouts.master')
@section('title')
{{trans('web_trans.home_two')}}
@endsection

@section('css')
@endsection
@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{trans('web_trans.home_two')}}</h1>
        </div>


        <form action="{{ route('dash.home.two.update') }}" method="post">
            @csrf
            @method('PUT')
            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.Services')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="service_heading" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="service_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->service_heading}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="service_heading_ar" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="service_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->service_heading_ar}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="service_subheading" class=" tajawal_black form-control" value="{{$HomeTwo->service_subheading}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="service_subheading_ar" class=" tajawal_black form-control" value="{{$HomeTwo->service_subheading_ar}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.how_many')}}</label>
                        <input type="number" name="service_how_many" class=" tajawal_black form-control" value="{{$HomeTwo->how_many_service}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="service_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->service_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->service_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>Marquee</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="marquee_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->marquee_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->marquee_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.welcome_two')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="welcome_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->welcome_two_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->welcome_two_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>Portfolio</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="portfolio_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->portfolio_heading}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="portfolio_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->portfolio_heading_ar}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="portfolio_subheading" class=" tajawal_black form-control" value="{{$HomeTwo->portfolio_subheading}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="portfolio_subheading_ar" class=" tajawal_black form-control" value="{{$HomeTwo->portfolio_subheading_ar}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.how_many')}}</label>
                        <input type="number" name="portfolio_how_many" class=" tajawal_black form-control" value="{{$HomeTwo->how_many_portfolio}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="portfolio_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->portfolio_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->portfolio_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.choose_two')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="why_choose_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->choose_two_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->choose_two_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.testimonials')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="testimonial_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->testimonial_heading}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="testimonial_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->testimonial_heading_ar}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="testimonial_subheading" class=" tajawal_black form-control" value="{{$HomeTwo->testimonial_subheading}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="testimonial_subheading_ar" class=" tajawal_black form-control" value="{{$HomeTwo->testimonial_subheading_ar}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.text')}}</label>
                        <textarea name="testimonial_text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->testimonial_text}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.text_ar')}}</label>
                        <textarea name="testimonial_text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->testimonial_text_ar}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="testimonial_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->testimonial_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->testimonial_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.team_members')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="team_member_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->team_member_heading}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="team_member_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->team_member_heading_ar}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="team_member_subheading" class=" tajawal_black form-control"
                            value="{{$HomeTwo->team_member_subheading}}" autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="team_member_subheading_ar" class=" tajawal_black form-control"
                            value="{{$HomeTwo->team_member_subheading_ar}}" autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.how_many')}}</label>
                        <input type="number" name="team_member_how_many" class=" tajawal_black form-control" value="{{$HomeTwo->how_many_team_member}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="team_member_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->team_member_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->team_member_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.clients')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="client_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->client_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->client_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.contact')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="contact_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->contact_heading}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="contact_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->contact_heading_ar}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="contact_subheading" class=" tajawal_black form-control" value="{{$HomeTwo->contact_subheading}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="contact_subheading_ar" class=" tajawal_black form-control" value="{{$HomeTwo->contact_subheading_ar}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="contact_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->contact_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->contact_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.posts')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="blog_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->blog_heading}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="blog_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{$HomeTwo->blog_heading_ar}}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="blog_subheading" class=" tajawal_black form-control" value="{{$HomeTwo->blog_subheading}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="blog_subheading_ar" class=" tajawal_black form-control" value="{{$HomeTwo->blog_subheading_ar}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.how_many')}}</label>
                        <input type="number" name="blog_how_many" class=" tajawal_black form-control" value="{{$HomeTwo->how_many_blog}}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="blog_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->blog_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->blog_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>Map</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="map_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeTwo->map_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeTwo->map_status == 0 ? 'selected' : '' }}>Hide
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">{{trans('web_trans.update_btn')}}</button>

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
