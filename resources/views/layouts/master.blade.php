<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> @yield('title')- Simplef</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Pixel Code for https://notificationpro.simplef.xyz/ -->
    <script defer src="https://notificationpro.simplef.xyz/pixel/meyoysfajlv0h9q92goui164p8ezcir8"></script>
    <!-- END Pixel Code -->
    <!-- Favicons -->
    <link href="{{ asset('img/simplef_icon.png') }}" rel="icon">
    <link href="{{ asset('img/simplef_icon.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{-- <style>
        .serif {
            font-family: 'Zilla Slab', serif;
        }

        [x-cloak] {
            display: none;
        }

        .grid-indigo {
            background-image: radial-gradient(#5a67d8 2px, transparent 2px);
            background-size: 16px 16px;
        }
    </style> --}}
</head>

<body>
    <nav class="flex items-center justify-between flex-wrap p-6 bg-white sticky top-0 z-50">
        <div class="flex items-center flex-shrink-0 text-dark md:text-right mr-6">
            <span class="font-semibold text-xl tracking-tight hover:text-green-800"><a href="{{route('home')}}">
                    <svg style="height: 50px;" data-v-423bf9ae="" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 167.69999965259004 60" class="font">
                        <!---->
                        <!---->
                        <defs data-v-423bf9ae="">
                            <linearGradient data-v-423bf9ae="" gradientTransform="rotate(25)"
                                id="8a5d69d2-c5c4-4aaa-ac07-9d0cc7b9d9cd" x1="0%" y1="0%" x2="100%"
                                y2="0%">
                                <stop data-v-423bf9ae="" offset="0%"
                                    style="stop-color: rgb(81, 6, 255); stop-opacity: 1;"></stop>
                                <stop data-v-423bf9ae="" offset="100%"
                                    style="stop-color: rgb(97, 203, 242); stop-opacity: 1;"></stop>
                            </linearGradient>
                        </defs>
                        <g data-v-423bf9ae="" id="4fe99489-bcfe-433a-87ae-eec4ea2bf150"
                            fill="url(#8a5d69d2-c5c4-4aaa-ac07-9d0cc7b9d9cd)"
                            transform="matrix(4.285714577655423,0,0,4.285714577655423,0.12857268306674996,-12.000000374657809)">
                            <path
                                d="M1.48 6.54C1.48 9.04 5.74 9.10 5.74 11.51C5.74 12.85 4.40 13.55 3.14 13.55C1.68 13.55 0.99 12.63 0.99 11.59C0.99 10.95 1.26 10.26 1.76 9.72C0.99 9.72-0.03 10.14-0.03 11.59C-0.03 13.29 1.37 14.10 2.90 14.10C4.62 14.10 6.55 13.05 6.55 11.12C6.55 8.26 2.37 8.30 2.37 6.22C2.37 5.05 3.68 3.14 5.45 3.14C6.05 3.14 6.23 3.36 6.23 3.74C6.23 4.55 5.40 5.89 5.40 6.68C5.40 6.99 5.53 7.21 5.87 7.28C6.31 6.57 6.94 5.22 6.94 4.20C6.94 3.40 6.57 2.80 5.47 2.80C3.04 2.80 1.48 4.98 1.48 6.54ZM9.60 8.13C8.65 8.13 7.59 11.00 7.59 12.07C7.59 12.73 7.94 13.24 8.67 13.24C9.76 13.24 10.88 12.36 11.42 10.75L11.30 10.61C10.50 12.21 9.77 12.75 9.14 12.75C8.68 12.75 8.46 12.59 8.46 11.91C8.46 10.60 9.91 8.90 9.91 8.44C9.91 8.25 9.77 8.13 9.60 8.13ZM10.35 6.83C10.79 6.83 11.26 6.43 11.26 6.08C11.26 5.75 11.07 5.64 10.79 5.64C10.35 5.64 9.77 5.98 9.77 6.37C9.77 6.69 10.04 6.83 10.35 6.83ZM14.67 13.19C14.85 12.81 15.05 12.33 15.34 11.89C16.21 10.56 16.72 9.80 17.18 9.80C17.39 9.80 17.58 9.94 17.58 10.30C17.58 10.85 17.16 11.61 17.16 12.29C17.16 12.85 17.44 13.31 18.10 13.31C19.22 13.31 20.08 11.98 20.52 10.81L20.36 10.61C19.92 11.56 19.25 12.82 18.48 12.82C18.16 12.82 18.06 12.60 18.06 12.35C18.06 11.76 18.58 10.75 18.58 10.01C18.58 9.53 18.37 9.11 17.78 9.11C16.83 9.11 16.04 10.21 15.46 11.27C15.61 10.89 15.89 10.01 15.89 9.30C15.89 8.72 15.71 8.23 15.13 8.23C14.13 8.23 12.94 9.70 12.18 10.89C12.39 10.19 12.54 9.55 12.54 9.30C12.54 9.07 12.42 8.93 12.17 8.93C11.90 8.93 11.63 9.10 11.52 9.23C11.51 10.46 10.56 12.75 10.56 12.96C10.56 13.10 11.05 13.26 11.31 13.26C12.00 11.37 13.68 9.16 14.49 9.16C14.74 9.16 14.84 9.37 14.84 9.69C14.84 10.67 13.96 12.66 13.96 12.91C13.96 13.10 14.45 13.19 14.67 13.19ZM21.83 13.24C23.76 13.24 25.13 11.19 25.13 9.73C25.13 8.78 24.54 8.13 23.72 8.13C22.62 8.13 21.77 9.27 21.29 10.19C21.49 9.28 21.62 8.57 21.62 8.30C21.62 7.98 21.42 7.66 20.94 7.66C20.72 7.66 20.69 7.73 20.68 7.90C20.01 13.51 19.43 13.96 18.77 16.27C18.76 16.32 18.97 16.80 19.21 16.80C19.26 16.80 19.33 16.77 19.38 16.73C19.70 16.42 20.44 13.83 21.10 11.03C21.45 10.22 22.44 8.78 23.42 8.78C23.98 8.78 24.22 9.27 24.22 9.86C24.22 11.28 22.86 12.92 21.36 12.92C21.17 12.92 21.01 12.92 21.01 12.99C21.01 13.10 21.34 13.24 21.83 13.24ZM30.45 3.84C30.45 3.44 30.28 2.80 29.99 2.80C29.04 2.80 25.63 9.17 25.63 11.86C25.63 12.68 25.96 13.30 26.75 13.30C27.76 13.30 28.64 12.32 29.39 10.72L29.18 10.61C28.69 11.70 27.90 12.85 27.16 12.85C26.75 12.85 26.54 12.50 26.54 11.77C26.54 11.35 26.61 10.86 26.73 10.36C28.77 8.67 30.45 5.08 30.45 3.84ZM29.92 3.93C29.96 3.93 30.02 3.98 30.02 4.16C30.02 5.10 28.48 8.25 26.85 9.88C27.62 7.18 29.54 3.93 29.92 3.93ZM33.14 8.69C33.14 8.01 32.70 7.84 32.27 7.84C30.62 7.84 28.71 10.21 28.71 11.87C28.71 12.78 29.29 13.50 30.42 13.50C31.81 13.50 33.26 12.42 34.02 10.74L33.85 10.61C33.15 11.96 31.91 13.09 30.72 13.09C29.85 13.09 29.61 12.49 29.61 11.91C29.61 11.77 29.62 11.59 29.67 11.41C31.26 11.26 33.14 10.12 33.14 8.69ZM32.23 8.27C32.47 8.27 32.52 8.39 32.52 8.60C32.52 9.80 30.73 10.79 29.74 11.14C30.11 9.81 31.33 8.27 32.23 8.27ZM38.22 10.61C37.70 11.49 37.32 11.98 36.67 11.98C35.78 11.98 35.63 11.07 35.45 9.80C35.42 9.60 35.29 9.39 35.10 9.35C35.18 9.11 35.27 8.88 35.36 8.65C37.14 7.41 39.10 5.01 39.10 3.42C39.10 3.08 39.02 2.80 38.63 2.80C36.30 2.80 32.63 12.70 32.63 15.57C32.63 16.60 33.11 16.80 33.40 16.80C34.47 16.80 35.55 14.22 35.56 11.89C35.87 12.17 36.26 12.35 36.60 12.35C37.14 12.35 37.95 11.87 38.43 10.75ZM35.20 12.04C35.20 13.51 34.30 16.13 33.77 16.13C33.60 16.13 33.50 15.88 33.50 15.46C33.50 14.50 34.01 12.50 34.72 10.40C35.06 11.06 35.20 11.47 35.20 12.04ZM38.36 3.74C38.49 3.74 38.56 3.79 38.56 3.93C38.56 4.51 37.39 6.41 35.59 8.08C36.54 5.71 37.63 3.74 38.36 3.74Z">
                            </path>
                        </g>
                        <!---->
                        <!---->
                    </svg>
                </a></span>
        </div>

        <div class="block lg:hidden">
            <button id="nav-toggle"
                class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <div id="nav-content"
            class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0 md:text-right">
            <div class="text-sm lg:flex-grow">
                <a href="{{route('home')}}"
                    class="block mt-1 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">Home</a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">About</a>
                <a href="{{route('contact')}}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-dark-200 hover:text-teal-800 mr-4">Contact</a>
            </div>
        </div>

    </nav>


    @yield('content')

    @yield('footer')



    <script>
        // javascript to toggle the menu
        document.getElementById('nav-toggle').onclick = function() {
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

</body>

</html>
