<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
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

    protected $redirectTo = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        
    }
        
        protected $redirectPath = '/';
        //protected $loginPath = 'auth/login';

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        
        return Validator::make($data, [
            'name' => 'required|max:255',
            'apellidos' => 'required|max:255',
            //'rol' => 'max:10',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    

    public function index()
    {   
        dd('llego');
        $numeros = $this->numeros();
        $usuarios = User::orderBy('id_user', 'desc')->paginate(10);
        return view('admin.usuarios.index')->with('numeros',$numeros)->with('usuarios', $usuarios);
    }    


    protected function create(array $data)
    {
        
        return User::create([
            'nombres_user' => $data['name'],
            'apellidos_user' => $data['apellidos'],
           'rol_user' => 'usuario',
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Flash::info('El usuario '.$user->nombres_user.' fué eliminado exitosamente!!');
        //Flash::success('El cliente'.$cliente->nombre.'ha sido borrado exitosamente!');
        return redirect()->route('admin.usuarios.index');
      //return view('admin.clientes.destroy');
    }

}
