@extends('layouts.base')

@section('title', 'About')

@section('content')



<div class='flex flex-col items-center text-center font-cambria '>

    <h1 class="font-oldenglish text-7xl w-max  pb-3 pt-1 px-4 m-10 lh-doubleborders">About / Faq</h1>




    <h2 class="text-4xl border-b-2 mb-7 p-2 w-4/5">About The Site</h2>
    <div class="w-3/5 pb-10">
        <p>This website was launched on Thursday, 9th of September, 2021.</p>
        <p>Sometimes I make things.</p>
        <p>This is a website dedicated to such things.</p>
    </div>

    <h2 class="text-4xl border-b-2 mb-7 p-2 w-4/5">Frequently Asked Questions</h2>
    <div class="text-left w-4/5">
        <div class="p-4">
            <h3 class="text-2xl italic my-4 border-l-2 px-3">Can I use your work in ___?</h3>
            <p>You are welcome to use my artworks or music in non-commercial settings such as profile pictures, reposts, forum signatures, videos, etc.</p>
            <p>Credit is not required but appreciated.</p>
            <p><i>Most importantly: Be kind to others during your usage.</i></p>
        </div>

        <div class="p-4">
            <h3 class="text-2xl italic my-4 border-l-2 px-3">Do you do commissions?</h3>
            <p>No, sorry.</p>
        </div>

    </div>
</div>

</div>

<div class="h-24"></div>

@endsection