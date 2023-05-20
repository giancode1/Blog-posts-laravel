@csrf
{{-- title --}}
<label for="title" class="block text-sm font-bold mb-2">Título</label>
<span class="text-xs text-red-600">
    @error('title')
        {{ $message }}
    @enderror
</span>
<input
    type="text"
    name="title"
    value="{{ old('title', $post->title)  }}"
    class="border-gray-200 text-gray-700 w-full mb-4 rounded"
>

{{-- slug --}}
<label for="slsug" class="block text-sm font-bold mb-2">Slug</label>
<span class="text-xs text-red-600">
    @error('slug')
        {{ $message }}
    @enderror
</span>
<input
    type="text"
    name="slug"
    value="{{ old('slug', $post->slug)  }}"
    class="border-gray-200 text-gray-700 w-full mb-4 rounded"
>

{{-- body --}}
<label for="body" class="block text-sm font-bold mb-2">Contenido</label>
<span class="text-xs text-red-600">
    @error('body')
        {{ $message }}
    @enderror
</span>
<textarea
    name="body"
    rows="5"
    title="body"
    placeholder=""
    class="border-gray-200 text-gray-700 w-full mb-4 rounded"
>{{ old('body', $post->body) }}
</textarea>

<div class="gap-4 flex">
    <a href="{{ route('posts.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">
        Volver
    </a>
    <input type="submit" name="" value="Enviar" class="inline-block bg-green-600 hover:bg-green-700 text-white cursor-pointer font-bold py-2 px-4 rounded mb-2">
</div>

