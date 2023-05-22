<x-app-layout>
    <x-slot name="header">
        <div class="">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a href="{{ route('posts.create') }}"
                class="inline-block mt-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear
            </a>
        </div>
    </x-slot>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="table-auto mx-auto rounded-lg dark:bg-gray-900 border border-gray-400 dark:border-gray-700 mb-4 ">
                            <thead class="bg-gray-70 dark:bg-gray-800">
                                <tr>
                                    <td class="text-center font-medium pt-3">Título</td>
                                    <td class="text-center font-medium pt-3" colspan="2">Acciones</td>
                                </tr>
                            </thead>
                            </tbody>
                            @foreach ($posts as $post)
                                <tr class="border-b dark:border-gray-700 border-gray-400 text-sm">
                                    <td class="px-6 py-4">
                                        {{ $post->title }}
                                    </td>
                                    <td class="">
                                        <a href="{{ route('posts.edit', $post) }}"
                                            class="bg-green-600 hover:bg-green-700 text-white rounded px-4 py-2">
                                            Editar
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar"
                                                class="bg-red-500 hover:bg-red-600 text-white rounded px-4 py-2 cursor-pointer"
                                                onclick="return confirm('Desea Eliminar?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tbody>
                        </table>

                        {{-- {{ dd($posts->links()) }} --}}
                        {{ $posts->links('pagination::tailwind') }}
                </div>
            </div>
        </div>

</x-app-layout>
