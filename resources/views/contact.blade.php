@extends('layouts.base')

@section('title', 'Welcome Home.')

@section('content')


<div class="bg-dark flex justify-center">

    <div class="mx-auto w-full  max-w-[1000px]">
        <div class="text-light text-wrap flex flex-col items-center font-poppins text-center" id="heightbox">

            <img class='object-contain pb-12 w-1/3 h-auto max-w-[180px]' src="/img/literalhat-dolly-and-elliot.png">


            <p class="lg:pb-0 pb-6">For all business-related inquiries,
                please contact me via
                email:
            </p>
            <p class="font-bebas text-nowrap uppercase text-[clamp(0px,10vw,150px)]">contact@literalhat.com</p>
            <p class="lg:pb-0 pb-6">I do not use social media in any capacity.
            </p>

        </div>
    </div>
</div>


<style>
    #heightbox {
        padding: 15vh 5vw 50vh;
    }
</style>


@endsection