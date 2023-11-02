<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Add New User">
  <meta name="description" content="">
  <title>admin-add_new_user</title>
  <link rel="stylesheet" href="{{css_path('nicepage.css')}}" media="screen">
  <link rel="stylesheet" href="{{css_path('admin-add_new_user.css','admin')}}" media="screen">
  <script class="u-script" type="text/javascript" src="{{js_path('jquery.js')}}" "="" defer=""></script>
    <script class=" u-script" type="text/javascript" src="{{js_path('nicepage.js')}}" "="" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "toolsment"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="admin-add_new_user">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
 @include('layouts.header')

@php

if($title!='update user'){
$action="/ssadmin/users";
$method='POST';
$name="";
$email="";
$username="";
$phone="";
$bio="";
$dob="";
$password="";
}else{
$action='/ssadmin/users/'.$user->id;
$method='PATCH';
$name=$user->name;
$email=$user->email;
$username=$user->username;
$phone=$user->phone;
$bio=$user->bio;
$dob=$user->DOB;
$password=$user->password;
}

@endphp



  <section class="u-clearfix u-gradient u-section-1" id="sec-b256">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div
        class="u-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-text-white u-icon-1"><img
              src="{{img_path('747376-e872e00f.png')}}" alt=""></span>
          <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">{{$title}}</h2>
          <div class="u-align-center u-expanded-width-xs u-form u-form-1">
            <form action="{{url($action)}}" method="POST"
              class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form" source="custom"
              name="form" style="padding: 23px;" redirect="true">
              @csrf
              @method($method)
              <div class="u-form-group u-form-name">
                <label for="name-b087" class="u-label u-text-body-alt-color u-label-1">Name*</label>
                <input type="text" placeholder="Enter your Name" id="name-b087" value="{{$name}}" name="name"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="">
              </div>
              <div class="u-form-email u-form-group">
                <label for="email-b087" class="u-label u-text-body-alt-color u-label-2">Email</label>
                <input type="email" placeholder="Enter a valid email address" id="email-b087" name="email" value="{{$email}}"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="">
              </div>
              <div class="u-form-group u-form-group-3">
                <label for="text-3f92" class="u-label u-text-body-alt-color u-label-3">Username</label>
                <input type="text" placeholder="Enter User Name" id="text-3f92" name="username" value="{{$username}}"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="required">
              </div>
              <div class="u-form-group u-form-phone u-form-group-4">
                <label for="phone-a711" class="u-label u-text-body-alt-color u-label-4">Phone</label>
                <input type="tel" pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$"
                  placeholder="Enter your phone (e.g. +14155552675)" id="phone-a711" name="phone" value="{{$phone}}"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
              </div>
              <div class="u-form-group u-form-textarea u-form-group-5">
                <label for="textarea-0d9c" class="u-label u-text-body-alt-color u-label-5">Bio</label>
                <textarea rows="4" cols="50" id="textarea-0d9c" name="bio" 
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                  placeholder="About You">{{$bio}}</textarea>
              </div>
              <div class="u-form-date u-form-group u-form-group-6">
                <label for="date-1977" class="u-label u-text-body-alt-color u-label-6">Date Of Birth</label>
                <input type="date" placeholder="MM/DD/YYYY" id="date-1977" name="DOB" value="{{$dob}}"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
              </div>
              <div class="u-form-group u-form-select u-form-group-7">
                <label for="select-45d4" class="u-label u-text-body-alt-color u-label-7">Gender</label>
                <div class="u-form-select-wrapper">
                  <select id="select-45d4" name="gender"
                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                    required="required">
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                  </svg>
                </div>
              </div>
              <div class="u-form-group u-form-group-8">
                <label for="text-dffd" class="u-label u-text-body-alt-color u-label-8">Enter Password</label>
                <input type="text" placeholder="Enter Your Strong Password" id="text-dffd" name="password" value="{{$password}}"
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="required">
              </div>
              <div class="u-form-group u-form-group-9">
                <label for="text-dd5f" class="u-label u-text-body-alt-color u-label-9">Confirm Password</label>
                <input type="text" id="text-dd5f" name="confirm_password" 
                  class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                  placeholder="Please Enter Your Password Again">
              </div>
              <div class="u-align-center u-form-group u-form-submit">
                <a href="#"
                  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-17 u-btn-1">Add
                  New User</a>
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


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7df8">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
    </div>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
      <span>Website Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
      <span>Website Builder Software</span>
    </a>.
  </section>

</body>

</html>