@extends('layouts.master')
@section('title')
{{trans('web_trans.welcome_two')}}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">{{trans('web_trans.welcome_two')}}</h1>
        </div>


        <div class=" tajawal_black row">
            <!-- Update Welcome Modal -->
            <div class=" tajawal_black col-md-7">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <form action="{{ route('dash.welcome.two.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}</label>
                                <input type="text" name="heading" class=" tajawal_black form-control" value="{{ $WelcomeTwo->heading }}"
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}</label>
                                <input type="text" name="heading_ar" class=" tajawal_black form-control" value="{{ $WelcomeTwo->heading_ar }}"
                                    autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading')}}</label>
                                <input type="text" name="subheading" class=" tajawal_black form-control"
                                    value="{{ $WelcomeTwo->sub_heading }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.subheading_ar')}}</label>
                                <input type="text" name="subheading_ar" class=" tajawal_black form-control"
                                    value="{{ $WelcomeTwo->sub_heading_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.text')}}</label>
                                <textarea name="text" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $WelcomeTwo->text }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.text_ar')}}</label>
                                <textarea name="text_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off">{{ $WelcomeTwo->text_ar }}</textarea>
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.btn_text')}}</label>
                                <input type="text" name="button_text" class=" tajawal_black form-control"
                                    value="{{ $WelcomeTwo->btn_text }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.btn_text_ar')}}</label>
                                <input type="text" name="button_text_ar" class=" tajawal_black form-control"
                                    value="{{ $WelcomeTwo->btn_text_ar }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.btn_url')}}</label>
                                <input type="text" name="button_url" class=" tajawal_black form-control"
                                    value="{{ $WelcomeTwo->btn_url }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black mb-3">
                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.experience_year')}}</label>
                                <input type="text" name="experience_year" class=" tajawal_black form-control"
                                    value="{{ $WelcomeTwo->experience_year }}" autocomplete="off">
                            </div>
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.existing_photo')}} 1</label>
                                        <div class=" tajawal_black photo-container">
                                            <a href="{{ asset('assets/uploads/All_Sections/welcome_two/' . $WelcomeTwo->photo1) }}"
                                                class=" tajawal_black magnific"><img
                                                    src="{{ asset('assets/uploads/All_Sections/welcome_two/' . $WelcomeTwo->photo1) }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.change_photo')}} 1</label>
                                        <div><input type="file" name="photo1" autocomplete="off"></div>
                                    </div>
                                </div>
                                <div class=" tajawal_black col-md-4">
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.existing_photo')}} 2</label>
                                        <div class=" tajawal_black photo-container">
                                            <a href="{{ asset('assets/uploads/All_Sections/welcome_two/' . $WelcomeTwo->photo2) }}"
                                                class=" tajawal_black magnific"><img
                                                    src="{{ asset('assets/uploads/All_Sections/welcome_two/' . $WelcomeTwo->photo2) }}"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class=" tajawal_black mb-3">
                                        <label for="" class=" tajawal_black form-label">{{trans('web_trans.change_photo')}} 2</label>
                                        <div><input type="file" name="photo2" autocomplete="off"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class=" tajawal_black btn btn-success mb-50 btn-common">{{trans('web_trans.update_btn')}}</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Welcome Modal -->

            <div class=" tajawal_black col-md-5">
                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <h4><b>{{trans('web_trans.elements')}}</b></h4>
                        <div class=" tajawal_black mb_10">
                            <a href="" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="fas fa-plus"></i>
                                {{trans('web_trans.add_item_btn')}}</a>
                        </div>

                        <!-- Add Element Modal -->
                        <div class=" tajawal_black modal fade" id="add_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                <div class=" tajawal_black modal-content">
                                    <div class=" tajawal_black modal-header">
                                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">{{trans('web_trans.add_item_btn')}}</h1>
                                        <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class=" tajawal_black modal-body">
                                        <form action="{{ route('dash.welcome.two.element.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="welcome_two_id" value="{{ $WelcomeTwo->id }}">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}*</label>
                                                <input type="text" name="heading" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}*</label>
                                                <input type="text" name="heading_ar" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.text')}}*</label>
                                                <textarea name="text" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off"></textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.text_ar')}}*</label>
                                                <textarea name="text_ar" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off"></textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <button type="submit" class=" tajawal_black btn btn-primary btn-sm">{{trans('web_trans.submit_btn')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Element Modal -->


                        <div class=" tajawal_black table-responsive">
                            <!-- Update Element Modal -->
                            <div class=" tajawal_black modal fade" id="edit_modal_2" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                    <div class=" tajawal_black modal-content">
                                        <div class=" tajawal_black modal-header">
                                            <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">{{trans('web_trans.update_btn')}}</h1>
                                            <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class=" tajawal_black modal-body">
                                            <form action="{{ route('dash.welcome.two.element.update') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="">
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading')}}*</label>
                                                    <input type="text" name="heading" class=" tajawal_black form-control"
                                                        value="" required autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">{{trans('web_trans.heading_ar')}}*</label>
                                                    <input type="text" name="heading_ar" class=" tajawal_black form-control"
                                                        value="" required autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">{{trans('web_trans.text')}}*</label>
                                                    <textarea name="text" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off"></textarea>
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">{{trans('web_trans.text_ar')}}*</label>
                                                    <textarea name="text_ar" class=" tajawal_black form-control h_70" cols="30" rows="10" autocomplete="off"></textarea>
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <button type="submit" class=" tajawal_black btn btn-primary btn-sm">{{trans('web_trans.update_btn')}}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Element Modal -->

                            <table class=" tajawal_black table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>{{trans('web_trans.heading')}}</th>
                                        <th>{{trans('web_trans.text')}}</th>
                                        <th>{{trans('web_trans.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($WelcomeTwoElements as $WelcomeTwoElement)
                                        <tr>
                                            @if ($app->getLocale() == 'ar')
                                            <td>{{ $WelcomeTwoElement->heading_ar }}</td>
                                            <td>{{ $WelcomeTwoElement->text_ar }}</td>
                                            @else
                                            <td>{{ $WelcomeTwoElement->heading }}</td>
                                            <td>{{ $WelcomeTwoElement->text }}</td>
                                            @endif
                                            <td>
                                                <div class=" tajawal_black btn-group" role="group">
                                                    <a href="" class=" tajawal_black btn btn-primary btn-sm btn-block edit-option"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal_2"
                                                        data-id="{{ $WelcomeTwoElement->id }}"
                                                        data-heading="{{ $WelcomeTwoElement->heading }}"
                                                        data-heading_ar="{{ $WelcomeTwoElement->heading_ar }}"
                                                        data-text="{{ $WelcomeTwoElement->text }}"
                                                        data-text_ar="{{ $WelcomeTwoElement->text_ar }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <span style="color: white">s</span>
                                                    <form method="POST"
                                                        action="{{ route('dash.welcome.two.element.delete', ['id' => $WelcomeTwoElement->id]) }}">
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



                <div class=" tajawal_black card shadow mb-4">
                    <div class=" tajawal_black card-body">
                        <h4><b>{{trans('web_trans.skills')}}</b></h4>
                        <div class=" tajawal_black mb_10">
                            <a href="" data-bs-toggle="modal" data-bs-target="#add_modal_1"><i
                                    class=" tajawal_black fas fa-plus"></i> {{trans('web_trans.add_item_btn')}}</a>
                        </div>

                        <!-- Add Skil Modal -->
                        <div class=" tajawal_black modal fade" id="add_modal_1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                <div class=" tajawal_black modal-content">
                                    <div class=" tajawal_black modal-header">
                                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">{{trans('web_trans.add_item_btn')}}</h1>
                                        <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class=" tajawal_black modal-body">
                                        <form action="{{ route('dash.welcome.two.skill.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="welcome_id" value="{{ $WelcomeTwo->id }}">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.name')}} *</label>
                                                <input type="text" name="name" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.name_ar')}} *</label>
                                                <input type="text" name="name_ar" class=" tajawal_black form-control" required=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{trans('web_trans.percentage')}} *</label>
                                                <input type="number" name="percentage" class=" tajawal_black form-control"
                                                    required="" autocomplete="off" min="0" max="100">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <button type="submit" class=" tajawal_black btn btn-primary btn-sm">{{trans('web_trans.submit_btn')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Skill Modal -->


                        <div class=" tajawal_black table-responsive">
                            <!-- Update Skil Modal -->
                            <div class=" tajawal_black modal fade" id="edit_modal_1_1" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                    <div class=" tajawal_black modal-content">
                                        <div class=" tajawal_black modal-header">
                                            <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">{{trans('web_trans.update_btn')}}</h1>
                                            <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class=" tajawal_black modal-body">
                                            <form action="{{ route('dash.welcome.two.skill.update') }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="welcome" value="">
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">{{trans('web_trans.name')}} *</label>
                                                    <input type="text" name="name" class=" tajawal_black form-control"
                                                        value="" required="" autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">{{trans('web_trans.name_ar')}} *</label>
                                                    <input type="text" name="name_ar" class=" tajawal_black form-control"
                                                        value="" required="" autocomplete="off">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <label for="" class=" tajawal_black form-label">{{trans('web_trans.percentage')}} *</label>
                                                    <input type="number" name="percentage" class=" tajawal_black form-control"
                                                        value="" required="" autocomplete="off" min="0" max="100">
                                                </div>
                                                <div class=" tajawal_black mb-3">
                                                    <button type="submit" class=" tajawal_black btn btn-primary btn-sm">{{trans('web_trans.update_btn')}}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Skill Modal -->

                            <table class=" tajawal_black table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>{{trans('web_trans.name')}}</th>
                                        <th>{{trans('web_trans.percentage')}}</th>
                                        <th>{{trans('web_trans.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($WelcomeTwoSkills as $WelcomeTwoSkill)
                                        <tr>
                                            @if ($app->getLocale() == 'ar')
                                            <td>{{ $WelcomeTwoSkill->name_ar }}</td>
                                            @else
                                            <td>{{ $WelcomeTwoSkill->name }}</td>
                                            @endif
                                            <td>{{ $WelcomeTwoSkill->percentage }}</td>
                                            <td>
                                                <div class=" tajawal_black btn-group" role="group">

                                                    <a href=""
                                                        class=" tajawal_black btn btn-primary btn-sm btn-block edit-skill-option"
                                                        data-bs-toggle="modal" data-bs-target="#edit_modal_1_1"
                                                        data-welcome="{{ $WelcomeTwoSkill->id }}"
                                                        data-name="{{ $WelcomeTwoSkill->name }}"
                                                        data-name_ar="{{ $WelcomeTwoSkill->name_ar }}"
                                                        data-percentage="{{ $WelcomeTwoSkill->percentage }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <span style="color: white">s</span>
                                                    <form method="POST"
                                                        action="{{ route('dash.welcome.two.skill.delete', ['id' => $WelcomeTwoSkill->id]) }}">
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
@endsection

@section('js')
    <!-- JavaScript for Element Edit Option -->
    <script>
        $(document).ready(function() {
            $('.edit-option').click(function() {
                var id = $(this).data('id');
                var heading = $(this).data('heading');
                var heading_ar = $(this).data('heading_ar');
                var text = $(this).data('text');
                var text_ar = $(this).data('text_ar');
                var modalSelector = $(this).data('bs-target'); // Get the modal selector
                var modal = $(modalSelector);

                // Set the values in the modal's input fields for the second element
                modal.find('input[name="id"]').val(id);
                modal.find('input[name="heading"]').val(heading);
                modal.find('input[name="heading_ar"]').val(heading_ar);
                modal.find('textarea[name="text"]').val(text);
                modal.find('textarea[name="text_ar"]').val(text_ar);
            });
        });
    </script>

    <!-- JavaScript for Skill Edit Option -->
    <script>
        $(document).ready(function() {
            $('.edit-skill-option').click(function() {
                var welcome = $(this).data('welcome');
                var name = $(this).data('name');
                var name_ar = $(this).data('name_ar');
                var percentage = $(this).data('percentage');
                var modalSelector = $(this).data('bs-target'); // Get the modal selector
                var modal = $(modalSelector);

                // Set the values in the modal's input fields for the skill
                modal.find('input[name="welcome"]').val(welcome);
                modal.find('input[name="name"]').val(name);
                modal.find('input[name="name_ar"]').val(name_ar);
                modal.find('input[name="percentage"]').val(percentage);
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
@endsection
