
@section('head')

    <meta name="keywords" content="{{$blog->tags}}">
    <meta name="description" content="{{$blog->description}}">
    <title>blog-post-template</title>
    <link rel="stylesheet" href="{{ '/frontend/css/public/blog-post-template.css' }}" media="screen">

@endsection


@section('main-section')
<section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-3f07">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-body-alt-color u-title u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000"> {{ $blog->post_title }}</h1>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">{{ $blog->description }}</p>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-df76">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-custom-html u-expanded-width u-white u-custom-html-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
        @php
        echo $blog->post_content;
    @endphp

      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-3" id="sec-b223">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-sheet-1">
      <h1 class="u-align-center u-custom-font u-font-oswald u-text u-title u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">Recent Posts</h1>
    </div>
  </section>

  <section class="u-clearfix u-section-5" id="sec-1cb1">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
        <div class="u-repeater u-repeater-1">

            @php
            $a = app('App\Http\Controllers\blogsController')->descb();

        @endphp

        @foreach ($a as $item)

          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <img alt="" class="u-image u-image-default u-image-1" data-image-width="2000" data-image-height="1333" src="{{ url('/public/public/Blog_Image/' . $item->image) }}">
              <h3 class="u-text u-text-default u-text-1">{{ $item->post_title }}</h3>
              <p class="u-text u-text-2">{{ $item->description }}</p>
              <a href="{{ url('/blogs/' . $item->str_url) }}" class="u-active-none u-border-2 u-border-custom-color-4 u-border-hover-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">learn more</a>
            </div>
          </div>


          @endforeach
        </div>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
    </div>
  </section>


    <script></script>
@endsection
