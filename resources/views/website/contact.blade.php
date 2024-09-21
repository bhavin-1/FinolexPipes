@extends('layouts.web')
@section('title', 'Contact')
@section('content')

<div class="dlab-bnr-inr overlay-black-middle text-center bg-pt header-bg-img  ">

    <div class="container">
        <div class="dlab-bnr-inr-entry text-center">
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row ">
                <ul class="list-inline">
                    <li class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><a href="{{route('home')}}">Home</a></li>
                    <li class="wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">Contact</li>
                </ul>
                <h2 class="text-white wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">Contact</h2>
            </div>
            <!-- Breadcrumb row END -->
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row justify-content-center match-height-col my-2 my-md-3 my-lg-4 ">
            <div class="col-12 col-md-8 col-lg-11">
                <div class="card shadow p-2 p-md-3 p-lg-5">
                    <form class="row g-3 form" id="form" action="{{route('save-contact')}}" method="post">
                        @csrf
                        <div class="col-12 col-md-6 col-lg-6 custom-input-group wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="input-group ">
                                <i class="fa fa-user icon-margin"></i>
                                <input type="text" class="form-control contact-control" id="name" name="name" placeholder="Your Name" aria-label="Name" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="input-group ">
                                <i class="fa fa-envelope icon-margin"></i>
                                <input type="email" class="form-control contact-control" id="email" name="email" placeholder="Email Id " aria-label="Email" aria-describedby="basic-addon1">
                            </div>

                        </div>
                        <div class="col-12 col-md-6 col-lg-6 custom-input-group wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="input-group">
                                <i class="fa fa-phone icon-margin"></i>
                                <input type="text" class="form-control contact-control" maxlength="10" id="number" name="number" placeholder="Phone No." aria-label="Number" aria-describedby="basic-addon1">
                                <span class="invalid-feedback d-block" id="error_number" role="alert"></span>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 custom-input-group wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="input-group">
                                <i class="fa fa-edit icon-margin"></i>
                                <input type="text" class="form-control contact-control" id="subject" name="subject" placeholder="Subject" aria-label="Subject" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-12  custom-input-group wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="input-group ">
                                <i class="fa fa-book icon-margin"></i>
                                <textarea type="text" class="form-control contact-control" rows="5" id="message" name="message" placeholder="Your Message" aria-label="Subject" aria-describedby="basic-addon1"></textarea>
                            </div>
                        </div>
                        <div class="col-12 align-center wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <button type="submit" class="btn btn-theme flot-right save">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="secondry-bg ">
    <div class="bg-contact"></div>
    <div class="container">
        <div class="row contact-padding">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <h1 class="contact-title">Number</h1>
                <div class="contact-flex">
                    <div class="">
                        <i class="fa fa-phone fa-lg main-text pr-15"></i>
                    </div>
                    <div class="">
                        <a href="tel:+91 80000 99081" target="_blank" class="text-white" style="text-decoration: none;">+91 8000099081</a>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h1 class="contact-title">Email</h1>
                <div class="contact-flex">
                    <div class="">
                        <i class="fa fa-envelope fa-lg main-text pr-15"></i>
                    </div>
                    <div class="">
                        <a href="mailto:ambitionpipes19@gmail.com" target="_blank" class="text-white" style="text-decoration: none;"> ambitionpipes19@gmail.com</a>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <h1 class="contact-title">Address</h1>
                <div class="contact-flex">
                    <div class="">
                        <i class="fa fa-map-marker fa-lg main-text pr-15"></i>
                    </div>
                    <div class="">
                        <a href="https://maps.app.goo.gl/J2vTfxaeFk1V2dtf7" target="_blank"><span class="text-white">Ambition Pipes Plot No. 11, Shubh Ind. Zone, Nr. Makhavad Chowkdi, Khambha, Ta. Lodhika, Dist. Rajkot (Gujarat)</span></a>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.3582771690385!2d70.72021937593938!3d22.15043014830987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395833802e1fdc99%3A0x58d6e60df91c18d4!2sAmbition%20pipes!5e0!3m2!1sen!2sin!4v1695880424490!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>



@endsection
@section('pagescript')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    'use strict';
    const URL = "{{route('contact.index')}}";


    $(document).ready(function() {
        $('.save').on('click', function() {
            var formData = new FormData($("#form")[0]);
            var temp = ($("#name").val() != "");

            if (temp) {
                $.ajax({
                    type: "POST",
                    url: "{{route('save-contact')}}",
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
                        name: {
                            required: true,
                        },
                        number: {
                            required: true,
                        },
                        subject: {
                            required: true,
                        },
                        message: {
                            required: true,
                        },

                    },
                    messages: {
                        name: {
                            required: "Enter Name"
                        },
                        number: {
                            required: "Enter Number"
                        },
                        subject: {
                            required: "Enter Subject"
                        },
                        message: {
                            required: "Enter Message"
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

    $(document).on('click', '.delete', function() {
        var btn = $(this);
        var id = btn.data('id');
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            })
            .then(function(result) {
                if (result.value) {
                    axios.delete(URL + '/' + id)
                        .then(function(response) {
                            if (response.data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: 'Your record has been deleted.',
                                    customClass: {
                                        confirmButton: 'btn btn-success'
                                    }
                                });
                                btn.parent().parent().remove();
                            } else if (response.data.warning) {
                                toastr.warning(response.data.errorMessage, 'Opps!');
                            } else {
                                toastr.error(response.data.errorMessage, 'Opps!');
                            }
                        })
                        .catch(function() {
                            toastr.error('Someting went wrong. Please try again.', 'Opps!');
                        });
                } else {
                    Swal.fire({
                        text: 'Your data is safe!'
                    });
                }
            });
    });
</script>
@endsection