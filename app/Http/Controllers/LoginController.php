<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Metodo que recibe el formulario
    public function login(Request $request)
    {
      $this->validateLogin($request);

      // Login true

      // Login false

    }

    // Metodo que verifica que llegue la informacion correctamente
    public function validateLogin(Request $request)
    {
      return $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'name' => 'required'
      ]);
    }
  }
