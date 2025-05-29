<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Producto</h2>
    </x-slot>

    <div class="p-6 bg-gray-50 min-h-screen">
        <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md p-6">

            @if (session('success'))
                <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-4 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('productos.store') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block font-medium text-gray-700 mb-1">Nombre</label>
                    <input name="nombre" class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700 mb-1">Precio</label>
                    <input name="precio" type="number" step="0.01" class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700 mb-1">Stock</label>
                    <input name="stock" type="number" class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                </div>

                <div>
                    <label class="block font-medium text-gray-700 mb-1">Categoría</label>
                    <select name="categoria_id" class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-right">
                    <button 
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">

                    Guardar
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
