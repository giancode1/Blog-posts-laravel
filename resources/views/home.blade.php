@extends('template')

@section('content')

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">

    <div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programación</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-sm text-gray-400 mt-2">Proyecto de desarrollo web para profesionales</p>

        <img src="{{ asset('images/dev.png') }}" class="absolute -right-20 -bottom-20 opacity-20">
    </div>


    {{-- posts --}}
    <div class="px-4">
        <h1 class="text-2xl mb-8 font-semibold text-gray-900 dark:text-gray-300">Contenido técnico</h1>

        <div class="grid grid-cols-1 gap-4 mb-4">

            @foreach($posts as $post)
            <a href="{{ route('post', $post->slug) }}" class="bg-gray-100 border border-gray-800 dark:border-gray-600 dark:bg-gray-800 rounded-lg px-6 py-4">
                <p class="text-xs flex items-center gap-2">
                    <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                    <span class="dark:text-blue-50" >{{ $post->created_at->format('d/m/Y') }}</span>
                </p>

                <h2 class="text-lg text-gray-900 dark:text-gray-200 mt-2">{{ $post->title }}</h2>
            </a>
            @endforeach

        </div>

        {{ $posts->links() }}
    </div>
</div>


@endsection


