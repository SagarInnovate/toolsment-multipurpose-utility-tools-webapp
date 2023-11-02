<?php

namespace App\Http\Controllers;

use App\Models\tools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ZipArchive;

class toolsController extends Controller
{
    public function index()
    {
        $tools = tools::all();

        return view('admin.admin-Tools')->with('tools', $tools);
    }


    public function create()
    {
        return view('admin.admin-add_new_tool', ['title' => 'Add New Tool', "btn_text" => 'Add']);
    }


    public function store(Request $request)
    {

        // echo "<pre>";
        // print_r($request->input('name'));
        // echo "</pre>";
        $data = new tools();

        if ($request->file('icon')) {
            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $data['icon'] = $filename;
        }


        if ($request->file('source_code_file_url')) {
            $file = $request->file('source_code_file_url');
            $filename = date('YmdHi') . "_" . $file->getClientOriginalName();
            $file->move(public_path('public/code_path/zips'), $filename);
            // za($filename, $data['name']);

            $file = public_path('public/code_path/zips/' . $filename);
            $path = public_path('public/code_path/extracted/' . $filename);
            $zip = new ZipArchive;
            $res = $zip->open($file);
            if ($res === TRUE) {
                // extract it to the path we determined above
                $zip->extractTo($path);
                $zip->close();
            }

            $data['source_code_file_url'] = $filename;
        }



        $data['name'] = $request->input('name');
        $data['category'] = $request->input('category');
        $data['discription'] = $request->input('discription');
        $data['tags'] = $request->input('tags');
        $data['for_register_users'] = $request->input('for_register_users');

        $str = str_replace(" ", "-", $data['name']);
        $data['str_url'] = $str;
        $data->save();






        // return redirect()->route('images.view');
        // $input = $request->all();
        // tools::create($input);
        return redirect('/ssadmin/tools')->with('flash_message', 'Student Addedd!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tools = tools::find($id);
        $title = ['update user'];
        return view('admin.admin-add_new_tool', ['title' => 'update tool', "btn_text" => 'update'])->with('tools', $tools);
    }


    public function update(Request $request, $id)
    {

        $tools = tools::find($id);
        // $input = $request->all();

        if ($request->file('icon')) {
            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $icon = $filename;
        }


        if ($request->file('source_code_file_url')) {
            $file = $request->file('source_code_file_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/code_path'), $filename);
            $file = public_path('public/code_path/zips/' . $filename);
            $path = public_path('public/code_path/extracted/' . $filename);
            $zip = new ZipArchive;
            $res = $zip->open($file);
            if ($res === TRUE) {
                // extract it to the path we determined above
                $zip->extractTo($path);
                $zip->close();
            }
            $src_url = $filename;
        }


        //         $tools['name'] =
        //         $tools['category'] = $request->input('category');
        //         $tools['discription'] = $request->input('discription');
        //         $tools['tags'] = $request->input('tags');
        //         $tools['for_register_users'] = $request->input('for_register_users');

        //         $str = str_replace(" ", "-", $tools['name']);
        //         $tools['str_url'] = $str;
        // [
        //              'name'=> $request->input('name'),
        //             'category'=>$request->input('category'),
        //             "discription"=>$request->input('discription'),
        //             'tags'=>$request->input('tags'),
        //             "for_register_users"=>$request->input('for_register_users'),

        //             "str_url" => str_replace(" ", "-", $request->input('name')),
        // ];


        $tools->update([

            'name' => $request->input('name'),
            'category' => $request->input('category'),
            "discription" => $request->input('discription'),
            'tags' => $request->input('tags'),
            "for_register_users" => $request->input('for_register_users'),
            "icon" => $icon,
            "source_code_file_url" => $src_url,
            "str_url" => str_replace(" ", "-", $request->input('name')),

        ]);
        return redirect('/ssadmin/tools')->with('flash_message', 'student Updated!');
    }


    public function destroy($id)
    {
        tools::destroy($id);
        return redirect('/ssadmin/tools')->with('flash_message', 'Student deleted!');
    }

    public function all_tools(Request $r)
    {



        if(isset($r['search'])){
            if($r['search'] !=''){
                $q=$r['search'];
                $tools =  DB::table('tools')->where('name',"like" ,"%$q%")->get();
                // $category = categories::all();


            }else{
               return redirect('/tools');
            }


        }else{
            $tools = tools::all();
        }

        return view('public.tools', ['tools'=>$tools,'search_value'=>$r['search']]);






    }

    public function tt($id)
    {
        if (DB::table('tools')->where('str_url', $id)->get()->count() > 0) {
            $t = DB::table('tools')->where('str_url', $id)->get()->first();
            return view("public.tt")->with('tool', $t);
        } else {
            return abort(403);
        }
    }
}
