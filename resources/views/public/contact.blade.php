@extends('layouts.main')
@section('head')

    <meta name="keywords" content="​About Us, Contact us, Follow us,contacts us, contact us toolsment,contact us, toolsment">
    <meta name="description"
        content="if you have any query or doub then you can contact us by using below form.We will try our best to respond in&nbsp;less than 24 Hours">
    <title>Contact Us - Toolsment.com </title>
    <link rel="stylesheet" href="{{ css_path('Contact.css', 'public') }}" media="screen">

@endsection




@section('main-section')
<section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-f478">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-body-alt-color u-title u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">Contact us</h1>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000">hi guys ! if you have any query or doub then you can contact us by using below form.We will try our best to respond in&nbsp;<b>less than 24 Hours</b>, Thanks!
      </p>
    </div>
  </section>
  <section class="u-clearfix u-expanded-width-xl u-section-2" id="carousel_fb92">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center-md u-align-center-sm u-align-center-xs u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
        <form action="{{ url('/contacts') }}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-24 u-form-vertical u-inner-form" style="padding: 0px;" source="custom" name="form" redirect="true">
            @csrf
          <div class="u-form-group u-form-name">
            <label for="name-3b9a" class="u-form-control-hidden u-label" wfd-invisible="true">Name</label>
            <input type="text" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1" required="">
          </div>
          <div class="u-form-email u-form-group">
            <label for="email-3b9a" class="u-form-control-hidden u-label" wfd-invisible="true">Email</label>
            <input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2" required="">
          </div>
          <div class="u-form-group u-form-message">
            <label for="message-3b9a" class="u-form-control-hidden u-label" wfd-invisible="true">Message</label>
            <textarea placeholder="Enter your message" rows="4" cols="50" id="message-3b9a" name="message" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required=""></textarea>
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <a href="#" class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-palette-2-base u-radius-10 u-btn-1">Submit</a>
            <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
          </div>
          <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
          <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
          <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
        </form>
      </div>
    </div>
  </section>

@endsection

</body>

</html>
