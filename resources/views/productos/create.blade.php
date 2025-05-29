<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Producto</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('productos.store') }}">
            @csrf
            <div class="mb-4">
                <label>Nombre</label>
                <input name="nombre" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label>Precio</label>
                <input name="precio" type="number" step="0.01" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label>Stock</label>
                <input name="stock" type="number" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label>Categoría</label>
                <select name="categoria_id" class="w-full border p-2 rounded" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button class="bg-green-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>
</x-app-layout>
