@extends('layouts.base')

@section('title', 'Welcome Home.')

@section('content')




<div class=" p-5 space-y-2">
    <p>Welcome to the artwork archive.</p>
    <p>Please note that this section of the website is purely archival. Some artworks are years old, and thus shouldn't be taken seriously.</p>
    <p>Viewing all collections:</p>
    <ul>

        @foreach ($allCollections as $collection)
            <a href="gallery/collection/{{$collection->slug}}">
                <li class="pt-5">
                    <div>
                        <img src="{{$collection->file_url}}" style="height: 100px"></img>
                        <h2 class="text-2xl">{{$collection->id}} {{$collection->title}}</h2>
                        <p class="text-sm italic">{{$collection->description}}</p>
                    </div>
                </li>
            </a>
        @endforeach
    </ul>
</div>




@endsection