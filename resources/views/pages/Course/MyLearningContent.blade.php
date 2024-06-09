@extends('layouts.Dashboard')

@section('content')

    <style>
        @media screen and (max-width: 768px ) {
            .flex-sm-wrap {
                flex-wrap: nowrap;
                flex-direction: column;
            }
        }
    </style>



    <div class="mb-4">
        <div class="card-header">
            <h3 class="card-title">My Learning Content</h3>
        </div>
    </div>

    <div class="">
        <div class="gap-4 d-flex flex-sm-wrap justify-content-lg-start">
            <div class=" card m-4" style="width: 20rem;">
                <img class="card-img-top" src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Course</h5>
                    <p class="card-text">Advance C++</p>
                    <div class="d-flex flex-wrap justify-content-between align-items-lg-baseline">
                        <a href="{{url('learn')}}" class="btn btn-primary">Continue Learn</a>
                        <div class="progress w-25">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" card m-4" style="width: 20rem;">
                <img class="card-img-top" src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Course</h5>
                    <p class="card-text">Advance C++</p>
                    <div class="d-flex flex-wrap justify-content-between align-items-lg-baseline">
                        <a href="{{url('learn')}}" class="btn btn-primary">Continue Learn</a>
                        <div class="progress w-25">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4">
        <div class="card-header">
            <h3 class="card-title">My Certification</h3>
        </div>
    </div>

    <div class="">
        <div class="gap-4 d-flex flex-sm-wrap justify-content-lg-start">

            <div class="card m-3" style="max-width: 500px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('assets/Csharp.png')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-around h-100">
                            <h5 class="card-title">C# for Proffesional</h5>
                            <div class="text-right w-100">
                                <a href="{{url('attempt')}}" class="btn btn-primary">Attempt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //making the card flex is 4 by 4 and last card is flex start


        $(document).ready(function () {
            var width = $(window).width();
            if (width < 768) {
                $(".flex-sm-wrap").addClass("flex-sm-wrap");
            } else {
                $(".flex-sm-wrap").removeClass("flex-sm-wrap");
            }
        });
        $(window).resize(function () {
            var width = $(window).width();
            if (width < 768) {
                $(".flex-sm-wrap").addClass("flex-sm-wrap");
            } else {
                $(".flex-sm-wrap").removeClass("flex-sm-wrap");
            }
        });


    </script>

@endsection
