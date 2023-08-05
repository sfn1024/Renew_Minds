
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'Mind Blog'}}</title>
    <meta name="author" content="Mind Blog">
    <meta name="description" content="{{ $metaDescription }}">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">


    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: ;
        }

        .bg-clr{
            background-color: #0a4275;
            color: #cecece;
        }

        .nav{
            width: 100%;
            height: 100px;
            background: #cecece;
        }

        .blog{
            background-color: #0a4275;
            color: white;
        }
        .blog:hover{
            background: #3e3f40;
        }

        .nav-cont{
            padding: 0;
            margin: auto 0px auto 60px;
        }

        .admin-logo{
            margin-right: 70%;
            width: 20%;
            height: auto;
        }
        .footer {
            bottom: 0;
            width: 100%;

        }

    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-family-karla">
    <!-- Text Header -->
    <header class="w-full">
            <div class="bg-clr flex flex-col items-center py-3 ">
                <img src="/storage/app/public/logo.png" class="admin-logo d-flex justify-content-start" alt="logo.png">
                <a href="#" class="font-bold text-white uppercase hover:text-gray-400 text-4xl" ><i class="fa-solid fa-home text-light"></i>
                    Mind Blog
                </a>
                {{-- <p class="text-lg text-gray-600">
                    {{ \App\Models\TextWidget::getTitle('header')}}
                </p> --}}
            </div>
    </header>

    <!-- Topic Nav -->

    <nav class="nav navbar-expand-lg sticky-top py-4" x-data="{ open: false }">
        <div class="container nav-cont d-flex">
            <a href="#"
                class="block md:hidden text-base text-center flex justify-center items-center"
                @click="open = !open"

                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
            <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                <div class="w-full flex sm:flex-row items-center justify-center col-md-12 p-3 d-flex align-items-center">
                    {{-- <a href="index.php" class="blog hover:bg-clr hover:text-white rounded py-2 px-4 mx-2"><i class="fa-solid fa-home text-light"></i>Home</a></button> --}}
                    <a href ="{{route('home')}}" class="blog hover:bg-clr hover:text-white rounded py-2 px-4 mx-2"><i class="fa-solid fa-home text-light"></i>Home</a>
                    {{-- <button class="btn btn-success bg-clr"><a href="index.php" class="nav-link text-light my-1 p-1"><i class="fa-solid fa-home text-light"></i></a></button> --}}
                    {{-- <button class="btn btn-dark bg-clr"> --}}
                        <a href ="{{route('home')}}" class="blog hover:bg-clr hover:text-white rounded py-2 px-4 mx-2"><i class="fa-solid fa-home text-light"></i>Appointment</a>
                        {{-- <ul class="dropdown-menu bg-clr">
                            <li><a class="dropdown-item" href="index.php?view_appointments">View Appointments</a></li>
                            <li><a class="dropdown-item" href="index.php?manage_mentor">Manage Mentors</a></li>
                            <li><a class="dropdown-item" href="index.php?insert_mentor">Insert Mentors</a></li>
                            <li><a class="dropdown-item" href="index.php?manage_degree">Manage Degrees</a></li>
                            <li><a class="dropdown-item" href="index.php?insert_degree">Insert Degrees</a></li>
                        </ul> --}}
                    </button>
                    <a href ="{{route('home')}}" class="blog hover:bg-clr hover:text-white rounded py-2 px-4 mx-2"><i class="fa-solid fa-home text-light"></i>Blogs</a>
                    <a href ="{{route('home')}}" class="blog hover:bg-clr hover:text-white rounded py-2 px-4 mx-2"><i class="fa-solid fa-home text-light"></i>Contact</a>
                    <a href ="{{route('home')}}" class="blog hover:bg-clr hover:text-white rounded py-2 px-4 mx-2"><i class="fa-solid fa-home text-light"></i>Account</a>

                    {{-- @foreach($categories as $category)
                    <button class="btn btn-success"><a href="{{route('by-category', $category)}}" class="blog hover:bg-clr hover:text-white rounded py-2 px-4 mx-2"><i class="fa-solid fa-home text-light"></i>{{$category->title}}</a></button>
                        {{-- <a href="{{route('by-category', $category)}}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">{{$category->title}}</a> --}}
                    {{-- @endforeach --}}
                    <a href="{{route('about-us')}}" class="blog hover:bg-clr hover:text-white rounded py-2 px-4 mx-2">About us</a>
                </div>
            </div>
    </nav>

    {{-- <nav class="navbar bg-clr navbar-expand-lg sticky-top">
        <div class="container nav-cont d-flex">
            <img src="../assets/media/logo.png" class="admin-logo d-flex justify-content-start" alt="logo">
            <h3 class="text-center text-light mx-auto">Admin Dashboard</h3>
            <div class="d-flex justify-content-start"><i class="fa-solid fa-right-from-bracket text-light"></i></div>
        </div>
    </nav> --}}


    <div class="container mx-auto flex flex-wrap py-6">

        {{$slot}}


    </div>

    {{-- <footer class="w-full border-t bg-clr pb-10" style="background-color: rgba(0, 0, 0, 0.2);">


            <div class="text-center p-3">
                © 2023 Copyright:
                <a class="text-white" href="#">Renew Minds</a>
            </div>



        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="uppercase py-6">&copy; myblog.com</div>
        </div>
    </footer> --}}

    <footer class="text-white w-full border-t pb-10">
        <!--
            <div class="container p-2">
                <section class="footer-links">
                    <div class="row">
                        <div class="logo col-md-3">
                            <a class="footer-brand" href="index.php">
                                <img src="assets/media/logo.png" alt="logo" class="logo">
                            </a>
                        </div>
                        <div class="col-md-1 pt-1"></div>
                        <div class="col-md-6 pt-1">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, est!</p>
                        </div>
                    </div>
                </section>
            </div>
        -->
            <div class="text-center p-3 bg-clr">
                © 2023 Copyright:
                <a class="text-white" href="#">Renew Minds</a>
            </div>

        </footer>

</body>
</html>
