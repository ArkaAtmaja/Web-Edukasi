<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    @vite(['resources/views/auth/css/style.css','resources/sass/app.scss', 'resources/js/app.js', 'resources/views/css/landing.css', 'resources/views/css/ionicons.min.css' , 'resources/views/css/style.css', ])

    <style>
        .spacing {
            margin-bottom: 100px;
        }

        .title-head {
            position: absolute;
            max-width: 30vw;
            color: white;
            height: 70vh;
            top: 15%;
            left: 15%;
        }

        .title-head-2 {
            position: absolute;
            color: white;
            width: 30vw;
            height: 70vh;
            top: 15%;
            right: 15%;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        /*    media query*/
        @media screen and (max-width: 1200px) {
            .title-head {
                display: none;
            }

            .title-head-2 {
                position: absolute;
                color: white;
                width: 50vw;
                height: 70vh;
                top: 10%;
                left: 25%;

            }
        }

        .navbar {
            background-color: transparent !important;
            /* Set the background color to transparent */
            position: relative;
            /* Set the position to relative */
            z-index: 1000;
            /* Set a high z-index to ensure the navbar is on top */
            position: absolute;
            top: 0;
            width: 100vw;
            padding-left: 10rem;

        }

        @keyframes slideInLeft {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        @keyframes slideInright {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .card {
            animation-duration: 2s;
            animation-timing-function: ease;
            animation-delay: 0s;
            animation-name: slideInLeft;
        }

        .card_right {
            animation-duration: 2s;
            animation-timing-function: ease;
            animation-delay: 0s;
            animation-name: slideInright;
        }

        .navbar-nav {
            position: absolute;
        }

        /*    maker spacing disappearn when <978*/

        @media screen and (max-width: 978px) {
            .spacing {
                display: none;
            }
        }
         .carousel-control-next-icon,
         .carousel-control-prev-icon /*, .carousel-indicators */
         {
             filter: invert(100%);
         }


    </style>

</head>

<body>

<nav class="navbar navbar-expand-md navbar-light bg-primary">
    <!-- Navbar Brand -->
    <a class="navbar-brand text-light d-none d-md-block" href="#">PW-6</a>

    <!-- Navbar Items -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-light" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{url('./register')}}">Registration</a>
            </li>
        </ul>
    </div>
</nav>
<main>
    <img src="{{asset('./assets/bg.jpg')}}" class="base-layer"/>


    <div class="quotes">
        <div class="title-head card">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner data-bs-ride">
                    <div class="carousel-item active">
                        <img src="https://cdc.unpad.ac.id/wp-content/uploads/2020/06/Poster-Inspira-webinar.jpeg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img
                            src="https://www.its.ac.id/tgeofisika/wp-content/uploads/sites/33/2023/04/Poster-Webinar-Manajemen-Resiko-Longsor-1.png"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdc.ui.ac.id/wp-content/uploads/2022/09/Poster-Webinar-CDC-UI.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <div class="carousel-indicators" style="margin-bottom: -60px;">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </div>

    <div class="title-head-2 card card_right overflow-y-auto">
           @yield('content')
    </div>

    <div class="reveal">
        <div>
            <h2 class="text-center p-4 "><strong>The most popular programming languages in 2023</strong></h2>
        </div>
        <div class="spacing">
            <div class="container-md">
                <div class="d-flex row-wrap justify-content-between d-none">
                    <div class="cpp_">
                        <img class="Cpp me-2" src="{{asset('./assets/Cpp.png')}}" alt="">
                        <h5 class="Cpp_text text-center"><strong>C++</strong></h5>
                    </div>
                    <div class="python_">
                        <img class="Python me-2" src=" {{asset('./assets/py.png')}}" alt="">
                        <h5 class="Python_text text-center"><strong>Python</strong></h5>
                    </div>
                    <div class="Csharp_">
                        <img class="Csharp me-2" src="{{asset('./assets/Csharp.png')}}" alt="">
                        <h5 class="Csharp_text text-center"><strong>C#</strong></h5>
                    </div>
                    <div class="Css_">
                        <img class="Css me-2" src=" {{asset('./assets/css.png')}}" alt="">
                        <h5 class="Css_text text-center"><strong>CSS</strong></h5>
                    </div>
                    <div class="php_">
                        <img class="php me-2" src=" {{asset('./assets/php.png')}}" alt="">
                        <h5 class="php_text text-center"><strong>PHP</strong></h5>
                    </div>

                    <div class="C_">
                        <img class="C me-2" src=" {{asset('./assets/C.png')}}" alt="">
                        <h5 class="C_text text-center"><strong>C</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reveal">
        <div class="spacing-2 d-lg-none">
            <div class="d-flex flex-column justify-content-between align-items-center">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cpp_ p-4">
                                <img class="Cpp me-2" src="{{asset('./assets/Cpp.png')}}" alt="">
                                <h5 class="Cpp_text text-center"><strong>C++</strong></h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="python_ p-4">
                                <img class="Python me-2" src=" {{asset('./assets/py.png')}}" alt="">
                                <h5 class="Python_text text-center"><strong>Python</strong></h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="Csharp_ p-4">
                                <img class="Csharp me-2" src="{{asset('./assets/Csharp.png')}}" alt="">
                                <h5 class="Csharp_text text-center"><strong>C#</strong></h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="Css_ p-4">
                                <img class="Css me-2" src=" {{asset('./assets/css.png')}}" alt="">
                                <h5 class="Css_text text-center"><strong>CSS</strong></h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="php_ p-4">
                                <img class="php me-2" src=" {{asset('./assets/php.png')}}" alt="">
                                <h5 class="php_text text-center"><strong>PHP</strong></h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="C_ p-4">
                                <img class="C me-2" src=" {{asset('./assets/C.png')}}" alt="">
                                <h5 class="C_text text-center"><strong>C</strong></h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="m-4 reveal ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h2 class="mb-4"><strong>Testimonials</strong></h2>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="m-4">
                        <div class="d-flex justify-content-center mb-4 p-3">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                 class="rounded-circle shadow-1-strong" width="150" height="150"/>
                        </div>
                        <h5 class="mb-3"><Strong>Lisa Cudrow</Strong></h5>
                        <h6 class="text-primary mb-3">Graphic Designer</h6>
                        <p class="px-xl-3">
                            <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
                            exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center mb-0">
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="m-4">
                        <div class="d-flex justify-content-center mb-4 p-3">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                 class="rounded-circle shadow-1-strong" width="150" height="150"/>
                        </div>
                        <h5 class="mb-3"><Strong>John Smith</Strong></h5>
                        <h6 class="text-primary mb-3">Marketing Specialist</h6>
                        <p class="px-xl-3">
                            <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
                            dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center mb-0">
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="far fa-star fa-sm text-warning"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="m-4">
                        <div class="d-flex justify-content-center mb-4 p-3">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                 class="rounded-circle shadow-1-strong" width="150" height="150"/>
                        </div>
                        <h5 class="mb-3"><Strong>Maria Smantha</strong></h5>
                        <h6 class="text-primary mb-3">Web Developer</h6>
                        <p class="px-xl-3">
                            <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
                            tenetur.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center mb-0">
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-warning"></i>
                            </li>
                            <li>
                                <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-07">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h2 class="footer-heading"><a href="#" class="logo">PW_A_6</a></h2>
                    <p class="menu">
                        <a href="{{url('landingPage')}}">Home</a>
                        <a href="#">Course</a>
                        <a href="#">Sertification</a>
                    </p>
                    <ul class="ftco-footer-social p-0">
                        <li class="border rounded-circle border-light" style=""><a href="#"
                                                                                   data-toggle="tooltip"
                                                                                   data-placement="top"
                                                                                   title="Twitter"><span><svg
                                        xmlns="http://www.w3.org/2000/svg" height="0.875em"
                                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #ffffff
                                                }
                                            </style>
                                            <path
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                                        </svg></span></a></li>
                        <li class="border rounded-circle border-light"><a><span><svg color <svg
                                        xmlns="http://www.w3.org/2000/svg" height="0.875em"
                                        viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #ffffff
                                                }
                                            </style>
                                            <path
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                                        </svg></span></a></li>
                        <li class="border rounded-circle border-light"><a href="#" data-toggle="tooltip"
                                                                          data-placement="top"
                                                                          title="Instagram"><span><svg
                                        xmlns="http://www.w3.org/2000/svg" height="0.875em"
                                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                                svg {
                                                    fill: #ffffff
                                                }
                                            </style>
                                            <path
                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                                        </svg></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template Web by
                        Pw kelompok 6
                    </p>
                </div>
            </div>
        </div>
    </footer>
</main>


</body>

<script>
    const cpp = document.querySelector('.cpp_');
    const cpp_text = document.querySelector('.Cpp_text');
    cpp.addEventListener('mouseover', function () {
        cpp_text.style.display = 'block';
        cpp_text.style.position = 'absolute';
        cpp.style.position = 'relative';
        cpp_text.style.low = '-50%';
        cpp_text.style.left = '50%';
        cpp_text.style.transform = 'translate(-50%, 50%)';


    })
    cpp.addEventListener('mouseout', function () {
        cpp_text.style.display = 'none';
    })


    const python = document.querySelector('.python_');
    const python_text = document.querySelector('.Python_text');
    python.addEventListener('mouseover', function () {
        python_text.style.display = 'block';
        python_text.style.position = 'absolute';
        python.style.position = 'relative';
        python_text.style.low = '-50%';
        python_text.style.left = '50%';
        python_text.style.transform = 'translate(-50%, 50%)';


    })
    python.addEventListener('mouseout', function () {
        python_text.style.display = 'none';

    })

    const Csharp = document.querySelector('.Csharp_');
    const Csharp_text = document.querySelector('.Csharp_text');
    Csharp.addEventListener('mouseover', function () {
        Csharp_text.style.display = 'block';
        Csharp_text.style.position = 'absolute';
        Csharp.style.position = 'relative';
        Csharp_text.style.low = '-50%';
        Csharp_text.style.left = '50%';
        Csharp_text.style.transform = 'translate(-50%, 50%)';
    })
    Csharp.addEventListener('mouseout', function () {
        Csharp_text.style.display = 'none';
    })

    const Css = document.querySelector('.Css_');
    const Css_text = document.querySelector('.Css_text');
    Css.addEventListener('mouseover', function () {
        Css_text.style.display = 'block';
        Css_text.style.position = 'absolute';
        Css.style.position = 'relative';
        Css_text.style.low = '-50%';
        Css_text.style.left = '50%';
        Css_text.style.transform = 'translate(-50%, 50%)';

    })
    Css.addEventListener('mouseout', function () {
        Css_text.style.display = 'none';
    })

    const php = document.querySelector('.php_');
    const php_text = document.querySelector('.php_text');
    php.addEventListener('mouseover', function () {
        php_text.style.display = 'block';
        php_text.style.position = 'absolute';

        php.style.position = 'relative';
        php_text.style.low = '-50%';
        php_text.style.left = '50%';
        php_text.style.transform = 'translate(-50%, 50%)';
    })
    php.addEventListener('mouseout', function () {
        php_text.style.display = 'none';
    })

    const C = document.querySelector('.C_');
    const C_text = document.querySelector('.C_text');
    C.addEventListener('mouseover', function () {
        C_text.style.display = 'block';
        C_text.style.position = 'absolute';
        C.style.position = 'relative';
        C_text.style.low = '-50%';
        C_text.style.left = '50%';
        C_text.style.transform = 'translate(-50%, 50%)';

    })
    C.addEventListener('mouseout', function () {
        C_text.style.display = 'none';
    })

    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);
</script>

</html>
