<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Add New Tool">
    <meta name="description" content="">
    <title>admin-add_new_tool</title>
    <link rel="stylesheet" href="{{ css_path('nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ css_path('admin-add_new_tool.css', 'admin') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ js_path('jquery.js') }}" "="" defer=""></script>
    <script class=" u-script" type="text/javascript" src="{{ js_path('nicepage.js') }}" "="" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "toolsment"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="admin-add_new_tool">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
    @include('layouts.header')

    @php
        
        if ($title != 'update tool') {
            $action="/ssadmin/tools";
            $method='POST';
            $name='';
            $category='';
            $icon='';
            $description='';
            $source_code_file_url='';
            $tags='';
            $for_register_users='';
        } else {
            $action='/ssadmin/tools/' . $tools->id;
            $method='PATCH';
            $name = $tools->name;
            $category = $tools->category;
            $icon = $tools->icon;
            $description = $tools->discription;
            $source_code_file_url = $tools->source_code_file_url;
            $tags = $tools->tags;
            $for_register_users = $tools->for_register_users;
        }
        
    @endphp


    <section class="u-clearfix u-gradient u-section-1" id="sec-e79e">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div
                class="u-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-group u-shape-rectangle u-group-1">
                <div
                    class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                    <span class="u-file-icon u-icon u-text-white u-icon-1"><img
                            src="{{ img_path('1086581-33b9f647.png') }}" alt=""></span>
                    <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">{{ $title }}</h2>
                    <div
                        class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-expanded-width-xs u-form u-form-1">
                        <form action="{{ url($action) }}" method="POST" enctype="multipart/form-data"
                            class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form"
                            source="custom" name="form" style="padding: 23px;" redirect="true">
                            @csrf
                            @method($method)
                            <div class="u-form-group u-form-group-1">
                                <label for="text-1836" class="u-label u-text-body-alt-color u-label-1">Tool Name</label>
                                <input type="text" placeholder="" id="text-1836" name="name"
                                    value="{{ $name }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-group-2">
                                <label for="text-2e9f" class="u-label u-text-body-alt-color u-label-2">Tool Icon
                                </label>
                                <input type="file" placeholder="" id="text-2e9f" name="icon"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required" accept="image/*">
                            </div>
                            <div class="u-form-group u-form-group-3">
                                <label for="text-f1de" class="u-label u-text-body-alt-color u-label-3">Tool
                                    Description</label>
                                <input type="text" placeholder="" id="text-f1de" name="discription"
                                    value="{{ $description }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-textarea u-form-group-4">
                                <label for="textarea-137e" class="u-label u-text-body-alt-color u-label-4">Tool Code
                                    File</label>
                                <input rows="4" cols="50" id="textarea-137e" name="source_code_file_url"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required" type="file" accept=".zip">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12"
                                        version="1" class="u-caret">
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
                            <div class="u-form-group u-form-select u-form-group-7">
                                <label for="select-4504" class="u-label u-text-body-alt-color u-label-7">Available For
                                    Register
                                    Users?</label>
                                <div class="u-form-select-wrapper">
                                    <select id="select-4504" name="for_register_users"
                                        class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                        required="required">
                                        <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12"
                                        version="1" class="u-caret">
                                        <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                    </svg>
                                </div>
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



</body>

</html>
