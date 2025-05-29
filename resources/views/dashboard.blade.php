<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6 text-gray-900">
                {{ __("You're logged in!") }}

                <div class="mt-6 space-y-4">

                    {{-- ADMIN --}}
                    {{-- @role('admin') --}}
                        <div>
                            <a href="{{ route('usuarios.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Gestionar Usuarios</a>
                        </div>
                    {{-- @endrole --}}

                    {{-- SECRE --}}
                    @role('secre')
                        <div>
                            <a href="{{ route('usuarios.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ver Usuarios</a>
                            <a href="{{ route('usuarios.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Crear Usuario</a>
                        </div>
                    @endrole

                    {{-- BODEGA --}}
                    @role('bodega')
                        <div>
                            <a href="{{ route('categorias.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Categorías</a>
                            <a href="{{ route('productos.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Productos</a>
                        </div>
                    @endrole

                    {{-- CAJERA --}}
                    @role('cajera')
                        <div>
                            <a href="{{ route('ventas.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Mis Ventas</a>
                            <a href="{{ route('ventas.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Registrar Venta</a>
                        </div>
                    @endrole

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
