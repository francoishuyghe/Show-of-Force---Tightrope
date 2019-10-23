<div class="container">
  <section>
  <div class="row">
    <div class="col-md-4">
        <img class="portrait" src="{{ the_post_thumbnail_url() }}" />
    </div>
    <div class="col-md-8">
      <header>
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
        <h3>{{ the_field('role') }}</h3>
      </header>
      <div class="entry-content">
        @php the_content() @endphp
        <a class="btn" href="/about#team">Back to Team</a>
      </div>
  </div>
  </section>
</div>
