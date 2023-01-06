<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isLoggedIn = Auth::check();
        if($isLoggedIn) {
            return redirect()->route('dashboard');
        }
        return view('client.auth.register');
    }

    public function painelClient() {
        $users = User::paginate('20');
        return view('admin.cruds.client.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cruds.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'phone' => 'min:15',
            'password' =>'required|min:6|confirmed',
            

        ],[ 
            'name.required' =>'Nome é obrigatório',
            'phone.min' =>'Informe um número válido',
            'email.required' =>'Email é obrigatório',
            'email.email' =>'Informe um e-mail válido',
            'password.required' =>'Senha é obrigatório',
            'password.min' =>'A senha precisa ter 6 caracteres mínimos',
            'password.confirmed' =>'Confirme sua senha',
        ]);

        $data = $request->only('name', 'email', 'phone', 'password', 'options');
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect()->route('login');
    }

    public function userstore(Request $request) {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'phone' => 'min:11',
            'password' =>'required|min:6|confirmed',

        ]);

        $data = $request->only('name', 'email', 'phone', 'password', 'client', 'admin');
        $data['password'] = Hash::make($data['password']);

        $data['options'] = $request->options?1:0;
        $data['active'] = $request->active?1:0;

        User::create($data);

        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('admin.cruds.client.edit', [
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $data = $request->all();

        $data['active'] = $request->active?1:0;
        $data['options'] = $request->options?1:0;

        if($request->password) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

        $user->fill($data)->save();

        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (!$user = User::find($id)) {
            return redirect()->route('admin.client.index');
        }
        $user->delete();

        return redirect()->back();
    }

}
