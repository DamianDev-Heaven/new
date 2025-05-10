<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Productos</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('productos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nuevo Producto</a>
                    <table class="min-w-full mt-4 border">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Nombre</th>
                                <th class="border px-4 py-2">Precio</th>
                                <th class="border px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                                    <td class="border px-4 py-2">{{ $producto->precio }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('productos.edit', $producto->id) }}" class="text-blue-500">Editar</a>
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>