@extends('layouts.app')
@section('title', 'Choose Us')
@section('content')
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">ChooseUs List</h2>
                    <!-- <a role="button" class="btn btn-primary float-end" href="{{route('chooseus.create')}}">Add Choose Us</a></li> -->
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card p-2">
                        <table id="chooseus_list" class="datatables-basic table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="acton-heading">Action</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('pagescript')

<script type="text/javascript">
    'use strict';
    const URL = "{{route('chooseus.index')}}";

    //About list listing using ajax server side datatable
    var table = '';
    $(function() {
        table = $('#chooseus_list').DataTable({
            ajax: URL,
            processing: true,
            serverSide: true,
            fixedHeader: true,
            scrollX: true,
            columns: [{
                    data: 'id',
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    sortable: false
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'short_description',
                    name: 'short_description'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'image',
                    name: 'image'
                },

            ],
            initComplete: function(settings, json) {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })
            }
        });
    });

    $(document).on('click', '.delete', function() {
        var btn = $(this);
        var id = btn.data('id');
        // alert(id);
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
                                table.ajax.reload(null, false);
                                // btn.parent().parent().remove();
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
    $(document).on('click', '.read-more', function() {
        var me = $(this);
        var test = me.parent().children(':first-child');
        test.addClass("show-more");
        me.text("Read less");
        me.addClass("show-more");
        me.removeClass("read-more");
    });
    $(document).on('click', '.show-more', function() {
        var me = $(this);
        var test = me.parent().children(':first-child');
        test.removeClass("show-more");
        me.text("Read more");
        me.addClass("read-more");
        me.removeClass("show-more");
    });
</script>
@endsection