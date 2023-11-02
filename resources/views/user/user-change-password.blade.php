@extends('layouts.user-main')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Profile, ​&nbsp;Favorite Tools, ​Change Password">
    <meta name="description" content="">
    <title>user-change-password</title>
    <link rel="stylesheet" href="{{ css_path('user-change-password.css', 'user') }}" media="screen">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">




    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "toolsment"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="user-change-password">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
@endsection

@section('main-section')
    <section class="u-clearfix u-section-2" id="sec-68e8">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-c9b4">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-expanded-width u-gradient u-group u-radius-30 u-shape-round u-group-1"
                data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">
                <div class="u-container-layout u-container-layout-1"><span
                        class="u-align-center u-file-icon u-icon u-text-white u-icon-1"><img
                            src="{{ img_path('3521105-eafd70d3.png') }}" alt=""></span>
                    <div class="u-align-left u-form u-form-1">
                        <form action="#" method="POST"
                            class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form"
                            source="custom" name="form" style="padding: 23px;" redirect="true">
                            @csrf
                            <div class="u-form-group u-form-group-1">
                                <label for="text-3f92" class="u-label u-text-body-alt-color u-label-1">Username</label>
                                <input type="text" placeholder="Enter User Name" id="text-3f92" name="text"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-group-2">
                                <label for="text-8c4f" class="u-label u-text-body-alt-color u-label-2"> Old Password</label>
                                <input type="text" placeholder="Enter Your Old Password" id="text-8c4f" name="text-3"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-group-3">
                                <label for="text-dffd" class="u-label u-text-body-alt-color u-label-3">New Password</label>
                                <input type="text" placeholder="Enter Your New Strong Password" id="text-dffd"
                                    name="text-1"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-group-4">
                                <label for="text-dd5f" class="u-label u-text-body-alt-color u-label-4">Confirm
                                    Password</label>
                                <input type="text" id="text-dd5f" name="text-2"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    placeholder="Please Enter Your Password Again">
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <a href="#"
                                    class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-17 u-btn-1">Change
                                    Password</a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent.
                            </div>
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
    @include('layouts.div')
@endsection

</body>

</html>
