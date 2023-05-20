@csrf

<label for="title" class="block text-sm font-bold mb-2">Título</label>
<input
    type="text"
    name="title"
    value="{{ $post->title }}"
    {{-- value="{{ old('title', $post->title)  }}" --}}
    class="border-gray-200 text-gray-700 w-full mb-4 rounded"
>

<label for="body" class="block text-sm font-bold mb-2">Contenido</label>
<textarea
    name="body"
    rows="5"
    title="body"
    placeholder=""
    class="border-gray-200 text-gray-700 w-full mb-4 rounded"
>{{$post->body}}
</textarea>

<div class="gap-4 flex">
    <a href="{{ route('posts.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">
        Volver
    </a>
    <input type="submit" name="" value="Enviar" class="inline-block bg-green-600 hover:bg-green-700 text-white cursor-pointer font-bold py-2 px-4 rounded mb-2">
</div>

