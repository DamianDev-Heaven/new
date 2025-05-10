
<x-app-layout>
    <x-slot name="header">
        <nav class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div>
                <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline mr-4">
                    {{ __('Dashboard') }}
                </a>
                <a href="{{ route('productos.index') }}" class="text-blue-500 hover:underline">
                    {{ __('Productos') }}
                </a>
            </div>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>