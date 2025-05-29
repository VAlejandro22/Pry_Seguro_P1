<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-900 text-center">Listado de Usuarios</h2>
    </x-slot>

    <div class="py-10 bg-gray-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-6 flex justify-end">
                <a href="{{ route('usuarios.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow transition">
                    + Nuevo Usuario
                </a>
            </div>

            <div class="overflow-x-auto bg-white shadow-lg rounded-2xl border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-blue-900 uppercase tracking-wide">
                                Nombre
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-blue-900 uppercase tracking-wide">
                                Email
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-blue-900 uppercase tracking-wide">
                                Rol
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach ($usuarios as $usuario)
                            <tr class="hover:bg-blue-50 transition">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $usuario->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $usuario->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $usuario->getRoleNames()->first() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
