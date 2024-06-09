@extends('layouts.Dashboard')

@section('content')
    <style>
        .container-detail {
            padding: 20px 100px 100px 100px;
            border-radius: 10px;
            max-height: 45rem;
            overflow-y: scroll;
            overflow-x: hidden;
            margin: 0 auto;
        }

        .detail-head {
            color: white;
            background-color: grey;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .img-ML {
            float: left;
            max-width: 40%;
            background: white;
        }

        .skills-youGet {
            list-style-type: disc;
            margin-left: 20px;
            padding-left: 0;
            columns: 2;
        }

        li {
            margin-bottom: 10px;
        }

        @media screen and (max-width: 425px) {
            .container-detail {
                padding: 20px 20px 100px 20px;
            }

            .img-ML {
                display: none;
            }

            .detail-head {
                display: block;
            }


            .skills-youGet {
                columns: 1;
            }

            .img-instruktur {
                width: 100px;
                height: 100px;
                border-radius: 50%;

            }

            h2 {
                font-size: 15px;
            }

            .buttonMarginCustom {
                margin-bottom: 10px;
            }


            /*.Desc-section {*/
            /*    display: none;*/
            /*}*/
        }
    </style>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Course</a></li>
            <li class="breadcrumb-item active" aria-current="page">Machine Learning Course</li>
        </ol>
    </nav>
    <!-- Head -->
    <div class="container-detail">
        <div class="card mb-3 w-100">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center">
                    <img src="{{url('https://cdn.britannica.com/40/216540-138-14385CFE/How-machine-learning-is-predicting-synthetic-products.jpg?w=800&h=450&c=crop')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center p-2">
                            <h1><strong>Machine Learning Course</strong></h1>
                            <p>Machine Learning Basics for Beginners</p>
                            <ul class="mb-0 list-unstyled d-flex flex-column">
                                <div class="d-flex flex-row justify-content-start">
                                    <div class="d-flex flex-row">
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                    </div>
                                    <p style="color: black">(10,029 rating)</p>
                                </div>

                                <li style="color:black">20,000 students</li>
                            </ul>
                            <p class="detail-tentor"><strong>Created by </strong>PW-6</p>
                            <ul class="mb-0 list-unstyled d-flex flex-row align-items-center">
                                <li style="color:white">Last updated 10/2023</li>
                                <li style="color:white">Indonesian</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Content -->
        <div class="content-ML">
            <h2>Course Content</h2>
            <h7>4 Sections</h7>
            <div class="accordion" id="accordionExample">
                <!-- Item 1: Introduction -->
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                Introduction
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <!--sub-collapse -->
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 2: Visualisasi -->
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                Visualisasi
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <!--sub-collapse -->
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 3: Machine Learning and Data Science Framework -->
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                Machine Learning and Data Science Framework
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample">
                        <!--sub-collapse -->
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                              Pandas
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample">
                        <!--sub-collapse -->
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#subCollapseIntro1"
                                    aria-expanded="false" aria-controls="subCollapseIntro1">
                                <i class="bi bi-book"></i> &nbsp Apa itu Machine Learning
                            </button>
                            <div id="subCollapseIntro1" class="collapse">
                                <p>Machine Learning adalah istilah umum untuk memecahkan masalah yang pengembangan
                                    algoritmanya oleh
                                    pemrogram manusia akan memakan biaya yang mahal, dan sebaliknya masalah tersebut
                                    diselesaikan
                                    dengan membantu mesin "menemukan" algoritma "sendiri", tanpa perlu diberi tahu
                                    secara eksplisit apa yang
                                    harus dilakukan oleh algoritma yang dikembangkan manusia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- Pembelian -->
        <div class="d-flex flex-sm-row flex-column align-items-center my-2">
            <a href="{{url('/dashboard')}}" class="btn btn-primary" style="width: 10rem;">Back</a>
        </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
