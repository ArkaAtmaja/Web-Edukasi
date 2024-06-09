@extends('pages.landingPage')

@section('content')
<div class="w-100 border-bottom">
    <h1 class="text-center text-light">Register</h1>
</div>
<div class="p-4">
    <form class="row g-3" action="{{url('/')}}">
        <div class="col-md-6">
            <label for="inputUsername" class="form-label text-light">Username</label>
            <input type="text" class="form-control" id="inputUsername" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label text-light">Email</label>
            <input type="email" class="form-control" id="inputEmail" required>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label text-light">Password</label>
            <input type="Password" class="form-control" id="Password" placeholder="Password" required>
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label text-light">Confirm Password</label>
            <input type="Password" class="form-control" id="ConfirmPassword" placeholder="Password" required>
        </div>
        <div class="col-md-6">
            <label for="inputEducation" class="form-label text-light">Education</label>
            <select class="form-select" id="inputEducation" required>
                <option value="">Choose...</option>
                <option value="Elementary">Elementary</option>
                <option value="High School">High School</option>
                <option value="Under Graduate">Under Graduate</option>
                <option value="Post Graduate">Post Graduate</option>
                <option value="Doctorate">Doctorate</option>

            </select>
        </div>
        <div class="col-md-6">
            <label for="inputExperience" class="form-label text-light">Coding Experience</label>
            <select class="form-select" id="inputExperience" required>
                <option value="">Choose...</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediete">Intermediete</option>
                <option value="Advance">Advance</option>
                <option value="Advance">Advance</option>
            </select>
        </div>

        <div class="col-12">
            <a href="{{url('/')}}">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </a>
        </div>
    </form>
</div>
@endsection
