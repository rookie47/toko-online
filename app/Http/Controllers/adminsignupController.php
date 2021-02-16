<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class adminsignupController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/admin';

    public function index()
    {
        return view('admin_signup');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:adminweb',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|exists:roles,id',
            ]);
    }

    public function __construct()
    {
        $this->middleware('guest');
    }    

    public function showRegistrationForm()
{
    $roles = Role::orderBy('name')->pluck('name', 'id');
    return view('auth.register', compact('roles'));
}

public function store(Request $request)
{
     
}



public function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

          
          return $user;    
    }

    
}


