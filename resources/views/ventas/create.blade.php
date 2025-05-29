<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Registrar Venta</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('ventas.store') }}">
            @csrf
            @foreach ($productos as $producto)
                <div class="flex items-center mb-2">
                    <label class="w-1/3">{{ $producto->nombre }} (Stock: {{ $producto->stock }})</label>
                    <input type="number" name="productos[{{ $producto->id }}][cantidad]" placeholder="Cantidad" min="0" class="w-1/3 border p-2 rounded">
                </div>
            @endforeach
            <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Registrar Venta</button>
        </form>
    </div>
</x-app-layout>
