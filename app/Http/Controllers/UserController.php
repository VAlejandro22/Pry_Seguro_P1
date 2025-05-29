<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Spatie\Permission\Models\Role;




class UserController extends Controller implements HasMiddleware
{
    
public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('role:admin|secre', only: ['create', 'store']),
            
        ];
    }

    public function index()
{
    $usuarios = User::with('roles')->get(); // Carga relaciones con los roles
    return view('usuarios.index', compact('usuarios'));
}

    public function create()
{
    $roles = auth()->user()->hasRole('secre')
        ? Role::where('name', '!=', 'admin')->get()
        : Role::all();
    return view('usuarios.create', compact('roles'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'role' => 'required|exists:roles,name',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    $user->assignRole($request->role);

    return redirect()->route('usuarios.index');
}

}
