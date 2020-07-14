<header class="banner">
  <div class="no-container">
    <nav class="nav-primary navbar navbar-expand-lg navbar-light bg-light">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-primary"
              aria-controls="nav-primary" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
