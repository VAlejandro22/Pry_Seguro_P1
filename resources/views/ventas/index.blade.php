<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mis Ventas</h2>
    </x-slot>

    <div class="p-6 bg-gray-50 min-h-screen">
        @if (session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-800 p-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ route('ventas.create') }}" 
                        class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
   
        Nueva Venta
        </a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                <thead>
                    <tr class="bg-blue-100 text-blue-800 uppercase text-sm leading-normal">
                        <th class="border px-4 py-3 text-left">ID</th>
                        <th class="border px-4 py-3 text-left">Fecha</th>
                        <th class="border px-4 py-3 text-left">Productos</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($ventas as $venta)
                        <tr class="border-b hover:bg-blue-50">
                            <td class="border px-4 py-2">{{ $venta->id }}</td>
                            <td class="border px-4 py-2">{{ $venta->created_at->format('d/m/Y') }}</td>
                            <td class="border px-4 py-2">
                                <ul class="list-disc list-inside">
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
</x-app-layout>
