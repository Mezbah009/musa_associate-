@extends('admin.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update Numbers & Email</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('numbers.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <form method="POST" action="{{ route('numbers.update', $numbers->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Email" value="{{ old('email', $numbers->email) }}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Phone" value="{{ old('phone', $numbers->phone) }}">
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    placeholder="Address" value="{{ old('address', $numbers->address) }}">
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5 pt-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('numbers.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
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
            url: '{{ route("numbers.store") }}',
            type: 'PUT',
            data: element.serializeArray(), // Fixed typo: 'data' instead of 'date'
            dataType: 'json',
            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) { // Fixed typo: 'function' instead of 'funtion'
                // Handle success response here
                $("button[type=submit]").prop('disabled', false);
                if (response["status"] == true) {
                    window.location.href = "{{route('numbers.index')}}"



                } else {
                    var errors = response['errors'];
                    $(".error").removeClass('is-invalid').html(''); // Remove error classes and clear error messages
                    $("input[type='text'], select").removeClass('is-invalid');
                    $.each(errors, function(key, value) {
                        $(`#${key}`).addClass('is-invalid'); // Add the 'is-invalid' class to the input
                        $(`#${key}`).next('p').addClass('invalid-feedback').html(value); // Add the error message
                    });

                }

            },
            error: function(jqXHR, exception) {
                console.log("Something went wrong");
            }
        })
    });


    Dropzone.autoDiscover = false;
    const dropzone = $("#image,#logo").dropzone({
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
