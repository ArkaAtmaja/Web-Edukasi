@extends('layouts.Dashboard')
@section('content')

    <style>
        @media screen and (max-width: 425px ) {
            label {
                font-size: 12px;
            }

            input {
                font-size: 12px;
            }
            .card {
                max-width: 40rem;
            }
        }
    </style>
    <div class="d-flex justify-content-center my-4">
        <div class="card" >
            <div class="card-header">

                <div class="d-flex justify-content-center input-group">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                         class="rounded-circle img-fluid" style="width: 100px;" id="profileImage" />
                </div>


            </div>
            <div class="card-body">

                <form>

                    <div class="form-group">
                        <label for="InputEmail1">Nama</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputNama" aria-describedby="Nama"
                                   placeholder="Sharon Ivana" readonly>
                            <button type="button" onclick="EditName()" class="input-group-text" id="Nama"><i
                                    class="fas fa-user"></i></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmail" placeholder="SharonIvana@gmail.com"
                                   readonly>
                            <button type="button" onclick="EditEmail()" class="input-group-text" id="Email"><i
                                    class="fas fa-envelope"></i></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="InputPassword" placeholder="********"
                                   readonly>
                            <button type="button" onclick="EditPassword()" class="input-group-text" id="Password"><i
                                    class="fas fa-lock"></i></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputTanggalLahir">Tanggal Lahir</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="InputTanggalLahir" placeholder="01/01/2000"
                                   readonly>
                            <button type="button" onclick="EditTanggalLahir()" class="input-group-text"
                                    id="TanggalLahir"><i class="fas fa-calendar"></i></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Education">Education</label>
                        <div class="input-group">


                            <input type="text" class="form-control" id="Education" placeholder="Post Graduate" readonly>
                            <button type="button" onclick="EditEducation()" class="input-group-text" id="buttonEducation"><i
                                    class="fas fa-graduation-cap"></i></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputExperience">Coding Experience</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="InputExperience" placeholder="Beginner"
                                   readonly>
                            <button type="button" onclick="EditExp()" class="input-group-text" id="Experience"><i
                                    class="fas fa-code"></i></button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{url('/dashboard')}}" class="btn btn-primary" id="save">Back</a>
            </div>
        </div>

    </div>


    <script>
        function EditPassword() {
            document.getElementById("InputPassword").readOnly = false;
            document.getElementById("InputPassword").focus();

            if(document.getElementById("InputPassword").readOnly === false){
                document.getElementById("save").innerHTML = "Save";
                $("#save").attr("href", "{{url('/profil')}}");
                console.log("save");
            }
            else{
                $("#save").attr("href", "{{url('/dashboard')}}");
                document.getElementById("save").innerHTML = "Back";
            }

            //make it not refresh

        }

        function EditName() {
            document.getElementById("InputNama").readOnly = false;
            document.getElementById("InputNama").focus();
            //make it not refresh
            if(document.getElementById("InputNama").readOnly === false){
                document.getElementById("save").innerHTML = "Save";
                $("#save").attr("href", "{{url('/profil')}}");
                console.log("save");
            }
            else{
                $("#save").attr("href", "{{url('/dashboard')}}");
                document.getElementById("save").innerHTML = "Back";
            }

        }

        function EditEmail() {
            document.getElementById("InputEmail").readOnly = false;
            document.getElementById("InputEmail").focus();
            //make it not refresh
            if (document.getElementById("InputEmail").readOnly === false) {
                $("#save").attr("href", "{{url('/profil')}}");
                console.log("save");
                document.getElementById("save").innerHTML = "Save";
            } else {
                $("#save").attr("href", "{{url('/dashboard')}}");
                document.getElementById("save").innerHTML = "Back";
            }

        }

        function EditTanggalLahir() {
            document.getElementById("InputTanggalLahir").readOnly = false;
            document.getElementById("InputTanggalLahir").focus();
            if(document.getElementById("InputTanggalLahir").readOnly === false){
                $("#save").attr("href", "{{url('/profil')}}");
                console.log("save");
                document.getElementById("save").innerHTML = "Save";
            }
            else{
                $("#save").attr("href", "{{url('/dashboard')}}");
                document.getElementById("save").innerHTML = "Back";
            }
            //make it not refresh

        }

        function EditEducation() {
            document.getElementById("Education").readOnly = false;
            document.getElementById("Education").focus();
            //make it not refresh
            if(document.getElementById("Education").readOnly === false){

                $("#save").attr("href", "{{url('/profil')}}");
                console.log("save");
                document.getElementById("save").innerHTML = "Save";
            }
            else{
                $("#save").attr("href", "{{url('/dashboard')}}");
                document.getElementById("save").innerHTML = "Back";
            }

        }

        function EditExp() {
            document.getElementById("InputExperience").readOnly = false;
            document.getElementById("InputExperience").focus();
            //make it not refresh
            if (document.getElementById("InputExperience").readOnly === false) {
                // remove a tag
                $("#save").attr("href", "{{url('/profil')}}");
                console.log("save");
                document.getElementById("save").innerHTML = "Save";
            } else {
                $("#save").attr("href", "{{url('/dashboard')}}");
                console.log("back");
                document.getElementById("save").innerHTML = "Back";
            }

        }

    </script>

@endsection
