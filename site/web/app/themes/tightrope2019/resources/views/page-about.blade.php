@extends('layouts.app')

@section('content')
  <div class="container">
    @while(have_posts()) @php the_post() @endphp
      @include('partials.page-header')
      @include('partials.content-page')
      @include('partials.about-team')

      <section id="credits">
        <h2>Credits</h2>
        <div class="list">
          {!! $data['credits'] !!}
        </div>
      </section>
    @endwhile
  </div>
@endsection
