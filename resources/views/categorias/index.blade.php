<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listado de Categorías</h2>
    </x-slot>

    <div class="p-6 bg-gray-50 min-h-screen">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">

            <div class="flex justify-between items-center mb-4">
                <a href="{{ route('categorias.create') }}" 
                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
                Nueva Categoría
                </a>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-4 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="border px-6 py-3 text-left text-sm font-semibold">Nombre</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($categorias as $categoria)
                            <tr>
                                <td class="px-6 py-4 text-gray-900">{{ $categoria->nombre }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-4 text-gray-500 italic">No hay categorías registradas aún.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
