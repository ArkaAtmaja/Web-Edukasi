@extends('layouts.DashboardAdmin')

@section('content')
<style>
    @media screen and (max-width: 768px) {
        .flex-sm-wrap {
            flex-wrap: nowrap;
            flex-direction: column;
        }
    }

    .btn-body button {
        width: 90px;
        height: auto;
        font-size: 17px;
    }
</style>

<div class="mb-4">
    <div class="card-header">
        <h3 class="card-title">Form Tambah Sertifikasi</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Sertifikasi</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Kursus...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Sertifikasi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Gelar Sertifikasi</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Gelar Sertifikasi...">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Input Poster Sertifikasi</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Input Soal Sertifikasi</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga Sertifikasi</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Harga...">
        </div>
        <div class="row justify-content-end" style="float: right;">
            <a href="{{url('/adminSertifikasi')}}" class="btn btn-success fs-4 d-flex justify-content-center text-align-center" style="text-align: center">Save</a>
        </div>
    </div>
</div>





<script>
    $(document).ready(function() {
        var width = $(window).width();
        if (width < 768) {
            $(".flex-sm-wrap").addClass("flex-sm-wrap");
        } else {
            $(".flex-sm-wrap").removeClass("flex-sm-wrap");
        }
    });
    $(window).resize(function() {
        var width = $(window).width();
        if (width < 768) {
            $(".flex-sm-wrap").addClass("flex-sm-wrap");
        } else {
            $(".flex-sm-wrap").removeClass("flex-sm-wrap");
        }
    });
</script>

@endsection
