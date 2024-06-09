@extends('layouts.Dashboard')
@section('content')
    <style>

        @media screen and (max-width: 425px ) {
            h5 {
                font-size: 14px;
            }

            h4 {
                font-size: 16px;
            }

            img {
                width: 50px;
            }

            .inner {
                overflow-x: scroll;
            }

            .bottom {
                flex-direction: column;
            }

        }

    </style>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="{{url('/Course/Trending')}}">Course</a></li>
            <li class="breadcrumb-item"><a href="{{url('/Course/Buy')}}"> Machine Learning Course</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
        </ol>
    </nav>


    <div class="d-flex justify-content-center align-items-center">
        <div class="card p-5" style="width: 40rem">
            <div class="card-title">
                <h5><strong>Pilih metode pembayaran</strong></h5>
            </div>
            <div class="card-body inner">
                <div class="card-title">
                    <h4><strong>Transfer Bank</strong></h4>
                    <h5>Transaksi dengan nominal akhir unik untuk verifikasi otomatis</h5>

                    <form>
                        <div class="p-2 mt-2 transfer">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <img class="pilihPembayaran"
                                     src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/1280px-BANK_BRI_logo.svg.png"
                                     alt="Gambar" style="width: 100px">
                            </div>
                        </div>
                        <div class="p-2 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <img class="pilihPembayaran"
                                     src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/1280px-BANK_BRI_logo.svg.png"
                                     alt="Gambar" style="width: 100px">
                            </div>
                        </div>

                        <div class="p-2 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <img class="pilihPembayaran"
                                     src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/1280px-BANK_BRI_logo.svg.png"
                                     alt="Gambar" style="width: 100px">
                            </div>
                        </div>

                        <div class="p-2 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <img class="pilihPembayaran"
                                     src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/1280px-BANK_BRI_logo.svg.png"
                                     alt="Gambar" style="width: 100px">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="w-100 mt-4">
        <div class="bg-transparent my-4">
            <div class="d-flex justify-content-around bottom">
                <div>
                    <h5><span class="text-danger">diskon 80%</span></h5>
                    <h3>Rp. 150.000</h3>
                </div>

                <div class="mt-2">
                    <a href="{{url('/Course/Buy/Pembayaran/detailPembayaran')}}" class="btn btn-primary">Detail Bayar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
