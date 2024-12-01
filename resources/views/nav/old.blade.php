<div class='bg-dark h-16 border-b-2 border-light w-full shadow-3xl flex justify-center'>
    <div class="flex items-center justify-center lg:justify-between w-full max-w-7xl">
        <button data-collapse-toggle="navbar-default" type="button"
            class="absolute w-10 h-10 left-3 text-sm text-light rounded-lg lg:hidden" aria-controls="navbar-default"
            aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- this is the mobile navbar -->
        <nav class='lg:hidden hidden' id="navbar-default">
            <ul
                class="text-light font-poppins border-r-2 border-b-2  uppercase border-light items-center absolute top-16 left-0 bg-dark">
                <li class="py-4 h-16 w-48  text-center"><a href="/portfolio">Portfolio</a></li>
                <li class="py-4 h-16 w-48 text-center"><a href="/contact">Contact</a></li>
                <li class="py-4 h-16 w-48 text-center"><a href="/archive">Archive</a></li>
            </ul>
        </nav>


        <a href="/"><img src="/img/logo-white.png" class="h-8 w-auto px-5"></a>

        <nav>
            <ul class="text-light font-poppins lg:flex hidden uppercase border-light items-center">

                <li class="pt-5 py-4 border-r-2 h-16 w-48  text-center"><a href="/services">Services
                    </a></li>
                <li class="pt-5 py-4 border-r-2 h-16 w-48  text-center"><a href="/portfolio">Portfolio</a></li>
                <li class="pt-5 py-4 border-r-2 h-16 w-48 text-center"><a href="/archive">Archive</a></li>
                <li class="pt-5 py-4 h-16 w-48 text-center"><a href="/contact">Contact</a></li>

            </ul>
        </nav>

    </div>
</div>


<script>
    document.querySelector('[data-collapse-toggle="navbar-default"]').addEventListener('click', function () {
        const navbar = document.getElementById('navbar-default');
        navbar.classList.toggle('hidden');  // Toggle the visibility of the navbar
    });
</script>