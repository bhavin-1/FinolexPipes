@extends('layouts.app')
@section('title', 'Seo')
@section('content')
<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if((isset($seo) && isset($seo->id)))
                        <h3 class="card-title">Edit <small>Seo</small></h3>
                        @else
                        <h3 class="card-title">Add <small>Seo</small></h3>
                        @endif
                    </div>
                    <div class="card-body">
                        <form id="form" class="form" action="javascript:void(0);" method="POST">
                            <div class="row">
                                @if((isset($seo) && isset($seo->id)))
                                <input type="hidden" name="seo_id" value="{{ $seo->id }}">
                                @endif
                                <div class="col-md-4 col-12 mb-1 custom-input-group">
                                    <label class="form-label" for="title">Tiitle<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ ((isset($seo) && isset($seo->title)) ? $seo->title : '')  }}">
                                    <span class="invalid-feedback d-block" id="error_title" role="alert"></span>
                                </div>
                                <div class="col-md-4 col-12 mb-1 custom-input-group">
                                    <label class="form-label" for="keyword">Keyword<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Keyword" value="{{ ((isset($seo) && isset($seo->keyword)) ? $seo->keyword : '')  }}">
                                    <span class="invalid-feedback d-block" id="error_keyword" role="alert"></span>
                                </div>
                                <div class="col-md-4 col-12 mb-1 custom-input-group">
                                    <label class="form-label" for="link">Link<span class="text-danger">*</span></label>
                                    <select class="form-control" name="link" id="link">
                                        <option selected disabled>--Select--</option>
                                        <option value="home" {{ (isset($seo) && $seo->link == 'home') ? 'selected' : ''}}>Home</option>
                                        <option value="about-us" {{ (isset($seo) && $seo->link == 'about-us') ? 'selected': ''}}>About Us</option>
                                        <option value="proceses" {{ (isset($seo) && $seo->link == 'proceses') ? 'selected': ''}}>Process</option>
                                        <option value="products" {{ (isset($seo) && $seo->link == 'products') ? 'selected': ''}}>product</option>
                                        <option value="contact-us" {{ (isset($seo) && $seo->link == 'contact-us') ? 'selected': ''}}>Contact Us</option>
                                    </select>
                                    <span class="invalid-feedback d-block" id="error_keyword" role="alert"></span>
                                </div>

                                <div class="col-12 col-md-12 ">
                                    <div class="row">
                                        <div class=" col-12 mb-1 form-group custom-input-group">
                                            <label class="form-label" for="description">Description</label>
                                            <textarea rows="4" name="description" id="description" class="form-control">{{ ((isset($seo) && isset($seo->description)) ? $seo->description : '')  }}</textarea>
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
                    url: "{{route('seo.store')}}",
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
                        keyword: {
                            required: true,
                        },
                        description: {
                            required: true,
                        },
                        link: {
                            required: true,
                        },

                    },
                    messages: {
                        title: {
                            required: "Enter Title"
                        },
                        keyword: {
                            required: "Enter Keyword"
                        },
                        description: {
                            required: "Enter Description"
                        },
                        link: {
                            required: "Enter Link"
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