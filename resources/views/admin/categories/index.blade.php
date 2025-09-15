<x-layouts.app>
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.categories.index') }}">Categories</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <a href="{{ route('admin.categories.create') }}"
        class="inline-flex items-center gap-1 px-3 py-1.5 mb-4 text-sm font-medium text-white bg-green-500 rounded-full shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
        Nueva categoría
    </a>

    <div class="relative overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs uppercase bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripción
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                            <th scope="row"
                                class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $category->id }}
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-700 dark:text-gray-300">
                                {{ $category->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $category->description }}
                            </td>
                            <td class="px-6 py-4 flex gap-2 justify-center">
                                {{-- Botón editar --}}
                                <a href="{{ route('admin.categories.edit', $category) }}"
                                    class="inline-flex items-center gap-1 px-3 py-1.5
                                   text-sm font-medium text-white
                                   bg-blue-500 rounded-full shadow
                                   hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.651 1.651a2.25 2.25 0 010 3.182l-8.486 8.485-4.95 1.238 1.238-4.95 8.485-8.486a2.25 2.25 0 013.182 0z" />
                                    </svg>
                                    Editar
                                </a>

                                {{-- Botón eliminar --}}
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('¿Seguro que quieres eliminar esta categoría?')"
                                        class="inline-flex items-center gap-1 px-3 py-1.5
                                       text-sm font-medium text-white
                                       bg-red-500 rounded-full shadow
                                       hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 7h12M9 7V5h6v2m-1 3v6m-4-6v6m-7 4h14a2 2 0 002-2V7H5v11a2 2 0 002 2z" />
                                        </svg>
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>



</x-layouts.app>
