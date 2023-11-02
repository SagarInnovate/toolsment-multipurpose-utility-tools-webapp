<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class userscontroller extends Controller
{

    public function index()
    {
        $users = users::all();

        return view('admin.admin-Users')->with('users', $users);
    }

    public function create()
    {
        return view('admin.admin-add_new_user', ['title' => 'Add New User', "btn_text" => 'Add New User']);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        users::create($input);
        return redirect('/ssadmin/users')->with('flash_message', 'Student Addedd!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = users::find($id);
        $title = ['update user'];
        return view('admin.admin-add_new_user', ['title' => 'update user', "btn_text" => 'update'])->with('user', $user);
    }


    public function update(Request $request, $id)
    {
        $users = users::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('/ssadmin/users')->with('flash_message', 'student Updated!');
    }


    public function destroy($id)
    {
        users::destroy($id);
        return redirect('/ssadmin/users')->with('flash_message', 'Student deleted!');
    }
}