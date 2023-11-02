




















@extends('layouts.main')
@section('head')

<meta name="keywords" content="Coaching Services, Coaching Services, Who We Are,blog,toolsment blog,blog toolsment,toolsment,">
<meta name="description" content="we create amazing blog posts for you. by using this blog post you will be able to understand and learn how to use tools, new tools,technology and tip and tricks.">
<title>Blogs - Toolsment.com</title>
    <link rel="stylesheet" href="{{ css_path('Blogs.css', 'public') }}" media="screen">

@endsection


@section('main-section')


<section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-b0b6">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-body-alt-color u-title u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">Blo​g</h1>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">we create amazing blog posts for you. by using this blog post you will be able to understand and learn how to use tools, new tools,technology and tip and tricks.</p>
      {{-- <a href="#" class="u-border-none u-btn u-button-style u-custom-color-2 u-btn-1" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">Get posts Basis ON Category</a> --}}
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-f6b5">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-container-style u-expanded-width u-group u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <form action="" method="get" class="u-border-1 u-border-grey-30 u-expanded-width u-radius-10 u-search u-search-right u-white u-search-1">
            <button class="u-search-button" type="submit">
              <span class="u-search-icon u-spacing-10">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7421"></use></svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7421" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
              </span>
            </button>
            <input class="u-search-input" type="search" name="search" value="{{$search_value}}" placeholder="Search">
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-3" id="sec-ce2f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-align-center u-custom-font u-font-oswald u-text u-title u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">
        @if (isset($search_value))
            {!!'Search Result For "'.$search_value.'"'!!}

            @else
            Recent Posts
        @endif

      </h1>
    </div>
  </section>
  <section class="u-clearfix u-section-4" id="sec-3575">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-sheet-1">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">

            @if ($blog=='[]')
            <strong> {{'No Result Found! Please Search By Other Keywords'}}</strong>
@endif
        @foreach ($blog as $item)

          <div style="background-image: linear-gradient(0deg, rgba(0,0,0,0.25), rgba(0,0,0,0.25)), url('{{ url('/public/Blog_Image/' . $item->image) }}');"  class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-1" data-image-width="1280" data-image-height="853" data-href="{{ url('blogs/' . $item->str_url) }}">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
              <h3 class="u-text u-text-default u-text-1"> {{ $item->post_title }}</h3>
              <p class="u-text u-text-default u-text-2"> {{ $item->description }}</p>
            </div>
          </div>

          @endforeach

{{--
          <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-2" data-image-width="1280" data-image-height="853">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <h3 class="u-text u-text-default u-text-3">Sample Headline</h3>
              <p class="u-text u-text-default u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
          </div>
          <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-3" data-image-width="1280" data-image-height="853">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <h3 class="u-text u-text-default u-text-5">Sample Headline</h3>
              <p class="u-text u-text-default u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
          </div>
          <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-4" data-image-width="1280" data-image-height="853">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <h3 class="u-text u-text-default u-text-7">Sample Headline</h3>
              <p class="u-text u-text-default u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
          </div>
          <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-5" data-image-width="1280" data-image-height="720">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
              <h3 class="u-text u-text-default u-text-9">Sample Headline</h3>
              <p class="u-text u-text-default u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
          </div>--}}
          {{-- <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-6" data-image-width="1280" data-image-height="853">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
              <h3 class="u-text u-text-default u-text-11">Sample Headline</h3>
              <p class="u-text u-text-default u-text-12">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </section>

@endsection










































