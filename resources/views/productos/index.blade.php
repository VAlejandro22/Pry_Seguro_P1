<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listado de Productos</h2>
    </x-slot>

    <div class="p-6 bg-gray-50 min-h-screen">
        <div class="max-w-6xl mx-auto">

            <div class="flex justify-between items-center mb-4">
                <a href="{{ route('productos.create') }}" 
                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
                + Nuevo Producto
                </a>
            </div>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded mb-4 border border-green-300 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto bg-white rounded-lg shadow border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Nombre</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Precio</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Stock</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Categoría</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach ($productos as $producto)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $producto->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">${{ number_format($producto->precio, 2) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $producto->stock }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $producto->categoria->nombre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
