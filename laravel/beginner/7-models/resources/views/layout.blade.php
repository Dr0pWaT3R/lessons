<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ebulan</title>
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="{{ url('/') }}">Нүүр</a>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Laravel Beginner</h1>
            <p class="lead blog-description">7. Models & Migration</p>
        </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
            @yield('content')
        </div>

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                @section('sidebar')
                    @include('partials.sidebar')
                @show
            </div>
        </div>
    </div>
    
    <footer class="blog-footer">
        <p>Models & Migration - <a href="https://ebulan.com">Ebulan</a>.</p>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery.min.js') }}"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>