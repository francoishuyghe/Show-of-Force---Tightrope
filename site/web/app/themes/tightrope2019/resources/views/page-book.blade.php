@extends('layouts.app')

@section('content')
  <div class="container">
    @while(have_posts()) @php the_post() @endphp

    <section id="buy">
      <h3 class="tagline">{{ $data['tagline'] }}</h3>
      <div class="row">
          <div class="col-md-4">
              <img src="{{ $data['book_cover']['url']}}" />
            </div>
        <div class="col-md-8">
            <h3>TIGHTROPE</h3>
            <h5>Americans Reaching for Hope</h5>
            <p>By Nicholas D. Kristof and Sheryl WuDunn</p>
            <a class="btn" href="{{ $data['book_link'] }}" target="_blank" rel="noopener">Buy Now</a>

            <div class="extra">
              {!! $data['buying_options'] !!}
            </div>
        </div>
      </div>
    </section>

    <section class="row">
      <div class="col-md-8">
        <h2>About</h2>
        <div class="long-content">
          @php the_content() @endphp
        </div>
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
