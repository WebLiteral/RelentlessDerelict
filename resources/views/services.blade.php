@extends('layouts.base')

@section('title', 'Welcome Home.')

@section('content')


<x-titlecard>Services</x-titlecard>



<div class="bg-dark flex flex-col justify-center">
    <div class=" flex justify-center flex-wrap mx-auto w-full  max-w-[1000px] animate-fade-in">
        <div class="flex flex-col items-center p-5 justify-start font-poppins text-light w-full max-w-7xl border-light">
            <div class="px-3 p-12 flex flex-col items-center text-center">
                <p class="text-xl">Please send an email detailing the type of item you want, with an
                    image/s of your
                    character (if applicable). </p>
                <x-contact-button/>
            </div>
        </div>
    </div>


    <div class="bg-dark border-y-2 border-light text-light px-2 object-cover ">
        <h1 class="font-bebas uppercase text-[clamp(0px,8vw,90px)] text-nowrap text-center ">Catalog</h1>
    </div>



    <div class=" flex justify-center flex-wrap mx-auto w-full  max-w-[1000px] animate-fade-in">
        <div class="flex flex-col items-center p-5 justify-start font-poppins text-light w-full max-w-7xl border-light">


            <x-servicecard 
            title="Animated Creature Icon" 
            price="75 USD" 
            description="Animated icon of your character. You may choose a simple expression or pose. Animal characters only. Comes in .gif format. 2 revisions allowed. 400 x 400 px." 
            ><img class='w-32' src='/img/services/icon/1.gif'>
            <img class='w-32' src='/img/services/icon/2.gif'>
            <img class='w-32' src='/img/services/icon/3.gif'>
            <img class='w-32' src='/img/services/icon/4.gif'>
            <img class='w-32' src='/img/services/icon/5.gif'></x-servicecard>


            <x-servicecard 
            title="dark and light Sticker Illustration" 
            price="95 USD" 
            description="Flat illustration of your character. You may choose the
                    expression, and pose. Small props allowed, free of charge. Strictly dark and light only. You get a
                    transparent (.png) and a flat version. 2 revisions allowed. 1000
                    x 1000 px." 
            ><img class='w-64' src="/img/services/bw/1.webp">
                    <img class='w-64' src="/img/services/bw/2.webp">
                    <img class='w-64' src="/img/services/bw/3.webp"></x-servicecard>

                    <x-servicecard 
            title="Adopt a Pet!" 
            price="115 USD" 
            description="You can adopt a pet! Original character design with 3
                    drawings. You own full rights to the character after purchase. 3 initial designs you can choose
                    from, 2
                    revisions allowed. Approximately 2550 x 1200 px." 
            ><img class='w-full' src="/img/services/adopt/1.png"></x-servicecard>

            <div class="px-3 py-12 flex flex-col">
                <h2 class="font-bebas text-3xl py-3">Important Notes</h2>
                <p class="text-sm">All prices are flat rate unless specified otherwise. Your character may be simplified
                    slightly in stylisation.</p>
                <p class="text-sm">Prices are in USD and are paid through PayPal.</p>
                <p class="text-sm">Assuming no revisions, 1 week turnaround time maximum.</p>
                <p class="text-sm">You will be notified if there is a waiting list.</p>
            </div>


        </div>

    </div>

</div>


@endsection