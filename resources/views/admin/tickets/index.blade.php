<x-layouts.app>
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.tickets.index') }}">Tickets</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <a href="{{ route('admin.tickets.create') }}"
        class="inline-flex items-center gap-1 px-3 py-1.5 mb-4 text-sm font-medium text-white bg-green-500 rounded-full shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
        New Ticket
    </a>

    <div class="relative overflow-x-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs uppercase bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No_Ticket
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $ticket->No_Ticket }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ticket->Title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ticket->Description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ ucfirst(str_replace('_', ' ', $ticket->Status)) }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('admin.tickets.edit', $ticket) }}"
                                    class="text-blue-600 hover:underline mr-2">Edit</a>
                                <form action="{{ route('admin.tickets.destroy', $ticket) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-600 hover:underline"
                                        onclick="return confirm('Are you sure you want to delete this ticket?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>   

</x-layouts.app>
