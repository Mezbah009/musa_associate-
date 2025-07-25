@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create First Section</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('home_services_section.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <form method="POST" action="{{ route('home_services_section.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                    <p class="error"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote"
                                        placeholder="Description"></textarea>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="icon">Icon</label>
                                    <input type="file" class="form-control-file" id="icon" name="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('home_services_section.create') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </div>
        </form>

        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
@section('customJs')
    <script>
        $("#sectionForm").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            $("button[type=submit]").prop('disabled', true);
            $.ajax({
                url: '{{ route('home_services_section.store') }}',
                type: 'POST',
                data: element.serializeArray(), // Fixed typo: 'data' instead of 'date'
                dataType: 'json',
                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) { // Fixed typo: 'function' instead of 'funtion'
                    // Handle success response here
                    $("button[type=submit]").prop('disabled', false);
                    if (response["status"] == true) {
                        window.location.href = "{{ route('home_services_section.index') }}"



                    } else {
                        var errors = response['errors'];
                        $(".error").removeClass('is-invalid').html(
                        ''); // Remove error classes and clear error messages
                        $("input[type='text'], select").removeClass('is-invalid');
                        $.each(errors, function(key, value) {
                            $(`#${key}`).addClass(
                            'is-invalid'); // Add the 'is-invalid' class to the input
                            $(`#${key}`).next('p').addClass('invalid-feedback').html(
                            value); // Add the error message
                        });

                    }

                },
                error: function(jqXHR, exception) {
                    console.log("Something went wrong");
                }
            })
        });


        Dropzone.autoDiscover = false;
        const dropzone = $("").dropzone({
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
            },
            url: "{{ route('temp-images.create') }}",
            maxFiles: 1,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $("#image_id").val(response.image_id);
                console.log(response)
            }
        });
    </script>
@endsection
