<article @php(post_class())>
  <header>
  <div class="d-md-flex flex-row justify-content-between">
    <div class="blog-left-top">
      <h2 class="entry-title blog-title">{{  get_the_title() }}</h2>
      @include('partials/entry-meta')
      {{-- <div class="entry-excerpt">@php(the_excerpt())</div> --}}
    </div>
    <div>
      {{-- <figure class="image-bordered">
      @if (has_post_thumbnail())
          @php(the_post_thumbnail())
      @endif
      </figure> --}}
    </div>
  </div>
  </header>
  <div class="entry-content entry-summary">
    @php(the_content())
  </div>
  <div class="text-right position-relative">
      <button type="button" class="btn btn-primary btn-lg btn-details blog-more">mehr</button>
    </div>
</article>
