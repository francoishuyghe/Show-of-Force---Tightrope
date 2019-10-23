@extends('layouts.app')

@section('content')
  <div class="container">
    @while(have_posts()) @php the_post() @endphp

    <section class="row">
      <div class="col-md-4">
        <img src="{{ $data['book_cover']['url']}}" />
      </div>
      <div class="col-md-8">
        @php the_content() @endphp
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
    
    
    <section id="buy">
      <h2>Buy the Book</h2>
      <div class="row">
        <div class="col-md-6">
          {!! $data['buying_options'] !!}
        </div>
        <div class="col-md-6">
            
        </div>
      </div>
    </section>

    @endwhile
  </div>
@endsection
