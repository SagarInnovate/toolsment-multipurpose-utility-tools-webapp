@extends('layouts.user-main')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Profile, ​&nbsp;Favorite Tools, user-more">
    <meta name="description" content="">
    <title>user-more</title>
    <link rel="stylesheet" href="{{ css_path('user-more.css', 'user') }}" media="screen">

    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">




    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "toolsment"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="user-more">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
@endsection
@section('main-section')
    <section class="u-clearfix u-section-3" id="sec-769d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-center u-container-style u-expanded-width u-gradient u-group u-radius-31 u-shape-round u-group-1"
                data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
                <div class="u-container-layout u-container-layout-1">
                    <div class="u-clearfix u-expanded-width u-group-elements u-group-elements-1"><span
                            class="u-file-icon u-icon u-text-white u-icon-1"><img
                                src="{{ img_path('7486809-975c24d5.png') }}" alt=""></span>
                        <h1 class="u-text u-text-body-alt-color u-text-1">There is nothing more about you</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.div')
@endsection
