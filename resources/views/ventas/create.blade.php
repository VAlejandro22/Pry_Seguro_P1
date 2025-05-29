<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Registrar Venta</h2>
    </x-slot>

    <div class="p-6 bg-gray-50 min-h-screen">
        @if (session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 p-3 rounded mb-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-800 p-3 rounded mb-4 shadow-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('ventas.store') }}" class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
            @csrf
            <div class="space-y-4">
                @foreach ($productos as $producto)
                    <div class="flex items-center">
                        <label class="w-2/5 text-gray-700 font-medium">
                            {{ $producto->nombre }} <span class="text-sm text-gray-500">(Stock: {{ $producto->stock }})</span>
                        </label>
                        <input 
                            type="number" 
                            name="productos[{{ $producto->id }}][cantidad]" 
                            placeholder="Cantidad" 
                            min="0"
                            class="w-1/3 border border-gray-300 focus:ring focus:ring-blue-200 p-2 rounded-md shadow-sm transition"
                        >
                    </div>
                @endforeach
            </div>

            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
            
                Registrar Venta
            </button>
        </form>
    </div>
</x-app-layout>
