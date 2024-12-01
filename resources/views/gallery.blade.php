@extends('layouts.base')

@section('title', 'About')

@section('content')


<img class="w-full object-cover h-64" src="/img/covers/cover-placeholder.jpg" />

<x-text-banner>Archive</x-text-banner>


<x-default-layout>

    <div class="flex justify-evenly">
        <div class="p-2 flex flex-col items-center justify-center">
            <a href="{{ route('gallery') }} ">
            <img class="p-2" src="/img/covers/cover-artworks.png" />
            <h2 class="text-5xl">Gallery</h2>
            </a>
        </div>
        <div class="p-2 flex flex-col items-center justify-center">
            <img class="p-2" src="/img/covers/cover-music.png" />
            <h2 class="text-5xl">Discography</h2>
        </div>
    </div>


</x-default-layout>

@endsection