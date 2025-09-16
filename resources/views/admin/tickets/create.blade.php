<x-layouts.app>
    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item href="{{ route('dashboard') }}">Dashboard</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.tickets.index') }}">Tickets</flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.tickets.create') }}">Create Ticket</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <form action="{{ route('admin.tickets.store') }}" method="POST">
        @csrf
        {{-- No_Ticket --}}
        <div class="mb-4">
            <label for="No_Ticket" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">No
                Ticket</label>
            <input type="text" name="No_Ticket" id="No_Ticket" value="{{ old('No_Ticket') }}" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                   dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('No_Ticket')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Title --}}
        <div class="mb-4">
            <label for="Title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Título</label>
            <input type="text" name="Title" id="Title" value="{{ old('Title') }}" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                   dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @error('Title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Description --}}
        <div class="mb-4">
            <label for="Description"
                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Descripción</label>
            <textarea name="Description" id="Description" rows="4" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                   dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('Description') }}</textarea>
            @error('Description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Status --}}
        <div class="mb-4">
            <label for="Status"
                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Estatus</label>
            <select name="Status" id="Status" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                   dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="open" {{ old('Status') == 'open' ? 'selected' : '' }}>Open</option>
                <option value="in_progress" {{ old('Status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="missing_information" {{ old('Status') == 'missing_information' ? 'selected' : '' }}>
                    Missing Information</option>
                <option value="waiting" {{ old('Status') == 'waiting' ? 'selected' : '' }}>Waiting</option>
                <option value="closed" {{ old('Status') == 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
            @error('Status')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Comment --}}
        <div class="mb-4">
            <label for="comment"
                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Comentarios</label>
            <textarea name="comment" id="comment" rows="3"
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm 
                   focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                   dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ old('comment') }}</textarea>
            @error('comment')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Botón --}}
        <div class="flex justify-end">
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700 
                   focus:outline-none focus:ring-2 focus:ring-blue-500">
                Guardar ticket
            </button>
        </div>
    </form>







</x-layouts.app>
