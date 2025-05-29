<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listado de Usuarios</h2>
    </x-slot>

    <div class="p-6 bg-gray-50 min-h-screen">
        <div class="mb-4">
            <a href="{{ route('usuarios.create') }}" 
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition">
                + Nuevo Usuario
            </a>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-blue-900 uppercase tracking-wider">Nombre</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-blue-900 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-blue-900 uppercase tracking-wider">Rol</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($usuarios as $usuario)
                        <tr class="hover:bg-blue-50">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $usuario->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $usuario->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $usuario->getRoleNames()->first() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
