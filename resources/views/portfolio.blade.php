@extends('layouts.base')

@section('title', 'About')

@section('content')




<x-titlecard>Portfolio</x-titlecard>

<div class="bg-black flex justify-center">

    <div class=" flex justify-center flex-wrap mx-auto w-full  max-w-[1000px] animate-fade-in">

        <video class="w-full object-cover object-center" autoplay muted loop>
            <source src="/img/portfolio/anim/literalhat-worry-cat.mp4" type="video/mp4">
        </video>


        <img class="w-1/2 object-cover object-center" src="/img/portfolio/literalhat-stockholm.webp">
        <img class="w-1/2 object-cover object-center" src="/img/portfolio/literalhat-hysteria-hat-and-levy.webp">



        <img class="w-full object-cover object-center" src="/img/portfolio/literalhat-worry-town.webp">

        <video class="w-full object-cover object-center" autoplay muted loop>
            <source src="/img/portfolio/anim/literalhat-fictophile.mp4" type="video/mp4">
        </video>

        <img class="w-full object-cover object-center" src="/img/portfolio/literalhat-long-live.webp">


        <img class="w-full object-cover object-center" src="/img/portfolio/literalhat-be-kind-rewind.webp">

        <img class="w-full object-cover object-center" src="/img/portfolio/literalhat-lineup.webp">
        <img class="w-1/2 object-cover object-center" src="/img/portfolio/literalhat-explode.webp">
        <img class="w-1/2 object-cover object-center" src="/img/portfolio/literalhat-everything.webp">

        <video class="w-full object-cover object-center" autoplay muted loop>
            <source src="/img/portfolio/anim/literalhat-charlieboard-drag-and-drop.mp4" type="video/mp4">
        </video>

        <img class="w-full object-cover object-center" src="/img/portfolio/literalhat-pudu.webp">

        <img class="w-full object-cover object-center" src="/img/portfolio/literalhat-the-selfish-tides.webp">

        <video class="w-1/2 object-cover object-center" autoplay muted loop>
            <source src="/img/portfolio/anim/literalhat-lamb.mp4" type="video/mp4">
        </video>

        <img class="w-1/2 object-cover object-center" src="/img/portfolio/literalhat-fragments.webp">
        <img class="w-full object-cover object-center" src="/img/portfolio/literalhat-ruminate.webp">

    </div>

</div>

@endsection