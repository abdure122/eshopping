<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div class="mt-sm-0 bg-white">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow p-3" style="margin-top: -2px">
        <div class="container ">
            <a class="navbar-brand font-weight-bolder text-size-20" href="{{ url('/') }}">
            <span class="font-weight-bolder text-warning">E</span>-SHOPPING
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    {{-- @if (Auth::user()->can('admin'))
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="Admin/index">{{ __('Admin-Panel') }}</a>
                    </li>

                    @endif --}}
                    @can ('admin-panel')
                        <li class="nav-item">
                        <a class="nav-link navbar-brand" href="admin/index">{{ __('Admin-Panel') }}</a>
                    </li>
                    @endcan


                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li> <a class="navbar-brand" href="/cart/item">
                       <i class="fa fa-cart-plus "></i> Cart
                      @if (session()->has('items'))

                      <span class="badge badge-primary badge-pill">{{count(session('items'))}}</span> @endif
                    </a></li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
</body>
</html>
