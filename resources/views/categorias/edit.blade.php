<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Categoría</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label class="block text-gray-700">Nombre</label>
                            <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="w-full border rounded px-3 py-2" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Descripción</label>
                            <textarea name="descripcion" class="w-full border rounded px-3 py-2" rows="4">{{ $categoria->descripcion }}</textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Actualizar</button>
                    </form>
                    <a href="{{ route('categorias.index') }}" class="text-blue-500 mt-4 inline-block">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 