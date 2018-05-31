<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.partials.head')
  </head>
  <body>
    @include('layout.partials.nav')
    <div class="container-fluid">
      <div class="row">
        @include('layout.partials.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          @yield('content')
        </main>
      </div>
    </div>
    @include('layout.partials.footer')
  </body>
</html>