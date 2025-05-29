<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Listado de Usuarios</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('usuarios.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nuevo Usuario</a>
        <table class="min-w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td class="border px-4 py-2">{{ $usuario->name }}</td>
                        <td class="border px-4 py-2">{{ $usuario->email }}</td>
                        <td class="border px-4 py-2">{{ $usuario->getRoleNames()->first() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
