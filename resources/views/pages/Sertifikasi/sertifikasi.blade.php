@extends('layouts.Dashboard')

@section('content')
    <style>
        @media screen and (max-width: 425px ) {
            p {
                font-size: 12px;
            }

            .card {
                max-width: 30rem;
            }

            img {
                width: 20rem;
            }
        }

    </style>
    <div>
        <div class="card-text">
            <h1>Sertification</h1>
        </div>

        <div class="card w-100 bg-primary">
            <h2 class="card-title text-center text-light m-4"><strong>IGNITE YOUR FUTURE</strong></h2>
            <ul class="">
                <li class="d-flex justify-content-center">
                    <i class="fas fa-check-circle text-light me-2"></i>
                    <p class="text-center text-light">Job approved by the industry</p>
                </li>
                <li class="d-flex justify-content-center">
                    <i class="fas fa-check-circle text-light me-2"></i>
                    <p class="text-center text-light">Job approved by the industry</p>
                </li>
                <li class="d-flex justify-content-center">
                    <i class="fas fa-check-circle text-light me-2"></i>
                    <p class="text-center text-light">Job approved by the industry</p>
                </li>
            </ul>

        </div>
    </div>

    <div class="w-100 d-sm-flex justify-content-center">
        <div class="w-75">
            <div class="my-3 d-sm-flex flex-wrap justify-content-center">

                <div class="card m-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/Csharp.png')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-around h-100">
                                <h5 class="card-title">C# for Proffesional</h5>
                                <div class="text-right w-100">
                                    <a href="{{url('/Sertifikasi/DetailSertifikasi')}}" class="btn btn-primary">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card m-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/Csharp.png')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-around h-100">
                                <h5 class="card-title">C# for Proffesional</h5>
                                <div class="text-right w-100">
                                    <a href="#" class="btn btn-primary">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card m-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/Csharp.png')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-around h-100">
                                <h5 class="card-title">C# for Proffesional</h5>
                                <div class="text-right w-100">
                                    <a href="#" class="btn btn-primary">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card m-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/Csharp.png')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-around h-100">
                                <h5 class="card-title">C# for Proffesional</h5>
                                <div class="text-right w-100">
                                    <a href="#" class="btn btn-primary">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/Csharp.png')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-around h-100">
                                <h5 class="card-title">C# for Proffesional</h5>
                                <div class="text-right w-100">
                                    <a href="#" class="btn btn-primary">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/Csharp.png')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-around h-100">
                                <h5 class="card-title">C# for Proffesional</h5>
                                <div class="text-right w-100">
                                    <a href="#" class="btn btn-primary">Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
