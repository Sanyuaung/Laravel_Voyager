<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ setting('site.title') }} - {{ setting('site.description') }}</title>
    <link rel="icon" type="image/png" href="{{ setting('site.logo') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Padauk:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,400&display=swap"
        rel="stylesheet">
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('/asset/style/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('css')
</head>

<body>

    <div class="m-5">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="{{ route('home') }}">Hidden brand</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign Up</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                UserName
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                    <form action="#" class="d-flex">
                        <input type="text" name="name" id="name" placeholder="Search Blog..."
                            class="form-control rounded bg-card">
                        <input type="submit" value="Search" class="btn btn-primary ml-2">
                    </form>
                </div>
            </nav>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 360px">
                        <img class="d-block w-100"
                            src="https://uatweb.chid.com.mm/images/new_ui/home/cmp-homepage-1404x630-main.jpg"
                            alt="First slide">
                        <div class="caption">
                            <div class="carousel-caption">
                                <div class="promotion-content">
                                    <h1 class="float-left">
                                        Get
                                        comprehensive
                                        coverage!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item" style="height: 360px">
                        <img class="d-block w-100"
                            src="https://uatweb.chid.com.mm/images/new_ui/home/cmp-homepage-1404x630-main.jpg"
                            alt="First slide">
                        <div class="caption">
                            <div class="carousel-caption">
                                <div class="promotion-content">
                                    <h1 class="float-left">
                                        Get
                                        comprehensive
                                        coverage!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 360px">
                        <img class="d-block w-100"
                            src="https://uatweb.chid.com.mm/images/new_ui/home/cmp-homepage-1404x630-main.jpg"
                            alt="First slide">
                        <div class="caption">
                            <div class="carousel-caption">
                                <div class="promotion-content">
                                    <h1 class="float-left">
                                        Get
                                        comprehensive
                                        coverage!</h1>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="mt-5 col-xl-8 col-lg-8 col-md-12 col-sm-12">
                @yield('content')
            </div>

            <div class="mt-4 col-4 d-none d-lg-block">
                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary">Brands</h5>
                    @foreach ($brands as $b)
                        {{-- {{ url('/article?tag=' . $t->slug) }} --}}
                        <a href="#" class="btn btn-sm btn-dark mt-1 text-white">{{ $b->name }} </a>
                    @endforeach
                </div>
                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary">Category</h5>
                    @foreach ($categories as $c)
                        {{-- {{ url('/article?programming=' . $p->slug) }} --}}
                        <a href="" class="btn btn-sm btn-dark mt-1 text-white">{{ $c->name }} </a>
                    @endforeach
                </div>

                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary"> Top Trending Products (view)</h5>
                    <div class="row">
                        {{-- @foreach ($trending_article as $ta)
                            <div class="col-6">
                                <div class="bg-dark rounded">
                                    <a href="{{ route('article.detail', ['slug' => $ta->slug]) }}" class="text-white">
                                        <img src="{{ $ta->image_url }}" class="w-100 rounded">
                                    </a>
                                    <p class="text-white text-center p-2">{{ $ta->name }}</p>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
                </div>

                <div class="bg-card p-3 mt-4">
                    <h5 class="text-primary"> Most Love Products (like)</h5>
                    <div class="row">
                        {{-- @foreach ($love_article as $la)
                            <div class="col-6">
                                <div class="bg-dark rounded">
                                    <a href="{{ route('article.detail', ['slug' => $la->slug]) }}" class="text-white">
                                        <img src="{{ $la->image_url }}" class="w-100 rounded">
                                    </a>
                                    <p class="text-white text-center p-2">{{ $la->name }}</p>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (session()->has('error'))
            toastr.error('{{ session('error') }}')
        @endif

        @if (session()->has('success'))
            toastr.success('{{ session('success') }}')
        @endif

        const showSuccess = (message) => {
            toastr.success(message);
        }
        const showError = (message) => {
            toastr.error(message);
        }
    </script>
    @yield('js')
</body>

</html>
