@extends('template')

@section('content')

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    {{-- posts --}}
    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900 dark:text-gray-400">Contenido técnico</h1>

        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach($posts as $post)
            <a href="" class="bg-gray-100 dark:bg-gray-800 rounded-lg px-6 py-4">
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


