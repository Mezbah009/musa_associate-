@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Contact Us</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('contact.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="country_name">Country name</label>
                                    <input type="text" name="country_name" id="country_name" class="form-control"
                                        placeholder="Country name" value="{{ old('country_name') }}">
                                    @error('country_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="company_name">Company name</label>
                                    <input type="text" name="company_name" id="company_name" class="form-control"
                                        placeholder="Company name" value="{{ old('company_name') }}">
                                    @error('company_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="office_name">Office name</label>
                                    <input type="text" name="office_name" id="office_name" class="form-control"
                                        placeholder="Office name" value="{{ old('office_name') }}">
                                    @error('office_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Address" value="{{ old('address') }}">
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mobile">Mobile</label> <!-- Added mobile field -->
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        placeholder="Mobile Number" value="{{ old('mobile') }}">
                                    @error('mobile')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="website">Twitter</label>
                                    <input type="text" name="website" id="website" class="form-control"
                                        placeholder="Twitter" value="{{ old('website') }}">
                                    @error('website')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="linkedIn">LinkedIn</label>
                                    <input type="text" name="linkedIn" id="linkedIn" class="form-control"
                                        placeholder="LinkedIn" value="{{ old('linkedIn') }}">
                                    @error('linkedIn')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        placeholder="Facebook" value="{{ old('facebook') }}">
                                    @error('facebook')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" name="youtube" id="youtube" class="form-control"
                                        placeholder="Youtube" value="{{ old('youtube') }}">
                                    @error('youtube')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- Add similar fields for office_name and address -->
                            {{-- <div class="col-md-3">
                                <div class="mb-1">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-1">
                                    <label for="flag">Flag</label>
                                    <input type="file" id="flag" name="flag" class="form-control">
                                    @error('flag')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('contact.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </form>
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
                url: '{{ route('contact.store') }}',
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
                        window.location.href = "{{ route('contact.index') }}"



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


        // Dropzone.autoDiscover = false;
        // const dropzone = $("#image").dropzone({
        //     init: function() {
        //         this.on('addedfile', function(file) {
        //             if (this.files.length > 1) {
        //                 this.removeFile(this.files[0]);
        //             }
        //         });
        //     },
        //     url: "{{ route('temp-images.create') }}",
        //     maxFiles: 1,
        //     paramName: 'image',
        //     addRemoveLinks: true,
        //     acceptedFiles: "image/jpeg,image/png,image/gif",
        //     headers: {

        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     success: function(file, response) {
        //         $("#image_id").val(response.image_id);
        //         console.log(response)
        //     }
        // });
        Dropzone.autoDiscover = false;

        // Dropzone for the image input with ID "image"
        const dropzoneImage = new Dropzone("", { // Added closing parenthesis here
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
            },
            url: "{{ route('temp-images.create') }}",
            maxFiles: 1, // Limit to only one file
            paramName: '',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $("#image_id").val(response.image_id);
                console.log(response);
            }
        });

        // Dropzone for the flag input with ID "flag"
        const dropzoneFlag = new Dropzone("", {
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
            },
            url: "{{ route('temp-images.create') }}",
            maxFiles: 1, // Limit to only one file
            paramName: 'flag',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, response) {
                $("#flag_id").val(response.flag_id);
                console.log(response);
            }
        });
    </script>
@endsection
