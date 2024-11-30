@extends('layouts.base')

@section('title', 'Welcome Home.')

@section('content')


<div class='flex flex-col font-cambria '>

    <div class="">
        <h2 class="text-4xl border-b-2 mb-7 p-2 w-1/5">Site Navigation</h2>
        <div class="w-3/5 pb-10 ">
            <ul class="space-y-2 cascadelist">
                <li><a href='articles'>Home</a></li>
                <li><a href='articles'>Articles</a></li>
                <li><a href='articles'>Gallery</a></li>
                <ul>
                    <li>Collections</li>
                    <li>Archive</li>
                </ul>
                <li><a href='articles'>Discography</a></li>
                <ul>
                    <li>Let Go!</li>
                    <li>All Singles</li>
                </ul>
                <li><a href='articles'>Community</a></li>
                <ul>
                    <li>Fanart</li>
                    <li>LiteralSocialMedia</li>
                </ul>
                <li><a href='articles'>Series</a></li>
                <ul>
                    <li>Little Red Razor Hills</li>
                </ul>
                <li><a href='articles'>About</a></li>
                <ul>
                    <li>FAQ</li>
                    <li>Privacy Policy</li>
                    <li>Terms of Use</li>
                    <li>Changelog</li>
                    <li>Socials</li>
                </ul>
            </ul>
        </div>

    </div>
</div>

</div>

<div class="h-24"></div>


@endsection