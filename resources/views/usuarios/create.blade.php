<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Usuario</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('usuarios.store') }}">
            @csrf
            <div class="mb-4">
                <label>Nombre</label>
                <input name="name" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label>Email</label>
                <input name="email" type="email" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label>Contraseña</label>
                <input name="password" type="password" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label>Rol</label>
                <select name="role" class="w-full border p-2 rounded" required>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="bg-green-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>
</x-app-layout>
