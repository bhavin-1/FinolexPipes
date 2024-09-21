@extends('layouts.app')
@section('title', 'Process')
@section('content')

<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if((isset($process) && isset($process->id)))
                        <h3 class="card-title">Edit <small>Process</small></h3>
                        @else
                        <h3 class="card-title">Add <small>Process</small></h3>
                        @endif
                    </div>
                    <div class="card-body">
                        <form id="process_form" class="form invoice-repeater" action="javascript:void(0);" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @if((isset($process) && isset($process->id)))
                                <input type="hidden" name="process_id" id="process_id" value="{{ $process->id }}">
                                @endif
                                <div class="col-md-4 col-12 ">
                                    <div class="row">
                                        <div class=" col-12 mb-1 custom-input-group">
                                            <label class="form-label" for="meta title"> Title<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ ((isset($process) && isset($process->title)) ? $process->title : '')  }}">
                                        </div>
                                        <div class="col-12 mb-1 custom-input-group">
                                            <label for=" image" class="form-label"> Image @if((!isset($process) && !isset($process->id)))<span class="text-danger">*</span>@endif</label>
                                            <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                            @if((isset($process) && isset($process->id)))
                                            <img class="mt-1 rounded" src="{{asset('upload/process/'.$process->image)}}" height="100" width="100">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12 ">
                                    <div class="row">
                                        <div class=" col-12 mb-1 form-group custom-input-groupp">
                                            <label class="form-label" for="description">Description</label>
                                            <textarea rows="4" name="description" id="description" class="form-control summernote">{{ ((isset($process) && isset($process->description)) ? $process->description : '')  }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @if((isset($process) && isset($process->id)))
                            <div data-repeater-list="invoice">
                                @foreach($process->processmeta as $key => $item)
                                <div data-repeater-item>
                                    <div class="row d-flex align-items-end">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="meta_title">Meta Title</label>
                                                        <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Enter Title" value="{{ ((isset($item) && isset($item->meta_title)) ? $item->meta_title : '')  }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <input type="hidden" name="id" class="img_hide" value="{{ ((isset($item) && isset($item->id)) ? $item->id : '')  }}">
                                                        <label class="form-label" for="meta_image">Meta Image (310 × 350 px) (maximum 2MB)</label>
                                                        <input class="form-control" type="file" id="meta_image" name="meta_image">
                                                        @if((isset($item) && isset($item->id) && $item->meta_image != ''))
                                                        <img id="img_{{$key+1}}" class="mt-1 rounded clone_img" src="{{asset('upload/process/process_meta/'.$item->meta_image)}}" height="100" width="100">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="meta_description">Meta Description</label>
                                                        <textarea name="meta_description" id="meta_description" class=" form-control">{{$item->meta_description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12 mb-50">
                                            <div class="mb-1">
                                                <button class="btn btn-outline-danger text-nowrap px-1 remove-test" data-id="{{$item->id}}" data-repeater-delete type="button">
                                                    <i data-feather="x" class="me-25"></i>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                        <i data-feather="plus" class="me-25"></i>
                                        <span>Add New</span>
                                    </button>
                                </div>
                            </div>
                            @else
                            <div data-repeater-list="invoice">
                                <div data-repeater-item>
                                    <div class="row d-flex align-items-end">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="meta_title">Meta Title</label>
                                                        <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Enter Title">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-1">
                                                        <input type="hidden" name="id" value="" class="img_hide">
                                                        <label class="form-label" for="meta_image">Meta Image<span>(468 X 328) </span></label>
                                                        <input class="form-control" type="file" id="meta_image" name="meta_image">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="meta_description">Meta Description</label>
                                                        <textarea name="meta_description" id="meta_description[]" class=" form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-12 mb-50">
                                            <div class="mb-1">
                                                <button class="btn btn-outline-danger text-nowrap px-1 remove-test" data-repeater-delete type="button">
                                                    <i data-feather="x" class="me-25"></i>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                        <i data-feather="plus" class="me-25"></i>
                                        <span>Add New</span>
                                    </button>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-primary float-end save-process">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('pagescript')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
            minHeight: 200,
            maxHeight: 600,
        });
        $('.note-insert').remove();


        $('.save-process').on('click', function() {
            var formData = new FormData($("#process_form")[0]);
            if ($("#process_id").val() != "") {
                var temp = $("#title").val() != "";
            } else {
                var temp = $("#title").val() != "" && $("#image").val() != "";
            }
            if (temp) {
                $.ajax({
                    type: "POST",
                    url: "{{route('proceses.store')}}",
                    data: formData,
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $(".save-process").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Wait');
                        $(".save-process").attr('disabled', true);
                    },
                    success: function(response) {
                        $(".save-process").html('Submit');
                        $(".save-process").attr('disabled', false);
                        if (response.status == false) {
                            $.each(response.errors, function(key, value) {
                                $('#error_' + key).html('<p class="text-danger mb-0">' + value + '</p>');
                            });
                            toastr.warning('Please Input Propper Data.', 'Warning');
                        } else if (response.server_error && response.status == false) {
                            toastr.error(response.server_error, 'Error');
                        } else {
                            $('#process_form')[0].reset();
                            toastr.success(response.message, 'Success');
                            setTimeout(function() {
                                location.href = response.data;
                            }, 2000);
                        }
                    }
                });
            } else {
                $("#process_form").validate({
                    rules: {
                        title: {
                            required: true,
                        },
                        image: {
                            required: true,
                        }
                    },
                    messages: {
                        title: {
                            required: "Enter Title"
                        },
                        image: {
                            required: "Upload Image"
                        },
                    },
                    errorElement: "p",
                    errorClass: "text-danger mb-0",

                    highlight: function(element) {
                        $(element).addClass('has-error');
                    },
                    unhighlight: function(element) {
                        $(element).removeClass('has-error');
                    },
                    errorPlacement: function(error, element) {
                        $(element).closest('.custom-input-group').append(error);
                    }
                });
            }
        });

        //remove single item using ajax
        $(document).on('click', '.remove-test', function(e) {
            if (($('.remove-test').length) > 1) {
                e.preventDefault();
                var btn = $(this);
                var id = $(this).data('id');
                var url = "{{route('proceses.update','id')}}".replace('id', id);
                if (id != null) {
                    $.ajax({
                        url: url,
                        type: 'put',
                        datatype: 'json',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            $(this).slideDown();
                        }
                    });
                }
            } else {
                Swal.fire({
                    text: "Cannot delete first element",
                    icon: 'warning',
                    confirmButtonText: 'OK',
                })
            }
        });
    });
</script>
@endsection