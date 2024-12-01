@extends('layouts.base')

@section('title', 'About')

@section('content')



<div class="bg-dark flex justify-center">

    <div class="mx-auto w-full  max-w-[1000px]">
        <div class="text-light text-wrap flex flex-col items-center font-poppins text-center" id="heightbox">

            <img class='object-contain pb-12 w-1/3 h-auto max-w-[180px]' src="/img/literalhat-dolly-and-elliot.png">


            <p class="lg:pb-0 pb-6">Hi, I'm Hat.</p>
            <p class="lg:pb-0 pb-6">I'm a full time web developer.</p>
            <p class="lg:pb-0 pb-6">All the work you see here is made my spare time.</p>


        </div>
    </div>
</div>


<style>
    #heightbox {
        padding: 15vh 5vw 50vh;
    }
</style>

@endsection