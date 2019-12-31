@extends('layouts.app')

@section('content')
    <div class="container">

        {{ $errors->first() }}

        <form action="{{ route('imageUpload') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label>Заголовок:</label>
                <input type="text" name="title" class="form-control bg-dark text-white" placeholder="Заголовок">
            </div>

            <div class="form-group">
                <img id="preview_image_upload" src="" alt="your image">
                <br>
                <label for="image_field" class="btn btn-dark">Выбрать картинку</label>
                <input id="image_field" type="file" name="image" class="bg-dark text-white">
            </div>


            <div class="form-group">
                <button class="btn btn-success upload-image" type="submit">Загрузить картинку</button>
            </div>


        </form>
    </div>

@endsection

@section('custom_script')
    <script>
        $(document).ready(function () {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview_image_upload').attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#image_field').change(function () {
                readURL(this);
            })
        });
    </script>
    <style>
        #image_field {
            display: none;
        }
        #preview_image_upload {
            display: none;
            max-width: 100%;
            height: 300px;
            object-fit: cover;
            margin: 0 0 15px 0;
        }
    </style>
@endsection
