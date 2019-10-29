<header class="banner">
    <a class="brand" href="{{ home_url('/#top') }}">
      <h1>{{ get_bloginfo('name', 'display') }}</h1>
      {{--<h3>{{ get_bloginfo('description') }}</h3>--}}
      </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
</header>
