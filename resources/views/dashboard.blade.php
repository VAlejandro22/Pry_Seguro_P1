<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-900">Panel de Control</h2>
    </x-slot>

    <div class="py-12 bg-[#f0faff]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- ADMIN --}}
                @role('admin')
                <div class="bg-white border border-blue-100 shadow-md hover:shadow-xl rounded-lg p-6 transition duration-300">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4">Administración</h3>
                    <a href="{{ route('usuarios.index') }}" 
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
                        Gestionar Usuarios
                    </a>
                </div>
                @endrole

                {{-- SECRE --}}
                @role('secre')
                <div class="bg-white border border-blue-100 shadow-md hover:shadow-xl rounded-lg p-6 transition duration-300">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4">Usuarios</h3>
                    <div class="space-x-2">
                        <a href="{{ route('usuarios.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
                            Ver Usuarios
                        </a>
                        <a href="{{ route('usuarios.create') }}" 
                        class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded transition">
                        Crear Usuario
                        </a>
                    </div>
                </div>
                @endrole
                {{-- BODEGA --}}
                @role('bodega')
                <div class="bg-white border border-blue-100 shadow-md hover:shadow-xl rounded-lg p-6 transition duration-300">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4">Inventario</h3>
                    <div class="space-x-2">
                        <a href="{{ route('categorias.index') }}" 
                        class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
                        Categorías
                        </a>
                        <a href="{{ route('productos.index') }}" 
                        class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded transition">
                        Productos
                        </a>
                    </div>
                </div>
                @endrole

                {{-- CAJERA --}}
                @role('cajera')
                <div class="bg-white border border-blue-100 shadow-md hover:shadow-xl rounded-lg p-6 transition duration-300">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4">Ventas</h3>
                    <div class="space-x-2">
                        <a href="{{ route('ventas.index') }}" 
                        class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
                            Mis Ventas
                        </a>
                        <a href="{{ route('ventas.create') }}" 
                        class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded transition">
                            Registrar Venta
                        </a>
                    </div>
                </div>
                @endrole
            </div>
        </div>
    </div>
</x-app-layout>
