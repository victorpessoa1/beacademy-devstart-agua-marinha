<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users =
            [
                'nome'=> ['Teste','Teste2']
            ];

        dd($users);
    }
    public function show($id)
    {
         dd('Id do usuário é ' .$id);
    }
}
