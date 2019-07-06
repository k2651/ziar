<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guest-style.css') }}" rel="stylesheet">

</head>

<body>



    <div id="app">
        <div class="fixed-top" id="side-navbar-animation wrapper">

            <!-- Sidebar -->
            <div class="bg-dark" id="sidebar-wrapper">
                <div class="sidebar-heading text-white">
                    <img width="100%" src="/img/echo-logo.png" alt="">
                    {{-- ECHO --}}
                </div>
                <div class="list-group list-group-flush">
                    @foreach ($categories as $category)
                    <a href="{{route('category.show', $category->id)}}"
                        class="list-group-item list-group-item-action text-white text-center bg-dark">{{ $category->name }}</a>
                    @endforeach
                    
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar fixed-top navbar-expand-lg navbar-dark text-white bg-dark border-bottom d-md-none">
                    <a class="navbar-brand">ECHO</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            @foreach ($categories as $category)
                            <li class="nav-item">
                                <a href={{route('category.show', $category->id)}} class="nav-link ">
                                    {{ $category->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="page-wrapper">
            <div id="carouselExampleIndicators" class="mb-3 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class=" carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://inteng-storage.s3.amazonaws.com/images/sizes/high_tech_cities_8_resize_md.jpg"
                            class="d-block vh-50 w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.technocracy.news/wp-content/uploads/2017/04/high-tech-cities.jpg"
                            class="d-block vh-50 w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdRWPW9HPHprB5xDE0EC1F00Vksf5qW7Xoj_JuDeRXz9_ODp3gPw"
                            class="d-block vh-50 w-100" alt="...">
                    </div>
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
            <div class="container-fluid">







               


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <img style="max-height:400px; "
                                src="https://www.technocracy.news/wp-content/uploads/2017/04/high-tech-cities.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <div class="card">
                            <img style="max-height:125px; "
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdRWPW9HPHprB5xDE0EC1F00Vksf5qW7Xoj_JuDeRXz9_ODp3gPw"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <div class="card">
                            <img style="max-height:125px; "
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdRWPW9HPHprB5xDE0EC1F00Vksf5qW7Xoj_JuDeRXz9_ODp3gPw"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img style="max-height:400px; "
                                src="https://www.presse-citron.net/wordpress_prod/wp-content/uploads/2018/12/shanghai.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img style="max-height:400px; "
                                src="https://www.technocracy.news/wp-content/uploads/2017/04/high-tech-cities.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img style="max-height:400px; "
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdRWPW9HPHprB5xDE0EC1F00Vksf5qW7Xoj_JuDeRXz9_ODp3gPw"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <img style="max-height:350px; "
                                src="https://inteng-storage.s3.amazonaws.com/images/sizes/high_tech_cities_8_resize_md.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; <a href="" target="_blank">SoftChamp Inc</a> 2019</p>
                </div>
            </footer>
        </div>
        
    </div>
</body>
</body>

</html>
