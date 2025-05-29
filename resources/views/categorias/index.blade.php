<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listado de Categorías</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('categorias.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nueva Categoría</a>
        @if (session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

        <table class="min-w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td class="border px-4 py-2">{{ $categoria->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
