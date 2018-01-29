@extends('layouts.master')

@section('content')
<div class="flex w-screen h-screen relative flex-row bg-grey-lightest">
    <div class="relative overflow-hidden w-1/2 lg:flex justify-center hidden">
        <div class="a-very-handsome-fellow h-full w-full">
        </div>
    </div>
    <div class="relative overflow-auto p-8 lg:w-1/2 w-full h-full flex-col justify-around flex">
        <div class="mb-8">
            <h1 class="mb-8 block font-indie-flower text-5xl">Trust me, I'm a developer</h1>
            <p class="my-4 text-xl block font-mono">
                I'm a 25 years old nerd, passionate by web development, RPG's, fantasy books, Belgian beers and computers.
            </p>
            <p class="my-4 text-xl block font-mono">
                I write in JavaScript, PHP, Python, HTML and CSS. I can talk to databases and make servers do stuff.
            </p>
        </div>

        @if (count($recentPosts) > 0)
            <div class="mt-4">
                @foreach($recentPosts as $post)
                    <a href="" class="block no-underline text-black">
                        <div class="card animated my-4">
                            <p class="text-3xl mb-8 block font-bold text-black">
                                {{ $post->title }}
                            </p>
                            <p class="text-xl">
                                {{ $post->summary }}
                            </p>
                            <p class="mt-8 text-grey-dark">
                                On January 26th 2018
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

        @if(count($posts) > 0)
            <div class="mt-4 text-center">
                Scroll down to see more
            </div>
        @endif
    </div>
</div>

@if(count($posts) > 0)
    <div class="w-full lg:w-1/2 mx-auto p-8">

        <h2 class="my-8 block font-indie-flower text-4xl">Recent writings...</h2>

        @foreach($posts as $post)
            <a href="" class="block no-underline text-black">
                <div class="card animated my-4">
                    <p class="text-3xl mb-8 block font-bold text-black">
                        {{ $post->title }}
                    </p>
                    <p class="text-xl">
                        {{ $post->summary }}
                    </p>
                    <p class="mt-8 text-grey-dark">
                        On January 26th 2018
                    </p>
                </div>
            </a>
        @endforeach
    </div>
@endif
@endsection