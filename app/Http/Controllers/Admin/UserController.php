<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\LandingBim;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('can:Leer usuarios')->only('index');
        $this->middleware('can:Editar usuarios')->only('edit','update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', $user);
    }

    public function landing(){
        $landing = LandingBim::where('estado', '1')->get();
        $departamento = Departamento::all();
        $provincia = Provincia::all();
        $distrito = Distrito::all();
        return view('admin.landing.landing-bim', compact('landing', 'departamento', 'provincia', 'distrito'));
    }
    public function landingpmi(){
        $landing = LandingBim::where('estado', '2')->get();
        $departamento = Departamento::all();
        $provincia = Provincia::all();
        $distrito = Distrito::all();
        return view('admin.landing.landing-pmi', compact('landing', 'departamento', 'provincia', 'distrito'));
    }
}
