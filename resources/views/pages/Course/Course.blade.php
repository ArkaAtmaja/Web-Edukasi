@extends('layouts.Dashboard')

@section('content')

    <style>
        .active {
            /*smooth it*/

            animation-name: fadeIn;
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
    <div class="card-title">
        <h2>Trending Course</h2>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-center">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link {{request()->is('Course/Trending') ? 'active' : ''}} fadeOut"
                       href="{{url('Course/Trending')}}">Machine Learning</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('Course/Trending/2') ? 'active' : ''}} fadeOut"
                       href="{{url('Course/Trending/2')}}">Python</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('Course/Trending/3') ? 'active' : ''}} fadeOut"
                       href="{{url('Course/Trending/3')}}">C++</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            @yield('TrendingCourse')
        </div>


    </div>
    <div class="card-title mt-4">
        <h2>All Course</h2>
    </div>

    <div class="w-100 d-flex justify-content-evenly">
        <div class="d-flex row gap-4 justify-content-sm-center m-2 w-50 ">
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>
                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>
                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>

                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>
                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>
                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>

                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>
                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>
                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>

                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>

                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>

                </div>
            </div>
            <div class="card " style="width: 18rem;">
                <img
                    src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex row align-content-around">
                    <h5 class="card-title">Machine Learning For Dummy</h5>
                    <div class="d-flex justify-content-between align-items-end">
                        <a href="#" class="btn btn-primary">Buy</a>
                        <h5 class="">Rp 1.500.000</h5>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="w-100 d-flex justify-content-center mt-4">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>



@endsection('content')
