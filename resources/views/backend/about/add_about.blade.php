@extends('layouts.app')
@section('title', 'About')
@section('content')

<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if((isset($about) && isset($about->id)))
                        <h3 class="card-title">Edit <small>About</small></h3>
                        @else
                        <h3 class="card-title">Add <small>About</small></h3>
                        @endif
                    </div>
                    <div class="card-body">
                        <form id="about_form" class="form" action="javascript:void(0);" method="POST">
                            <div class="row">
                                @if((isset($about) && isset($about->id)))
                                <input type="hidden" name="about_id" value="{{ $about->id }}">
                                @endif
                                <div class="col-md-6 col-12 mb-1 custom-input-group">
                                    <label class="form-label" for="title">Tiitle<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ ((isset($about) && isset($about->title)) ? $about->title : '')  }}">
                                    <span class="invalid-feedback d-block" id="error_title" role="alert"></span>
                                </div>
                                <div class="col-md-6 col-12  mb-1 custom-input-group">
                                    <label for=" image" class="form-label"> Image <span>(468 X 328) </span> @if((!isset($about) && !isset($about->id)))<span class="text-danger">*</span> @endif</label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                    @if((isset($about) && isset($about->id)))
                                    <img class="mt-1 rounded" src="{{asset('upload/about/'.$about->image)}}" height="100" width="100">
                                    @endif
                                </div>
                                <div class="col-12 col-md-12 ">
                                    <div class="row">
                                        <div class=" col-12 mb-1 form-group custom-input-group">
                                            <label class="form-label" for="description">Description</label>
                                            <textarea rows="4" name="description" id="description" class="form-control summernote">{{ ((isset($about) && isset($about->description)) ? $about->description : '')  }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 ">
                                    <div class="row">
                                        <div class=" col-12 mb-1 form-group custom-input-group">
                                            <label class="form-label" for="long_description">Long Description</label>
                                            <textarea rows="4" name="long_description" id="long_description" class="form-control summernote">{{ ((isset($about) && isset($about->long_description)) ? $about->long_description : '')  }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 custom-input-group">
                                    <button type="submit" class="btn btn-primary float-right save-about">Submit</button>
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


        $('.save-about').on('click', function() {
            var formData = new FormData($("#about_form")[0]);
            var temp = ($("#title").val() != "");

            if (temp) {
                $.ajax({
                    type: "POST",
                    url: "{{route('about.store')}}",
                    data: formData,
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $("#error_title").html(' ');
                        $(".save-about").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Wait');
                        $(".save-about").attr('disabled', true);
                    },
                    success: function(response) {
                        $(".save-about").html('Submit');
                        $(".save-about").attr('disabled', false);
                        if (response.status == false) {
                            $.each(response.errors, function(key, value) {
                                $('#error_' + key).html('<p class="text-danger mb-0">' + value + '</p>');
                            });
                            toastr.warning('Please Input Propper Data.', 'Warning');
                        } else if (response.server_error && response.status == false) {
                            toastr.error(response.server_error, 'Error');
                        } else {
                            $('#about_form')[0].reset();
                            toastr.success(response.message, 'Success');
                            setTimeout(function() {
                                location.href = response.data;
                            }, 2000);
                        }
                    }
                });
            } else {
                $("#about_form").validate({
                    rules: {
                        title: {
                            required: true,
                        },
                        image: {
                            required: true,
                        },

                    },
                    messages: {
                        title: {
                            required: "Enter Title"
                        },
                        image: {
                            required: "Choose Image"
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