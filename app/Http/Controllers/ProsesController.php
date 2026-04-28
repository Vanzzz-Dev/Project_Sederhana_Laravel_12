<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request -> password)
        ]);

        return redirect('/login')->with('succes','Register Berhasil');
    }

    public function storeLogin(Request $request){
        $data = $request->only('email','password');

        if(Auth::attempt($data)){
            return redirect('/');
        } 

        return back()->with('eror','Email atau Password Salah');
    }
    public function storeLogOut(Request $request){
        Auth::logout(); // hapus login user

        $request->session()->invalidate(); // hapus session
        $request->session()->regenerateToken(); // reset CSRF token

        return redirect('/home');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
