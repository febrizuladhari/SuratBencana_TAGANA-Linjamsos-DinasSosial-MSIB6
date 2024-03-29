<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use App\Events\Login;
use App\Events\Logout;
use App\Events\ModelCreated;
use App\Events\ModelDeleted;
use App\Events\ModelUpdated;



class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(){
        $user = Auth::user();
        if($user){
            if($user->level =='admin'){
                Alert::success('Hi !', 'Selamat Datang');
                return redirect()->route('home')->with(['success' => 'Selamat Datang']);
            }
            else if($user->level =='user'){
                Alert::success('Hi !', 'Selamat Datang');
                return redirect()->route('home')->with(['success' => 'Selamat Datang']);
            }
        }
        return view('auth.login');
    }


    public function proses_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $credential = $request->only('username','password');

        if(Auth::attempt($credential)){
            $user =  Auth::user();
            if($user->level =='admin'){
                Alert::success('Hi !', 'Selamat Datang');
                event(new Login($user));
                return redirect()->route('home')->with(['success' => 'Selamat Datang']);
            }
            else if($user->level =='user'){
                Alert::success('Hi !', 'Selamat Datang');
                event(new Login($user));
                return redirect()->route('home')->with(['success' => 'Selamat Datang']);
            }
            Alert::error('Ups!', 'Maaf, Akun atau Password Anda Salah.');
            return redirect()->route('login');
        }

        Alert::error('Ups!', 'Maaf, Akun atau Password Anda Salah.');
        return redirect()->route('login');

    }


    public function register(){
        return view('auth.register');
    }

    public function proses_register(Request $request){
        $validator =  Validator::make($request->all(),[
            'name'=>'required',
            'username'=>'required|unique:users',
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if($validator ->fails()){
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $request['level']='user';
        $request['password'] = bcrypt($request->password);

        User::create($request->all());

        return redirect()->route('login');
    }

    public function logout(Request $request){


        $user = Auth::user();
        event(new Logout($user));
        $request->session()->forget('user');

        Auth::logout();

        Alert::warning('Bye !', 'Selamat Tinggal');
        return redirect()->route('login')->with(['success' => 'Selamat Tinggal']);
    }






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
