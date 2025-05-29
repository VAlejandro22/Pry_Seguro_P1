<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-900 text-center">Crear Usuario</h2>
    </x-slot>

    <div class="py-10 bg-gray-50 min-h-screen">
        <div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
            <form method="POST" action="{{ route('usuarios.store') }}" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nombre</label>
                    <input name="name" 
                        class="w-full border border-gray-300 p-3 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" 
                        required>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input name="email" type="email"
                        class="w-full border border-gray-300 p-3 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" 
                        required>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Contraseña</label>
                    <input name="password" type="password"
                        class="w-full border border-gray-300 p-3 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" 
                        required>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Rol</label>
                    <select name="role"
                        class="w-full border border-gray-300 p-3 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" 
                        required>
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="pt-4 text-right">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow transition">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
