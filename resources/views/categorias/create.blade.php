<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Categoría</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('categorias.store') }}">
            @csrf
            <div class="mb-4">
                <label>Nombre</label>
                <input name="nombre" class="w-full border p-2 rounded" required>
            </div>
            <button class="bg-green-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>
</x-app-layout>
