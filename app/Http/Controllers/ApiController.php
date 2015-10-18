<?php

namespace App\Http\Controllers;
/*
| Packages
*/
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Hash;
use Response;
use Input;
use Redirect;
/*
| Models
*/
use App\Models\Usuario;

class ApiController extends Controller
{
    /*
    | Kick invaders
    */
    public function kicks()
    {
        return redirect()->away('http://www.velrino.com.br/');
    }
    /*
    | Index API
    */
    public function index()
    {
        $this->kicks();
    }
    /*
    | Login user API
    | Return info about user in login
    */
    function login()
    {
        $inputs = Input::all();
        $user =
        [
            'usuario' => $inputs['user']['usuario'],
            'usuario_password' => $inputs['user']['usuario_password']
        ];
        $usuario = Usuario::where('usuario', $user['usuario'] )->first();
        if(is_null($usuario)) return Response::json(['response' => 'Usuário não existe', 'status' => 400]);
        $verify_pass = Hash::check($user['usuario_password'], $usuario->usuario_password);
        if(!$verify_pass) return Response::json(['response' => 'Senha incorreta', 'status' => 400]);
        unset($usuario['usuario_password']);
        return Response::json(['response' => $usuario, 'status' => 200 ]);
    }
}
