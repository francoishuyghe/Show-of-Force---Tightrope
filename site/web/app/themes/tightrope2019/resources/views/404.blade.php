@extends('layouts.app')

@section('content')

  <div class="container">
    @include('partials.page-header')

    @if (!have_posts())
      <p>
        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
      </p>
    @endif
  </div>
@endsection
