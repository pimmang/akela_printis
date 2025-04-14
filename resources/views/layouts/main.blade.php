<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Projek Laravel')</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="/img/logo.png">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


    <style>
        /* Mengubah scrollbar di seluruh halaman */
        * {
            scrollbar-width: thin;
            /* Untuk Firefox */
            scrollbar-color: #752070 #f1f1f1;
            /* Warna scroll thumb dan track */
        }

        * {
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* Internet Explorer & Edge */
        }

        /* Untuk WebKit (Chrome, Safari) */
        *::-webkit-scrollbar {
            display: none;
        }

        .hero,
        .testi,
        .layanan,
        .kontak {
            background-image: url('img/kertas.jpg');
            background-repeat: no-repeat;
            object-fit: cover;
            background-size: cover;
        }

        /* Untuk Chrome, Edge, dan Safari */
        body::-webkit-scrollbar {
            width: 8px;
            /* Lebar scrollbar */
        }

        body::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Warna background track */
            border-radius: 10px;
        }

        body::-webkit-scrollbar-thumb {
            background: #888;
            /* Warna thumb */
            border-radius: 10px;
        }

        body::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Warna thumb saat hover */
        }
    </style>
</head>

<body class="bg-gray-100  text-gray-900 font-poppins scroll-smooth relative">
    <!-- Navbar -->
    @include('components.navbar')

    @include('components.preloader')
    <!-- Main Content -->
    <div class="min-h-screen !w-screen overflow-x-hidden">
        @yield('content')
    </div>


    @include('components.footer')
    @include('components.scrollTop')
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    {{-- </script> --}}
    <script>
        window.addEventListener("load", function() {
            const preloader = document.getElementById("preloader");
            

            setTimeout(() => {
                preloader.style.display = "none";
                // document.getElementById("main-content").classList.remove("hidden");
                preloader.classList.add("fade-out");
            }, 1000);
        });
    </script>
    <script>
        window.addEventListener("scroll", function() {
            let navbar = document.getElementById("navbar");
            let logo = document.getElementById("logo");
            if (window.scrollY > 20) {
                navbar.classList.add("bg-white");
                navbar.classList.remove("bg-transparent");
                logo.classList.add('text-primary-600');
            } else {
                navbar.classList.remove("bg-white");
                navbar.classList.add("bg-transparent");
                logo.classList.remove('text-primary-600');
            }
        });
    </script>
    <script>
        function muncul() {
            toastSukses = document.getElementById('toast-success');
            closeButton = document.getElementById('closeToast');
            progressBar = document.getElementById("progress-bar");
            toastSukses.classList.remove('right-0');
            toastSukses.classList.add('right-4')
            toastSukses.classList.add('translate-x-0');
            toastSukses.classList.remove('translate-x-full');
            toastSukses.classList.add('opacity-100');
            toastSukses.classList.remove('opacity-0');

            setTimeout(() => {
                sembunyi();
            }, 3000);


            // Show toast
            // toastSukses.classList.remove("translate-x-full");

            // Start progress animation
            setTimeout(() => {
                progressBar.style.width = "100%";
            }, 100);

            // Hide toast after 3 seconds
            // setTimeout(() => {
            //     toastSukses.classList.add("translate-x-full");
            // }, 3000);

            // Close button event
            // closeToast.addEventListener("click", () => {
            //     toast.classList.add("translate-x-full");
            // });

        }

        function sembunyi() {
            toastSukses.classList.add('right-0');
            toastSukses.classList.remove('right-4')
            toastSukses.classList.remove('translate-x-0');
            toastSukses.classList.add('translate-x-full');
            toastSukses.classList.remove('opacity-100');
            toastSukses.classList.add('opacity-0');
            progressBar.style.width = "0%";
        }

        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash === "#simulasi") {
                muncul(); // Panggil fungsi muncul() jika hash ada
            }
            if (window.location.hash === "#faq") {
                document.getElementById("faqNav").classList.add("bg-primary-700");
                document.getElementById("berandaNav").classList.remove("bg-primary-700");
                document.getElementById("faqNav").classList.add("md:!text-primary-700");
                document.getElementById("faqNav").classList.add("text-white");
                document.getElementById("berandaNav").classList.remove("text-primary-700");
            }
        });
    </script>
</body>

</html>
