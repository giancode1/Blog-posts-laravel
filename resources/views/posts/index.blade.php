<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('posts.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">
                Crear
            </a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="mb-4">
                        <tr>
                            <td class="text-center font-bold">Título</td>
                            <td class="text-center font-bold" colspan="2">Acciones</td>
                        </tr>
                        @foreach ($posts as $post)
                            <tr class="border-n border-gray-200 text-sm">
                                <td class="px-6 py-4">
                                    {{ $post->title }}
                                </td>
                                <td class="">
                                    <a href="{{ route('posts.edit', $post) }}" class="bg-green-600 hover:bg-green-700 text-white rounded px-4 py-2">
                                        Editar
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input
                                            type="submit"
                                            value="Eliminar"
                                            class="bg-red-500 hover:bg-red-600 text-white rounded px-4 py-2 cursor-pointer"
                                            onclick="return confirm('Desea Eliminar?')"
                                        >
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $posts->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
