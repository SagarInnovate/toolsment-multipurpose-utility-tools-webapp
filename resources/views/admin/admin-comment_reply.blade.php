{{-- @php

   print_r($contact); 
@endphp --}}

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Add New Category">
  <meta name="description" content="">
  <title>admin-comment_reply</title>
  <link rel="stylesheet" href="{{css_path('nicepage.css')}}" media="screen">
  <link rel="stylesheet" href="{{css_path('admin-comment_reply.css','admin')}}" media="screen">
  <script class="u-script" type="text/javascript" src="{{js_path('jquery.js')}}" "="" defer=""></script>
    <script class=" u-script" type="text/javascript" src="{{js_path("nicepage.js")}}" "="" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "toolsment"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="admin-comment_reply">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
@include('layouts.header')
  <section class="u-clearfix u-gradient u-section-1" id="sec-5883">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div
        class="u-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-group u-shape-rectangle u-group-1">
        <div
          class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
          <span class="u-file-icon u-icon u-text-white u-icon-1"><img src="{{img_path('6517590-8390ff18.png')}}" alt=""></span>
          <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">Reply Comment</h2>
          <div
            class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-expanded-width-xs u-form u-form-1">
            <form action="#" method="POST"
              class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form" source="custom"
              name="form" style="padding: 23px;" redirect="true">
              <div class="u-form-group u-form-group-1">
                <label for="text-1836" class="u-label u-text-body-alt-color u-label-1">Username</label>
                <input type="text" placeholder="" id="text-1836" name="username" value="{{$contact->username}}"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="required">
              </div>
              <div class="u-form-group u-form-message u-form-group-2">
                <label for="text-2e9f" class="u-label u-text-body-alt-color u-label-2">comment content</label>
                <textarea id="text-2e9f" name="Comment_content" 
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                  required="required">{{$contact->message}}</textarea>
              </div>
              <div class="u-form-group u-form-select u-form-group-3">
                <label for="select-beae" class="u-label u-text-body-alt-color u-label-3">Post Or Tool</label>
                <div class="u-form-select-wrapper">
                  <select id="select-beae" name="pt"
                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                    required="required">
                    <option value="Post">Post</option>
                    <option value="Tool">Tool</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                  </svg>
                </div>
              </div>
              <div class="u-form-group u-form-group-4">
                <label for="text-8d86" class="u-label u-text-body-alt-color u-label-4">Post Title</label>
                <input type="text" placeholder="" id="text-8d86" 
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
              </div>
              <div class="u-form-email u-form-group u-form-group-5">
                <label for="text-59b5" class="u-label u-text-body-alt-color u-label-5">Auther Email</label>
                <input type="email" placeholder="" id="text-59b5" name="auth_email" value="{{$contact->email}}"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
              </div>
              <div class="u-form-group u-form-textarea u-form-group-6">
                <label for="textarea-137e" class="u-label u-text-body-alt-color u-label-6">Reply</label>
                <textarea rows="4" cols="50" id="textarea-137e" name="category_description"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required=""
                  placeholder="sagar! enter your reply"></textarea>
              </div>
              <div class="u-align-center u-form-group u-form-submit">
                <a href="#"
                  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-17 u-btn-1">Reply
                  This Comment</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
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