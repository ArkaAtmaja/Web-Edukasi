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

    .split {
        border: 1px solid #000;
    }

</style>



<div class="button mb-4" style="float: right;">
    <a href="{{url('/addCourse')}}" class="btn btn-success fs-4 d-flex justify-content-center align-items-center" style="text-align: center; width:auto">
        <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah
    </a>
</div>

<div class="">
    <h1>Kursus Saat Ini</h1>
    <table class="table table-striped border-dark text-center">
        <tr class="">
            <th class="split" style="border-top: 1px solid #000">No</th>
            <th class="split" style="border-top: 1px solid #000">Gambar</th>
            <th class="split" style="border-top: 1px solid #000">Nama Kursus</th>
            <th class="split" style="border-top: 1px solid #000">Mentor</th>
            <th class="split" style="border-top: 1px solid #000">Harga</th>
            <th class="split" style="border-top: 1px solid #000">Aksi</th>
        </tr>
        <tr>
            <td class="split">1</td>
            <td class="split"><img class="card-img-top" src="{{asset('./assets/Cpp.png')}}" alt="Card image cap" style="width: 200px; height: 200px; object-fit:contain"></td>
            <td class="split" style="vertical-align: middle">Advance C++</td>
            <td class="split" style="vertical-align: middle">Sumanto</td>
            <td class="split" style="vertical-align: middle">150.000</td>
            <td class="split" style="vertical-align: middle">
                <a href="{{url('/editCourse')}}" class="btn btn-warning fs-5" style="width: 50px"><i class="fas fa-edit"></i></a>
                <button class="btn btn-sm btn-danger" id="hapus" data-bs-toggle="modal" data-bs-target="#hapusModal" style="width: 50px; height: 40px;">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td class="split">2</td>
            <td class="split"><img class="card-img-top" src="{{asset('./assets/css.png')}}" alt="Card image cap" style=" width: 200px; height: 200px; object-fit:contain"></td>
            <td class="split" style="vertical-align: middle">Advance Css</td>
            <td class="split" style="vertical-align: middle">Mujidin</td>
            <td class="split" style="vertical-align: middle">250.000</td>
            <td class="split" style="vertical-align: middle">
                <a href="{{url('/editCourse')}}" class="btn btn-warning fs-5" style="width: 50px"><i class="fas fa-edit"></i></a>
                <button class="btn btn-sm btn-danger" id="hapus" data-bs-toggle="modal" data-bs-target="#hapusModal" style="width: 50px; height: 40px;">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td class="split">3</td>
            <td class="split"><img class="card-img-top" src="{{asset('./assets/php.png')}}" alt="Card image cap" style=" width: 200px; height: 200px; object-fit:contain"></td>
            <td class="split" style="vertical-align: middle">Advance PHP</td>
            <td class="split" style="vertical-align: middle">Sukiman</td>
            <td class="split" style="vertical-align: middle">450.000</td>
            <td class="split" style="vertical-align: middle">
                <a href="{{url('/editCourse')}}" class="btn btn-warning fs-5" style="width: 50px"><i class="fas fa-edit"></i></a>
                <button class="btn btn-sm btn-danger" id="hapus" data-bs-toggle="modal" data-bs-target="#hapusModal" style="width: 50px; height: 40px;">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
    </table>

</div>

<div class="modal" tabindex="-1" id="hapusModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(0, 110, 255, 0.964)">
                <h5 class="modal-title primary" style="color: white">Anda yakin ingin menghapus Course?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="liveToastBtn" data-bs-dismiss="modal">Hapus</button>
            </div>
        </div>
    </div>
</div>

<div class="toast-container position-fixed bottom-0 end-0 p-3 ">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body bg-success" style="color: white;">
            <i class="fas fa-check" style="margin-right: 5px;"></i>Berhasil Menghapus Course
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>



@endsection
