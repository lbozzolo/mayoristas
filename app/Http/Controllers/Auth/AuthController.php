<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    protected $redirectTo = "/";
    protected $loginUserName = 'Los datos ingresados no coinciden con nuestros registros.';
    protected $getFailedLoginMessage = 'Los datos ingresados no coinciden con nuestros registros.';
    protected $messagepostLogin = [
        'password.required' => 'La contraseña es obligatoria'
    ];
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(
    )
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.max' => 'El nombre no puede exceder los 255 caracteres',
            'apellido.required' => 'El apellido es obligatorio',
            'apellido.max' => 'El apellido no puede exceder los 255 caracteres',
            'legajo.required' => 'El número de legajo es obligatorio',
            'legajo.unique' => 'El número de legajo ingresado ya está registrado',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email tiene un formato incorrecto',
            'email.max' => 'El email no puede exceder los 255 caracteres',
            'email.unique' => 'El email ingresado ya está registrado',
            'password.required' => 'La contraseña es obligatoria',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres',
        ];

        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'legajo' => 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'legajo' => $data['legajo'],
            'telefono' => $data['telefono'],
            'domicilio' => $data['domicilio'],
            'estado' => 0,
            'rol' => 1,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
