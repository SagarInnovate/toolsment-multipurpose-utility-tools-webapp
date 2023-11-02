<?php

namespace App\Http\Controllers;

use App\Models\categories;


use Illuminate\Http\Request;

class categoryController extends Controller
{

    public function index()
    {
        $category = categories::all();

        return view('admin.admin-Categories')->with('category', $category);
    }


    public function create()
    {
        return view('admin.admin-add_new_categories', ['title' => 'Add New Category', "btn_text" => 'Add New']);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        categories::create($input);
        return redirect('/ssadmin/categories')->with('flash_message', 'Student Addedd!');
    }


    public function show($id)
    {
        $category = categories::where('id', "=", $id)->first();
        return view('admin.admin-Categories')->with('category', $category);
    }


    public function edit($id)
    {
        $category = categories::find($id);
        $title = ['update category'];
        return view('admin.admin-add_new_categories', ['title' => 'update category', "btn_text" => 'update'])->with('category', $category);
    }


    public function update(Request $request, $id)
    {
        $category = categories::find($id);
        $input = $request->all();

        $category->update($input);
        return redirect('/ssadmin/categories')->with('flash_message', 'student Updated!');
    }


    public function destroy($id)
    {
        categories::destroy($id);
        return redirect('/ssadmin/categories')->with('flash_message', 'Student deleted!');
    }
}