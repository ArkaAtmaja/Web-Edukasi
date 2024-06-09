@extends('pages.Course.Course')

@section('TrendingCourse')

    <style>
        .carousel-control-next-icon,
        .carousel-control-prev-icon /*, .carousel-indicators */
        {
            filter: invert(100%);
        }
    </style>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex row gap-4 justify-content-sm-center">
                    <div class="card " style="width: 18rem;">
                        <img
                            src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}"
                            class="card-img-top" alt="...">
                        <div class="card-body d-flex row align-content-around">
                            <h5 class="card-title">Machine Learning For Dummy</h5>
                            <div class="d-flex justify-content-between align-items-end">
                                <a href="{{url('/Course/Buy')}}" class="btn btn-primary">Buy</a>
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
                                <a href="{{url('/Course/Buy')}}" class="btn btn-primary">Buy</a>
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
                                <a href="{{url('/Course/Buy')}}" class="btn btn-primary">Buy</a>
                                <h5 class="">Rp 1.500.000</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex row gap-4 justify-content-sm-center">
                    <div class="card " style="width: 18rem;">
                        <img
                            src="{{url('https://global-uploads.webflow.com/6100d0111a4ed76bc1b9fd54/62a16685ece5ac446ef6507b_deep%20learning%203.jpeg')}}"
                            class="card-img-top" alt="...">
                        <div class="card-body d-flex row align-content-around">
                            <h5 class="card-title">Machine Learning For Dummy</h5>
                            <div class="d-flex justify-content-between align-items-end">
                                <a href="{{url('/Course/Buy')}}" class="btn btn-primary">Buy</a>
                                <h5 class="">Rp 1.500.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <img
                            src="{{url('https://global-uploads.webflow.com/6100d0111a4ed76bc1b9fd54/62a16685ece5ac446ef6507b_deep%20learning%203.jpeg')}}"
                            class="card-img-top" alt="...">
                        <div class="card-body d-flex row align-content-around">
                            <h5 class="card-title">Machine Learning For Dummy</h5>
                            <div class="d-flex justify-content-between align-items-end">
                                <a href="{{url('/Course/Buy')}}" class="btn btn-primary">Buy</a>
                                <h5 class="">Rp 1.500.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <img
                            src="{{url('https://global-uploads.webflow.com/6100d0111a4ed76bc1b9fd54/62a16685ece5ac446ef6507b_deep%20learning%203.jpeg')}}"
                            class="card-img-top" alt="...">
                        <div class="card-body d-flex row align-content-around">
                            <h5 class="card-title">Machine Learning For Dummy</h5>
                            <div class="d-flex justify-content-between align-items-end">
                                <a href="{{url('/Course/Buy')}}" class="btn btn-primary">Buy</a>
                                <h5 class="">Rp 1.500.000</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="carousel-item">
                <div class="d-flex row gap-4 justify-content-sm-center">
                    <div class="card " style="width: 18rem;">
                        <img
                            src="{{url('https://miro.medium.com/v2/resize:fit:1400/1*cG6U1qstYDijh9bPL42e-Q.jpeg')}}"
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
                            src="{{url('https://miro.medium.com/v2/resize:fit:1400/1*cG6U1qstYDijh9bPL42e-Q.jpeg')}}"
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
                            src="{{url('https://miro.medium.com/v2/resize:fit:1400/1*cG6U1qstYDijh9bPL42e-Q.jpeg')}}"
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
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection('TrendingCourse')
