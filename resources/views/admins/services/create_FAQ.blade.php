@extends('layouts.master')
@section('title')
    {{ trans('web_trans.create_FAQs') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" tajawal_black container-fluid">
        @if (session('success'))
        @endif
        <div class=" tajawal_black d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class=" tajawal_black h3 mb-0 text-gray-800">FAQs</h1>
            <div>
                <a href="{{route('dash.service.index')}}"
                    class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-backward"></i>{{ trans('web_trans.back_service') }}
                </a>
                <a href="" class=" tajawal_black d-none d-sm-inline-block btn btn-primary shadow-sm" data-bs-toggle="modal"
                    data-bs-target="#faq_add_modal"><i class="fas fa-plus"></i> {{ trans('web_trans.create_FAQs') }}</a>


                <!-- Add FAQ Service Modal -->
                    <div class=" tajawal_black modal fade" id="faq_add_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class=" tajawal_black modal-dialog modal-dialog-centered">
                            <div class=" tajawal_black modal-content">
                                <div class=" tajawal_black modal-header">
                                    <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">Add FAQ</h1>
                                    <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class=" tajawal_black modal-body">
                                    <form action="{{ route('dash.service.FAQ.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="add_id" required="" value="{{ $id }}">
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.question') }}*</label>
                                            <input type="text" name="question" class=" tajawal_black form-control" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.answer') }}*</label>
                                            <textarea name="answer" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.question_ar') }}*</label>
                                            <input type="text" name="question_ar" class=" tajawal_black form-control" autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <label for="" class=" tajawal_black form-label">{{ trans('web_trans.answer_ar') }}*</label>
                                            <textarea name="answer_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                        </div>
                                        <div class=" tajawal_black mb-3">
                                            <button type="submit" class=" tajawal_black btn btn-primary btn-sm">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End FAQ Service Modal -->

            </div>

        </div>

        <div class=" tajawal_black card shadow mb-4">
            <div class=" tajawal_black card-body">
                <div class=" tajawal_black table-responsive">

                    <!-- Update FAQ Service Modal -->
                        <div class=" tajawal_black modal fade" id="faq_edit_modal_1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class=" tajawal_black modal-dialog modal-dialog-centered">
                                <div class=" tajawal_black modal-content">
                                    <div class=" tajawal_black modal-header">
                                        <h1 class=" tajawal_black modal-title fs-5" id="exampleModalLabel">Edit FAQ</h1>
                                        <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class=" tajawal_black modal-body">
                                        <form action="{{ route('dash.service.FAQ.update') }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="" required="">
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Question*</label>
                                                <input type="text" name="question" class=" tajawal_black form-control" value=""
                                                    autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">Answer*</label>
                                                <textarea name="answer" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.question_ar') }}*</label>
                                                <input type="text" name="question_ar" class=" tajawal_black form-control" autocomplete="off">
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <label for="" class=" tajawal_black form-label">{{ trans('web_trans.answer_ar') }}*</label>
                                                <textarea name="answer_ar" class=" tajawal_black form-control h_100" cols="30" rows="10" autocomplete="off"></textarea>
                                            </div>
                                            <div class=" tajawal_black mb-3">
                                                <button type="submit" class=" tajawal_black btn btn-primary btn-sm">Update</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End FAQ Service Modal -->

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
                                                style="width: 45.2344px;">SL</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Question: activate to sort column ascending"
                                                style="width: 759.469px;">{{trans('web_trans.question')}}</th>
                                            <th class=" tajawal_black sorting" tabindex="0" aria-controls="dtable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 104.906px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        @foreach ($ServiceFAQs as $ServiceFAQ)
                                            <tr class=" tajawal_black odd">
                                                <td class=" tajawal_black sorting_1">{{ $loop->iteration }}</td>
                                                @if ($app->getLocale() == 'ar')
                                                    <td>{{ $ServiceFAQ->question_ar }}</td>
                                                @else
                                                    <td>{{ $ServiceFAQ->question }}</td>
                                                @endif
                                                <td>
                                                    <div class=" tajawal_black btn-group" role="group">
                                                        <a href="#" class=" tajawal_black btn btn-primary btn-sm edit-option"
                                                            data-bs-toggle="modal" data-bs-target="#faq_edit_modal_1"
                                                            data-question="{{ $ServiceFAQ->question }}"
                                                            data-question_ar="{{ $ServiceFAQ->question_ar }}"
                                                            data-answer="{{ $ServiceFAQ->answer }}"
                                                            data-answer_ar="{{ $ServiceFAQ->answer_ar }}"
                                                            data-id="{{ $ServiceFAQ->id }}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <span style="color: white">s</span>
                                                        <form method="POST"
                                                            action="{{ route('dash.service.FAQ.delete', ['id' => $ServiceFAQ->id]) }}">
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
        $(document).ready(function() {
            $('.edit-option').click(function() {
                var question = $(this).data('question');
                var answer = $(this).data('answer');
                var question_ar = $(this).data('question_ar');
                var answer_ar = $(this).data('answer_ar');
                var id = $(this).data('id');
                var modalId = $(this).data('bs-target'); // Get the modal ID associated with the button
                var modal = $(modalId);

                // Set the name value in the modal's input field
                modal.find('input[name="question"]').val(question);
                modal.find('textarea[name="answer"]').val(answer);
                modal.find('input[name="question_ar"]').val(question_ar);
                modal.find('textarea[name="answer_ar"]').val(answer_ar);
                modal.find('input[name="id"]').val(id);
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
