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
        $request->session()->put('role','Staff2');
        $role = $request->session()->get('role');
        
        if($role === 'Staff' || $role === 'Staff2' && $role !== 'Admin'){
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

    public function edit(User $user){
        $data = [
            'user' => $user
        ];
        return view('admin/edit', $data);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|min:5',
            'konfirmasi_password' => 'required|min:5|same:password'
        ]);
        // $status = Hash::check($request->password, $user->password);
        // update data pegawai
        DB::table('users')->where('id',$user->id)->update([
            'password' => Hash::make($request->password)
        ]);
        // alihkan halaman ke halaman home
        return redirect('/home')->with('status', "Password '" . $user->name . "' berhasil diubah");
    }
}
