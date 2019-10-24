@extends('layouts.app')

@section('content')
  <div class="container">
    @while(have_posts()) @php the_post() @endphp

    <section id="buy">
      <h3 class="tagline">{{ $data['tagline'] }}</h3>
      <div class="row">
          <div class="col-md-6">
              <img src="{{ $data['book_cover']['url']}}" />
            </div>
        <div class="col-md-6">
          {!! $data['buying_options'] !!}
        </div>
      </div>
    </section>

    <section class="row">
      <div class="col-md-8">
        <h2>About</h2>
        @php the_content() @endphp
      </div>

      <div class="col-md-4">
        
      </div>
    </section>

    <section id="praise">
      <div class="slides">
        @foreach ($data['praise'] as $review)
          <div class="slide review">
            <h4>{{ $review['review'] }}</h4>
            <h6>{{ $review['author'] }}</h6>
          </div>
        @endforeach
      </div>
    </section>

    <section id="authors">
      <h2>The Authors</h2>
      <div class="row">
        <div class="col-md-6">
          {!! $data['authors_bio'] !!}
        </div>
        <div class="col-md-6">
            <img src="{{ $data['authors_photo']['url']}}" />
        </div>
      </div>
    </section>

    @endwhile
  </div>
@endsection
