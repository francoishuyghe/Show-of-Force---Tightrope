@extends('layouts.app')

@section('content')
  <div class="container">
    @while(have_posts()) @php the_post() @endphp
      
    <section class="content">
      <div class="row">
        <div class="col-md-4">
            @include('partials.trailer-button')
        </div>
        <div class="col-md-8">
          @php the_content() @endphp
        </div>
      </div>
    </section>

      @include('partials.about-team')

      <section id="credits">
        <h2>Credits</h2>
        <div class="list">
          {!! $data['credits'] !!}
        </div>
      </section>
      
      <section id="funders">
        <h2>Funders</h2>
        <div class="list">
          {!! $data['funders'] !!}
        </div>
      </section>
    @endwhile
  </div>
@endsection
