<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mis Ventas</h2>
    </x-slot>

    <div class="p-6">
@if (session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <a href="{{ route('ventas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nueva Venta</a>
        <table class="min-w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Fecha</th>
                    <th class="border px-4 py-2">Productos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <td class="border px-4 py-2">{{ $venta->id }}</td>
                        <td class="border px-4 py-2">{{ $venta->created_at->format('d/m/Y') }}</td>
                        <td class="border px-4 py-2">
                            <ul>
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
</x-app-layout>
