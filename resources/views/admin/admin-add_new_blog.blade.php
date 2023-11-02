<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Add New Blog Post">
    <meta name="description" content="">
    <title>admin-add_new_blog</title>
    <link rel="stylesheet" href="{{ css_path('nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ css_path('admin-add_new_blog.css', 'admin') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ js_path('jquery.js') }}" "="" defer=""></script>
    <script class=" u-script" type="text/javascript" src="{{ js_path('nicepage.js') }}" "="" defer=""></script>
    <script src="https://cdn.ckeditor.com/4.19.1/standard-all/ckeditor.js"></script>
</head>

<body class="u-body u-xl-mode" data-lang="en">
    @include('layouts.header')


    @php
        
        if ($title != 'update blog') {
            $action = '/ssadmin/blogs';
            $method = 'POST';
            $post_title = '';
            $post_content = '';
            $image = '';
            $description = '';
            $category = '';
            $tags = '';
        } else {
            $action = '/ssadmin/blogs/' . $blog->id;
            $method = 'PATCH';
            $post_title = $blog->post_title;
            $post_content = $blog->post_content;
            $image = $blog->image;
            $description = $blog->description;
            $category = $blog->category;
            $tags = $blog->tags;
        }
        
    @endphp


    <section class="u-clearfix u-gradient u-section-1" id="sec-14c4">
        <div
            class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div
                class="u-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-group u-shape-rectangle u-group-1">
                <div
                    class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                    <span class="u-file-icon u-icon u-text-white u-icon-1"><img
                            src="{{ img_path('4922073-59876fda.png') }}" alt=""></span>
                    <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">{{ $title }}</h2>
                    <div
                        class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-expanded-width-xs u-form u-form-1">
                        <form action="{{ url($action) }}" method="POST" enctype="multipart/form-data"
                            class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form"
                            source="custom" name="form" style="padding: 23px;" redirect="true">
                            @csrf
                            @method($method)
                            <div class="u-form-group u-form-group-1">
                                <label for="text-1836" class="u-label u-text-body-alt-color u-label-1">Post
                                    Title</label>
                                <input type="text" placeholder="" id="text-1836" name="post_title"
                                    value="{{ $post_title }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-textarea u-form-group-2">
                                <label for="textarea-137e" class="u-label u-text-body-alt-color u-label-2">post
                                    content</label>
                                <textarea rows="4" cols="50" id="textarea-137e" name="post_content"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="">{{ $post_content }}</textarea>
                            </div>
                            <div class="u-form-group u-form-group-3">
                                <label for="text-2e9f" class="u-label u-text-body-alt-color u-label-3">post
                                    image</label>
                                <input type="file" placeholder="" id="text-2e9f" name="image"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-group-4">
                                <label for="text-f1de" class="u-label u-text-body-alt-color u-label-4">Meta
                                    Description</label>
                                <input type="text" placeholder="" id="text-f1de" name="description"
                                    value="{{ $description }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-select u-form-group-5">
                                <label for="select-6b01"
                                    class="u-label u-text-body-alt-color u-label-5">Category</label>
                                <div class="u-form-select-wrapper">
                                    <select id="select-6b01" name="category"
                                        class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                        required="required">
                                        @php
                                            $a = app('App\Http\Controllers\indexpage')->getcategory();
                                            // foreach ($a as $value) {
                                            // echo $value->category_name;}
                                        @endphp




                                        <option value="" disabled selected>Select Category For Tool</option>

                                        @foreach ($a as $item)
                                            <option value="{{ $item->category_name }}">{{ $item->category_name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                        class="u-caret">
                                        <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="u-form-group u-form-textarea u-form-group-6">
                                <label for="textarea-d9b0"
                                    class="u-label u-text-body-alt-color u-label-6">Tags</label>
                                <textarea rows="4" cols="50" id="textarea-d9b0" name="tags"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="">{{ $tags }}</textarea>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <a href="#"
                                    class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-17 u-btn-1">{{ $btn_text }}</a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been
                                sent. </div>
                            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix
                                errors then
                                try again. </div>
                            <input type="hidden" value="" name="recaptchaResponse">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        CKEDITOR.replace( 'post_content' );
</script>

</body>

</html>
