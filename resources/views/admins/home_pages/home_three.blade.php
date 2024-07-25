@extends('layouts.master')
@section('title')
{{trans('web_trans.home_three')}}
@endsection

@section('css')
@endsection
@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{trans('web_trans.home_three')}}</h1>
        </div>


        <form action="{{ route('dash.home.three.update') }}" method="post">
            @csrf
            @method('PUT')
            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.Services')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.how_many')}}</label>
                        <input type="number" name="service_how_many" class=" tajawal_black form-control" value="{{ $HomeThree->how_many_service }}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="service_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeThree->service_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->service_status == 0 ? 'selected' : '' }}>Hide
                            </option>
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
                            <option value="1" {{ $HomeThree->welcome_two_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->welcome_two_status == 0 ? 'selected' : '' }}>Hide
                            </option>
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.offers')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="offer_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeThree->offer_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->offer_status == 0 ? 'selected' : '' }}>Hide
                            </option>
                        </select>
                    </div>
                </div>
            </div>



            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>Portfolio</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="portfolio_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $HomeThree->portfolio_heading }}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="portfolio_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $HomeThree->portfolio_heading_ar }}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="portfolio_subheading" class=" tajawal_black form-control"
                            value="{{ $HomeThree->portfolio_subheading }}" autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="portfolio_subheading_ar" class=" tajawal_black form-control"
                            value="{{ $HomeThree->portfolio_subheading_ar }}" autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.how_many')}}</label>
                        <input type="number" name="portfolio_how_many" class=" tajawal_black form-control" value="{{ $HomeThree->how_many_portfolio }}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.text')}}</label>
                        <textarea name="portfolio_text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $HomeThree->portfolio_text }}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.text_ar')}}</label>
                        <textarea name="portfolio_text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $HomeThree->portfolio_text_ar }}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="portfolio_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeThree->portfolio_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->portfolio_status == 0 ? 'selected' : '' }}>Hide
                            </option>
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.video_one')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="video_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeThree->video_one_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->video_one_status == 0 ? 'selected' : '' }}>Hide
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.feature_two')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="feature_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeThree->feature_two_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->feature_two_status == 0 ? 'selected' : '' }}>Hide
                            </option>
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>Call To Action</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="call_to_action_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeThree->call_to_action_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->call_to_action_status == 0 ? 'selected' : '' }}>Hide
                            </option>
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
                            <option value="1" {{ $HomeThree->client_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->client_status == 0 ? 'selected' : '' }}>Hide
                            </option>
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.team_members')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="team_member_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $HomeThree->team_member_heading }}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="team_member_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $HomeThree->team_member_heading_ar }}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="team_member_subheading" class=" tajawal_black form-control"
                            value="{{ $HomeThree->team_member_subheading }}" autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="team_member_subheading_ar" class=" tajawal_black form-control"
                            value="{{ $HomeThree->team_member_subheading_ar }}" autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.how_many')}}</label>
                        <input type="number" name="team_member_how_many" class=" tajawal_black form-control" value="{{ $HomeThree->how_many_team_member }}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="team_member_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeThree->team_member_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->team_member_status == 0 ? 'selected' : '' }}>Hide
                            </option>
                        </select>
                    </div>
                </div>
            </div>


            <div class=" tajawal_black card shadow mb-4">
                <div class=" tajawal_black card-body">
                    <h5 class=" tajawal_black border-1"><b>{{trans('web_trans.contact')}}</b></h5>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                        <textarea name="contact_heading" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $HomeThree->contact_heading }}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                        <textarea name="contact_heading_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $HomeThree->contact_heading_ar }}</textarea>
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                        <input type="text" name="contact_subheading" class=" tajawal_black form-control" value="{{ $HomeThree->contact_subheading }}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                        <input type="text" name="contact_subheading_ar" class=" tajawal_black form-control" value="{{ $HomeThree->contact_subheading_ar }}"
                            autocomplete="off">
                    </div>
                    <div class=" tajawal_black mb-3">
                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.status')}}</label>
                        <select name="contact_status" class=" tajawal_black form-select" autocomplete="off">
                            <option value="1" {{ $HomeThree->contact_status == 1 ? 'selected' : '' }}>Show
                            </option>
                            <option value="0" {{ $HomeThree->contact_status == 0 ? 'selected' : '' }}>Hide
                            </option>
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
