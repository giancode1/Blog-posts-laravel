@extends('template')

@section('content')

<div class="max-w-3xl mx-auto">
    <h1 class="text-2xl mb-8 dark:text-white">{{ $post->title }}</h1>

    <p class="leading-loose text-base dark:text-gray-200">
        {{ $post->body }}
    </p>

</div>


@endsection

