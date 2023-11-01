<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(string $name, string $lastname=''): View
    {
        return view('greeting', [
            'nombre' => ($name),
            'apellido' => ($lastname),
        ]);
    }
}