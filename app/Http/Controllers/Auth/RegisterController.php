<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

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
     * @return string
     */
    protected function redirectTo()
    {
        $type = Auth::user()->type;
        if ($type === 'seller') {
            return '/seller/products';
        } else if ($type === 'customer') {
            return '/customer/products';
        } else {
            return '/';
        }
    }

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
            'user_id' => [ 'required', 'string', 'min:1', 'max:13', 'regex:/^[a-zA-Z0-9_]+$/', 'unique:users', ],
            'username' => [ 'required', 'string', 'min:1', 'max:20', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'password' => [ 'required', 'string', 'min:6', 'regex:/^[a-zA-Z0-9_]+$/', 'confirmed', ],
            'email' => [ 'required', 'string', 'email', 'min:1', 'max:255', ],
            'address' => [ 'required', 'string', 'min:1', 'max:50', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'sex' => [ 'required', 'in:man,woman,other', ],
            'age' => [ 'required', 'digits_between:0,150', 'max:3' ],
            'type' => [ 'required', 'in:seller,customer', ],
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
            'user_id' => $data['user_id'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'address' => $data['address'],
            'sex' => $data['sex'],
            'age' => $data['age'],
            'type' => $data['type'],
        ]);
    }
}
