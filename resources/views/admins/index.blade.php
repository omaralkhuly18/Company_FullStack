@extends('layouts.master')
@section('title')
    {{trans('web_trans.dashboard')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">

        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{trans('web_trans.dashboard')}}
            </h1>
        </div>

        <div class=" tajawal_black row dashboard-page">
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.post_category')}}</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$PostCategory}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.posts')}}</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$Post}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.testimonials')}}</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$Testimonial}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.team_members')}}</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$Team}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.Services')}}</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$Service}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} Portfolios</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$Portfolio}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.Sliders')}} </div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$Slider}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.FAQs')}} </div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$FAQ}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.subscribers')}}</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$Subscriber}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.pricing_plans')}}</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$PricingPlan}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.Custom Pages')}} </div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$CustomPage}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-3 col-md-6 mb-4">
                <div class=" tajawal_black card border-start-success shadow h-100 py-2">
                    <div class=" tajawal_black card-body">
                        <div class=" tajawal_black row no-gutters align-items-center">
                            <div class=" tajawal_black col mr-2">
                                <div class=" tajawal_black h4 font-weight-bold text-success mb-1">{{trans('web_trans.total')}} {{trans('web_trans.Marquees')}}</div>
                                <div class=" tajawal_black h5 mb-0 font-weight-bold text-gray-800">{{$Marquee}}</div>
                            </div>
                            <div class=" tajawal_black col-auto">
                                <i class="fas fas fa-th-large fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
@endsection
