<!doctype html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>

  <body>
      <header>
        @include('partials._nav')
        @yield('headerContent')
      </header>

      <div class="content">
        @yield('content')
      </div>

      @include('partials._footer')
      @include('partials._javascript')

  </body>
</html>