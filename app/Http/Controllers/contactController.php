<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class contactController extends Controller
{

    public function index()
    {
        $contacts = contacts::all();

        return view('admin.admin-contacts')->with('contacts', $contacts);
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        $input = [
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            'message' => $request->input("message"),
            "register_user_id" => "NON",
            "username" => "unknown",
            "replied?" => "N"
        ];
        contacts::create($input);
        return redirect('/')->with('flash_message', 'message send successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


    public function reply($id)
    {
        $contact = contacts::find($id);
        return view("admin.admin-comment_reply")->with("contact", $contact);
    }
}