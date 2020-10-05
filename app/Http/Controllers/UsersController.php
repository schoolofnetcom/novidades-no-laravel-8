<?php

namespace App\Http\Controllers;

use App\Events\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function store() {
        $user = User::create([
            'name' => 'Event User',
            'email' => 'email@email.com',
            'password' => 'password',
        ]);

        return "Usuário {$user->id} criado com sucesso!!!";
    }
}
