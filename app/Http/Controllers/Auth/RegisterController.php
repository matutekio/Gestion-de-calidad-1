<?php

namespace App\Http\Controllers\Auth;

use App\Models\Organizacion;
use App\Models\Organizacion_Users;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'max:20|min:6',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'org_nombre' => 'required|string|max:60'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $org['nombre'] = $data['org_nombre'];
        $role = 2;
        
        $organizacion = Organizacion::where('nombre',$data['org_nombre'])
            ->first();
        if($organizacion == null){
            $organizacion = Organizacion::create($org);
        }else{
            $admin = User::where('users.role',2)
                 ->where('organizacion_id',$organizacion->id)
                 ->first();
            if($admin != null)
                $role = 3;
        }
        
        $user = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $role,
            'organizacion_id' => $organizacion->id,
        ]);
        return $user;
    }
}
