
@extends('layouts.Dashboard')
@section('content')

    <div class="card-text">
        <h1>Result</h1>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Attemp</th>
            <th scope="col">Mark</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>1</td>
            <td>100</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>2</td>
            <td>60</td>
        </tr>

        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="{{url('/dashboard')}}" class="btn btn-success me-2">Back</a>
        <button type="button" class="btn btn-primary">Download Sertificate</button>
    </div>
@endsection
