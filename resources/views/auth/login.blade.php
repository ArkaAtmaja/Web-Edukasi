@extends('pages.landingPage')
@section('content')
    <div class="p-4 p-md-5">
        <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-user-o"></span>
        </div>
        <h3 class="text-center mb-4">Login</h3>
        <form  class="login-form " method="post" action="{{url('login')}}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control rounded-left" placeholder="Username" name="username" required>
            </div>
            <div class="form-group d-flex">
                <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
            </div>
            <div class="form-group d-md-flex">
                <div class="w-50">
                    <label class="checkbox-wrap checkbox-primary">Remember Me
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="w-50 text-md-right">
                    <a href="{{url('register')}}">Register</a>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
            </div>
        </form>
    </div>

@endsection
