<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function logIn()
    {
        $model = User::all();

        return view('user.logIn', compact(
            'model'
        ));
    }

    public function logInPost(UserRequest $request)
    {

        return $request->username;
        // $model = User::all();

        // if ($model->username == $request->username && $model->password == $request->password) {
        //     return view('home.home_main');
        // } else {
        //     return redirect('logIn');
        // }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User;

        return view('user.signUp', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $model = new User;
        $model->username = $request->username;
        $model->fullname = $request->fullname;
        $model->universitas = $request->universitas;
        $model->fakultas = $request->fakultas;
        $model->jurusan = $request->jurusan;
        $model->password = $request->password;
        $model->save(); 

        return redirect('home_main')->with('success', 'Account Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = User::find($id);

        return view('user.profile', compact(
            'model'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
