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
            <li class="breadcrumb-item"><a href="{{url('Sertifikasi')}}">Sertifikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">C# Course</li>
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
                            <h1>C# Sertification</h1>
                            <ul class="mb-0 list-unstyled d-flex flex-column">
                                <div class="d-flex flex-row justify-content-start">
                                    <div class="d-flex flex-row me-2">
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                        <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                                    </div>
                                    <p style="color: black">(10,029 rating)</p>
                                </div>

                                <li style="color:black"><strong>Take by</strong> 20,000 students</li>
                            </ul>
                            <p class="detail-tentor"><strong>Created by </strong>PW-6</p>
                            <ul class="mb-0 list-unstyled d-flex flex-column">
                                <li style="color:black" class="me-2">Last updated 10/2023</li>
                                <li style="color:black"><strong> Certification Once Completed </strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills you get -->
        <div class="skills">
            <h2>Skills Requirements</h2>
            <ul class="skills-youGet">
                <li>C# Syntax</li>
                <li>C# Variable</li>
                <li>C# Data Type</li>
                <li>C# Operators</li>
                <li>C# Decision Making</li>
                <li>C# Loop</li>
                <li>C# Methods</li>
                <li>C# Strings</li>
                <li>C# Arrays</li>
                <li>C# Classes</li>
                <li>C# OOPs Concepts</li>

            </ul>
        </div>

        <div class="ulasan">
            <h2>Participant Ratings</h2>
            <ul class="mb-0 list-unstyled d-flex flex-row">
                <li><strong>Andi Dongeng</strong></li>
                <li>&nbsp | 5 Jam Lalu</li>
            </ul>
            <ul class="mb-0 list-unstyled d-flex flex-row">
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
            </ul>
            <p>itu adalah pengalaman yang menyenangkan di awal karena saya dapat
                mengikuti hingga bagian 14 di mana saya tidak dapat mereplikasi pengkodeannya. Bermanfaat?
            </p>

            <ul class="mb-0 list-unstyled d-flex flex-row">
                <li><strong>Andi Dongeng</strong></li>
                <li>&nbsp | 5 Jam Lalu</li>
            </ul>
            <ul class="mb-0 list-unstyled d-flex flex-row">
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
                <li style="color: Gold;"><i class="fas fa-star fa-xs"></i></li>
            </ul>
            <p>itu adalah pengalaman yang menyenangkan di awal karena saya dapat
                mengikuti hingga bagian 14 di mana saya tidak dapat mereplikasi pengkodeannya. Bermanfaat?
            </p>
        </div>

    </div>
    <!-- Pembelian -->
    <div class="m-2 d-sm-flex align-items-center justify-content-around w-100">
        <div>
            <h2 class="text-center"><strong>Price</strong> : Rp. 1.500.000</h2>
        </div>

        <div class="d-flex flex-sm-row flex-column align-items-center">
            <a href="{{url('/Sertifikasi/')}}" class="btn btn-success me-sm-2 buttonMarginCustom" style="width: 10rem;">Add
                to Cart</a>
            <a href="{{url('Sertifikasi/Pembayaran')}}" class="btn btn-primary" style="width: 10rem;">Buy</a>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
