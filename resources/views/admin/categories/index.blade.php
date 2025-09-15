<x-layouts.app>
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.categories.index') }}">Categories</flux:breadcrumbs.item>
    </flux:breadcrumbs>


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $category->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $category->description }}
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            {{-- Botón editar --}}
                            <a href="{{ route('admin.categories.edit', $category) }}"
                                class="inline-flex items-center px-3 py-1.5 
              text-sm font-medium text-white 
              bg-blue-600 rounded-md shadow 
              hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                ✏️ Editar
                            </a>

                            {{-- Botón eliminar --}}
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('¿Seguro que quieres eliminar esta categoría?')"
                                    class="inline-flex items-center px-3 py-1.5 
                   text-sm font-medium text-white 
                   bg-red-600 rounded-md shadow 
                   hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400">
                                    🗑️ Eliminar
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-layouts.app>
