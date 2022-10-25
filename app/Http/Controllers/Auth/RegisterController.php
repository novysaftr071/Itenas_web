<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns', 'unique:users'],
            'nomorinduk' => ['required', 'string', 'max:255', 'unique:users'],
            'username' => ['string', 'max:255', 'unique:users'],
            'no_tlp' => ['string', 'max:255'],
            'prodi' => ['required', 'string', 'unique:prodis'],
            'kelas' => ['required', 'string', 'unique:kelas'],
            'semester' => ['string', 'max:255', 'unique:semesters'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nomorinduk' => $data['nomorinduk'],
            'username' => $data['username'],
            'no_tlp' => $data['no_tlp'],
            'id_prodi' => $data['nama'],
            'id_kelas' => $data['nama_kls'],
            'id_semester' => $data['tingkat'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
