<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $users = DB::table('users')->orderBy('role', 'desc')->where('email', '!=', $request->session()->get('email'))->get();
        $role = $request->session()->get('role');

        if($role === 'Staff' && $role !== 'Admin'){
            return redirect('/baby');
        }else{
            return view('home', compact('users'));
        }
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|min:5',
            'konfirmasi_password' => 'required|min:5|same:password'
        ]);
        
        $request->nama = ucwords($request->nama);
        $request->email = strtolower($request->email);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/home')->with('status', "Data '" . $request->nama . "' berhasil ditambahkan");
    }
}
