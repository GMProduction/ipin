<?php

namespace App\Http\Controllers\Auth;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\model\t_pemohon;
use App\Models\MitraProfile;
use App\Models\Profile;
use App\Models\UserProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends CustomController
{
    //

    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function pageLogin()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email'    => $request['email'],
            'password' => $request['password'],
        ];
        if ($this->isAuth($credentials)) {
            $roles = Auth::user()->roles;
            if ($roles == 'admin') {
                $redirect = '/admin';
            } elseif ($roles == 'member') {
                $redirect = '/user';
            } else {
                $redirect = '/mitra';
            }

            return redirect($redirect);
        }

        return redirect()->back()->withInput()->with('failed', 'Periksa Kembali Username dan Password Anda');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function register()
    {
        if ($this->postField('password') !== $this->postField('password_confirmation')) {
            return redirect()->back()->with(['fail' => 'Password Not Match']);
            dd('fail');
        }
        $roles = $this->postField('roles');
        $data  = [
            'username' => $this->postField('username'),
            'email'    => $this->postField('email'),
            'password' => Hash::make($this->postField('password')),
            'roles'    => $roles,
        ];

        if ($roles == 'mitra') {
            $data     = Arr::add($data, 'nama', $this->postField('nama'));
            $data     = Arr::add($data, 'phone', $this->postField('phone'));
            $data     = Arr::add($data, 'alamat', $this->postField('alamat'));
            $redirect = '/mitra';
        } else {
            $redirect = '/user';
        }
        $user = $this->insert(User::class, $data);

        Auth::loginUsingId($user->id);

        return redirect($redirect);
    }
}
