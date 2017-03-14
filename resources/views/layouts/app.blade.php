<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Me and my leader</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/new-age.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <!-- <link href="/css/creative.min.css" rel="stylesheet"> -->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 50px; background-color: #FFFFFF; min-height: 80px;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                @if(Auth::guest())
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/img/logo.png">
                    </a>
                @else
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/img/logo.png">
                    </a>
                @endif
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right ">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Discussions <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/discussion">Platform Discussions</a></li>
                        <li><a href="/radiotopics">Dj Login</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ url('/information') }}">Information</a></li>
                    <li><a href="{{ url('/sms-participation') }}">SMS participation</a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                Account <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>
<div class="navbar navbar-default hidden-sm hidden-xs">
    <div class="container">
        <p class="navbar-text pull-left">© <?= date("Y")?>
            <a href="http://torodev.co.ug/" target="_blank">Toro Development Network</a>
        </p>

        <ul class="nav navbar-nav nav-right pull-right">
            <li><a href="/terms">Terms and codititions</a></li>
            <li><a href="/privacy">Privacy policy</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="/js/custom.js"></script>
<script src="https://use.fontawesome.com/52045bbe38.js"></script>

</body>
</html>
