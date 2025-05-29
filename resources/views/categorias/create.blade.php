<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Categoría</h2>
    </x-slot>

    <div class="p-6 bg-gray-50 min-h-screen">
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">

            @if (session('success'))
                <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-4 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('categorias.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-medium mb-1">Nombre</label>
                    <input
                        id="nombre"
                        name="nombre"
                        type="text"
                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        placeholder="Ej: Electrónica"
                        required
                    >
                </div>

                <div class="flex justify-end">
                    <button type="submit" 
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">

                    Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
