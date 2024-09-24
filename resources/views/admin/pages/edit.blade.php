@extends('layouts.admin.master')

@section('page-title', $page->title)

@push('css')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        .note-toolbar {
            background-color: #343a40;
            color: #fff;
        }

        .note-toolbar .note-btn {
            color: #fff !important;
        }

        .avatar-picture {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 33px;
        }

        .avatar-picture .image-input {
            position: relative;
            display: inline-block;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .avatar-picture .image-input .image-input-wrapper {
            border: 3px solid #fff;
            background-image: url("");
            width: 300px;
            height: 300px;
            background-repeat: no-repeat;
            background-size: contain !important;
        }

        .avatar-picture .image-input .btn {
            height: 24px;
            width: 24px;
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            left: 3px;
            bottom: -7px;
            background-color: #FFFFFF;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.16));
        }

        .avatar-picture .image-input .btn img {
            position: relative;
            top: -2px;
        }

        .avatar-picture .image-input .btn:hover {
            background-color: var(--main-color);
        }

        .avatar-picture .image-input .btn:hover img {
            filter: invert(1) brightness(10);
        }

        .avatar-picture .image-input .btn input {
            width: 0 !important;
            height: 0 !important;
            overflow: hidden;
            opacity: 0;
            display: none;
        }
        .note-btn-group i , .note-current-fontname {
            color: black !important;
        }
    </style>
@endpush

@section('content')
    @include('admin.partials.page_header', [
        'current_page_name' => $page->title,
        'sub_pages' => [
            $page->title => route('admin.contacts.index'),
        ],
    ])

    {{-- START FORM --}}
    <form action="{{ route('admin.page.update', ['slug' => $page->slug]) }}" method="POST" class="custom-form"
        enctype="multipart/form-data">
        @csrf

        <!-- Avatar Picture Card -->
        <div class="card mt-5">
            <div class="card-body">
                <div class="avatar-picture">
                    <div class="image-input image-input-outline" id="imgUserProfile">
                        <div class="image-input-wrapper"
                            style="background-image: url('{{ asset('assets/common/product-placeholder.webp') }}');">
                        </div>
                        <label class="btn">
                            <i>
                                <img src="{{ asset('assets/common/edit.svg') }}" alt="" class="img-fluid">
                            </i>
                            <input type="file" name="intro_image" id="changeImg" accept=".png, .jpg, .jpeg">
                            <input type="button" value="Upload" id="uploadButton">
                        </label>
                        <small class="p-5">Page Intro Image</small>
                    </div>
                </div>
            </div>
        </div><!--end card-->

        <!-- Page Content Card -->
        <div class="card mt-4">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Page Content</label>
                    <textarea id="summernote" name="content">{{ $page->content }}</textarea>
                </div>
            </div>
        </div><!--end card-->

        <!-- Submit Button -->
        <div class="row mt-5">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="{{ __('general.save') }}">
            </div><!--end col-->
        </div><!--end row-->
    </form>
    {{-- END FORM --}}
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            var noteBar = $('.note-toolbar');
        noteBar.find('[data-toggle]').each(function() {
            $(this).attr('data-bs-toggle', $(this).attr('data-toggle')).removeAttr('data-toggle');
        });

            // Set the content of the editor
            $('#summernote').summernote('code', {!! json_encode($page->content) !!});

            // Change image and preview
            $('#uploadButton').on('click', function() {
                $('#changeImg').click();
            });

            $('#changeImg').change(function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onloadend = function() {
                    $('.image-input-wrapper').css('background-image', 'url("' + reader.result + '")');
                }
                if (file) {
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
    @isset($page->intro_image)
        <script>
            var intro_image = "{{ getImageUrl($page->intro_image) }}";
            $('.image-input-wrapper').css('background-image', 'url("' + intro_image + '")');
        </script>
    @endisset
@endpush
