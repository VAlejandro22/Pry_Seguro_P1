<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">Mis Ventas</h2>
    </x-slot>

    <div class="py-10 bg-gray-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-6">
                    <div class="p-4 text-sm text-green-800 bg-green-100 border border-green-300 rounded-lg" role="alert">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6">
                    <div class="p-4 text-sm text-red-800 bg-red-100 border border-red-300 rounded-lg">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="flex justify-end mb-6">
                <a href="{{ route('ventas.create') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow transition">
                    Nueva Venta
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full bg-white shadow-lg rounded-lg border border-gray-200">
                    <thead>
                        <tr class="bg-blue-100 text-blue-800 uppercase text-sm leading-normal">
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Fecha</th>
                            <th class="px-6 py-3 text-left">Productos</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 divide-y divide-gray-200">
                        @foreach ($ventas as $venta)
                            <tr class="hover:bg-blue-50 transition">
                                <td class="px-6 py-4">{{ $venta->id }}</td>
                                <td class="px-6 py-4">{{ $venta->created_at->format('d/m/Y') }}</td>
                                <td class="px-6 py-4">
                                    <ul class="list-disc list-inside space-y-1">
                                        @foreach ($venta->productos as $item)
                                            <li>{{ $item->producto->nombre }} x {{ $item->cantidad }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
