<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LiteralHat.com')</title>
    @vite(['resources/css/app.css', 'resources/js/randomsong.js'])
</head>

<body class="bg-black">

   @include('nav.header')
@include('nav.subheader')

    
    <div class="h-max bg-black flex justify-center">
        <div class="w-4/5  pt-6 p-6 text-white font-cambria">
                @yield('content')
        </div>
    </div>


    @include('nav.footer')

</body>



</html>