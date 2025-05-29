<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listado de Productos</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('productos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nuevo Producto</a>
        <table class="min-w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-2">Precio</th>
                    <th class="border px-4 py-2">Stock</th>
                    <th class="border px-4 py-2">Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                        <td class="border px-4 py-2">{{ $producto->precio }}</td>
                        <td class="border px-4 py-2">{{ $producto->stock }}</td>
                        <td class="border px-4 py-2">{{ $producto->categoria->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
