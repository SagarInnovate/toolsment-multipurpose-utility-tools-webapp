@extends('layouts.main')
@section('head')

    <meta name="keywords" content="">
    <meta name="description" content="Looking for the best web-tools and seo tools? Look no further than our website! We offer a wide range of tools that will help you.">
    <title>tools</title>
    <link rel="stylesheet" href="{{ css_path('tools.css', 'public') }}" media="screen">

@endsection


@section('main-section')
<section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-a3ba">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-body-alt-color u-title u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">Tools</h1>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">we create amazing blog posts for you. by using this blog post you will be able to understand and learn how to use t​ools, new tools,technology and tip and tricks.</p>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-b175">
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
  <section class="u-align-center u-clearfix u-section-3" id="sec-e42c">
    <div class="u-align-left u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
      <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-col">
            {{-- <div class="u-align-center-sm u-align-center-xs u-container-style u-custom-color-2 u-layout-cell u-size-30 u-top-left-radius-15 u-top-right-radius-15 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h1 class="u-custom-font u-font-titillium-web u-text u-text-body-alt-color u-title u-text-1"> Toolsment.com - 100% Free Small SEO Tools </h1>
                <h2 class="u-custom-font u-font-montserrat u-subtitle u-text u-text-body-alt-color u-text-2"> The Best Free SEO ,Digital Marketing And Web Tool You will Ever Need!</h2>
              </div>
            </div> --}}
            <div class="u-container-style u-custom-color-3 u-layout-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expanded-width u-list u-list-1">
                  <div class="u-repeater u-repeater-1">
                      @if ($tools=='[]')
                      <strong> {{'No Result Found! Please Search By Other Keywords'}}</strong>
@endif
                    @foreach ($tools as $tool)
                    <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-1"       data-href="{{ url('tools/' . $tool->str_url) }}" data-target="_blank">
                      <div class="u-container-layout u-similar-container u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-3">
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="{{ url('public/image/' . $tool->icon) }}" alt="" data-image-width="128" data-image-height="128">
                        <p class="u-large-text u-text u-text-variant u-text-3"> {{ $tool->name }}</p>
                      </div>
                    </div>
                    @endforeach

                    {{-- <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-2">
                      <div class="u-container-layout u-similar-container u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-4">
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="images/2350244.png" alt="" data-image-width="128" data-image-height="128">
                        <p class="u-large-text u-text u-text-variant u-text-4">Image Crop Tool</p>
                      </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-3">
                      <div class="u-container-layout u-similar-container u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-5">
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="images/2350244.png" alt="" data-image-width="128" data-image-height="128">
                        <p class="u-large-text u-text u-text-variant u-text-5">Image Crop Tool</p>
                      </div>
                    </div> --}}
                    {{-- <div class="u-align-center u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-white u-list-item-4">
                      <div class="u-container-layout u-similar-container u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-6">
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-4" src="images/2350244.png" alt="" data-image-width="128" data-image-height="128">
                        <p class="u-large-text u-text u-text-variant u-text-6">Image Crop Tool</p>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

</body>

</html>
