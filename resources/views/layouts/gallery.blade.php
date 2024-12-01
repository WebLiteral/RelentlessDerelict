<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite('resources/css/app.css')
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

</head>

<body class="w-full bg-light text-dark overflow-x-hidden font-sans">

    @include('nav.gallery')

    @yield('content')

    @include('nav.footer')

</body>



</html>