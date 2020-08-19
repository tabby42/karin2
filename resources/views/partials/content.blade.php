<article @php(post_class())>
  <header>
    <h2 class="entry-title">{{  get_the_title() }}</h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content entry-summary">
    @php(the_content())
  </div>
  <div class="text-right position-relative">
    <button type="button" class="btn btn-primary btn-lg btn-details">details</button>
  </div>
</article>
