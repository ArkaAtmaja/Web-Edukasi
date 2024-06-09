@extends('layouts.Dashboard')

<style>
    @media screen and (max-width: 425px ) {
        .jam {
            flex-direction: column;
        }

        .titikDua {
            display: none;
        }

        .card {
            margin-bottom: 20px;
        }

        h5 {
            font-size: 8px;
        }

    }
</style>
@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="{{url('/Sertifikasi')}}">Sertification</a></li>
            <li class="breadcrumb-item"><a href="{{url('/Sertifikasi/DetailSertifikasi')}}">C# For Professional</a></li>
            <li class="breadcrumb-item"><a href="{{url('/Sertifikasi/Pembayaran')}}">Pembayaran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pembayaran</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="width: 40rem">
            <div class="card-header">
                <h3 class="card-title text-center">Detail Pembayaran</h3>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-sm-between jam">
                    <h5>Total</h5>
                    <h5>Bayar dalam : <span class="text-primary">23:59:59</span></h5>
                </div>
                <p>Order id : <span class="text-secondary">wkwkwkwk124</span></p>
                <img class="pilihPembayaran"
                     src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/1280px-BANK_BRI_logo.svg.png"
                     alt="Gambar" style="width: 100px">

                <div class="mt-3">
                    <h5><strong>Kode Perusahaan</strong> <span class="titikDua">:</span></h5>
                    <h5 class="border-bottom border-5">123456</h5>
                </div>

                <div class="mt-3">
                    <h5><strong>Nomor Virtual Accunt</strong> <span class="titikDua">:</span></h5>
                    <h5 class="border-bottom border-5">123456231</h5>
                </div>

                <div class="mt-3">
                    <h5><strong>Cara Bayar</strong> <span class="titikDua">:</span></h5>


                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Cara Bayar 1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            <h5>Buka aplikasi BRI Mobile</h5>
                                        </li>
                                        <li>
                                            <h5>Pilih menu Bayar</h5>
                                        </li>
                                        <li>
                                            <h5>Pilih menu Virtual Account Billing</h5>
                                        </li>
                                        <li>
                                            <h5>Masukkan nomor Virtual Account</h5>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                    Cara Bayar 2
                                </button>
                            </h2>
                            <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>
                                            <h5>Buka aplikasi BRI Mobile</h5>
                                        </li>
                                        <li>
                                            <h5>Pilih menu Bayar</h5>
                                        </li>
                                        <li>
                                            <h5>Pilih menu Virtual Account Billing</h5>
                                        </li>
                                        <li>
                                            <h5>Masukkan nomor Virtual Account</h5>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary my-4" id="showToastBtn">Bayar</button>

                    <div class="position-fixed p-3 top-0 start-50 translate-middle-x" style="z-index: 11">
                        <div class="toast" id="myToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                            <div class="d-flex bg-success justify-content-between align-items-center">
                                <div class="toast-body">
                                    Berhasil Membayar
                                </div>
                                <div class="toast-body">
                                    <a href="{{url('dashboard')}}" class="btn btn-primary">Lihat Sertifikasi</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        var confirm = false;
        // Initialize the toast using jQuery
        $(document).ready(function() {
            $('#showToastBtn').click(function() {
                //make green showToastBtn
                $('#myToast').toast('show');
            });
        });
    </script>

@endsection
