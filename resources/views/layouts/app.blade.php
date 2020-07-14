<!doctype html>
<html itemscope="itemscope" itemtype="http://schema.org/WebPage" {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <main itemscope="itemscope" itemtype="https://www.schema.org/mainContentOfPage" class="main">
      @yield('content')
    </main>
    @if (App\display_sidebar())
      <aside itemscope="itemscope" itemtype="https://www.schema.org/WPSideBar" class="sidebar">
        @include('partials.sidebar')
      </aside>
    @endif
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
