@extends('layouts.app')
@section('title', 'Choose Us')
@section('content')

<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if((isset($chooseus) && isset($chooseus->id)))
                        <h3 class="card-title">Edit <small>Choose Us</small></h3>
                        @else
                        <h3 class="card-title">Add <small>Choose Us</small></h3>
                        @endif
                    </div>
                    <div class="card-body">
                        <form id="form" class="form" action="javascript:void(0);" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @if((isset($chooseus) && isset($chooseus->id)))
                                <input type="hidden" name="chooseus_id" value="{{ $chooseus->id }}">
                                @endif
                                <div class="col-md-6 col-12 mb-1 custom-input-group">
                                    <label class="form-label" for="title">Tiitle<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ ((isset($chooseus) && isset($chooseus->title)) ? $chooseus->title : '')  }}">
                                    <span class="invalid-feedback d-block" id="error_title" role="alert"></span>
                                </div>
                                <div class="col-md-6 col-12  mb-1 custom-input-group">
                                    <label for=" image" class="form-label"> Image(468 X 426) </label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                    @if((isset($chooseus) && isset($chooseus->id)))
                                    <img class="mt-1 rounded" src="{{asset('upload/chooseus/'.$chooseus->image)}}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-12 col-md-12 ">
                                    <div class="row">
                                        <div class=" col-12 mb-1 form-group custom-input-group">
                                            <label class="form-label" for="short_description">Short Description</label>
                                            <textarea rows="4" name="short_description" id="short_description" class="form-control ">{{ ((isset($chooseus) && isset($chooseus->short_description)) ? $chooseus->short_description : '')  }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 ">
                                    <div class="row">
                                        <div class=" col-12 mb-1 form-group custom-input-group">
                                            <label class="form-label" for="description">Description @if((!isset($chooseus) && !isset($chooseus->id)))<span class="text-danger">*</span>@endif</label>
                                            <textarea rows="4" name="description" id="description" class="form-control summernote">{{ ((isset($chooseus) && isset($chooseus->description)) ? $chooseus->description : '')  }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 custom-input-group">
                                    <button type="submit" class="btn btn-primary float-right save">Submit</button>
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


        $('.save').on('click', function() {
            var formData = new FormData($("#form")[0]);
            var temp = ($("#title").val() != "");

            if (temp) {
                $.ajax({
                    type: "POST",
                    url: "{{route('chooseus.store')}}",
                    data: formData,
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $("#error_title").html(' ');
                        $(".save").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Wait');
                        $(".save").attr('disabled', true);
                    },
                    success: function(response) {
                        $(".save").html('Submit');
                        $(".save").attr('disabled', false);
                        if (response.status == false) {
                            $.each(response.errors, function(key, value) {
                                $('#error_' + key).html('<p class="text-danger mb-0">' + value + '</p>');
                            });
                            toastr.warning('Please Input Propper Data.', 'Warning');
                        } else if (response.server_error && response.status == false) {
                            toastr.error(response.server_error, 'Error');
                        } else {
                            $('#form')[0].reset();
                            toastr.success(response.message, 'Success');
                            setTimeout(function() {
                                location.href = response.data;
                            }, 2000);
                        }
                    }
                });
            } else {
                $("#form").validate({
                    rules: {
                        title: {
                            required: true,
                        },
                        description: {
                            required: true,
                        },

                    },
                    messages: {
                        title: {
                            required: "Enter Title"
                        },
                        description: {
                            required: "Enter Long Description"
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
    });
</script>
@endsection