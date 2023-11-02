<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class blogsController extends Controller
{
    public function index()
    {
        $blogs = blogs::all();

        return view('admin.admin-Blog')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('admin.admin-add_new_blog', ['title' => 'Add New Blog', "btn_text" => 'Add Blog']);
    }


    public function store(Request $request)
    {
        $data = new blogs();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Blog_Image'), $filename);
            $data['image'] = $filename;
        }



        $data['post_title'] = $request->input('post_title');
        $data['post_content'] = $request->input('post_content');
        $data['description'] = $request->input('description');
        $data['category'] = $request->input('category');
        $data['tags'] = $request->input('tags');
        $str = str_replace(" ", "-", $data['post_title']);
        $data['str_url'] = $str;
        $data->save();
        return redirect('/ssadmin/blogs')->with('flash_message', 'Student Addedd!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $blog = blogs::find($id);
        $title = ['update blog'];
        return view('admin.admin-add_new_blog', ['title' => 'update blog', "btn_text" => 'update'])->with('blog', $blog);
    }


    public function update(Request $request, $id)
    {
        if ($blog = blogs::find($id)->count() > 0) {



            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('public/Blog_Image'), $filename);
                $blog_img = $filename;
            }




            $blog = blogs::find($id);
            $input = [
                "post_title" => $request->input('post_title'),
                "description" => $request->input('description'),
                "post_content" => $request->input('post_content'),
                "category" => $request->input('category'),
                "tags" => $request->input('tags'),
                "str_url" => str_replace(" ", "-", $request->input('post_title')),
                "image" => $blog_img

            ];
            $blog->update($input);
            return redirect('/ssadmin/blogs')->with('flash_message', 'student Updated!');
        } else {
            return abort(403);
        }
    }


    public function destroy($id)
    {
        if (blogs::destroy($id)) {
            return redirect('/ssadmin/blogs')->with('flash_message', 'Student deleted!');
        } else {
            return abort(401);
        }
    }

    public function blog_posts(Request $r)
    {
        // $blog = blogs::all();
        // return $ab;






        if(isset($r['search'])){
            if($r['search'] !=''){
                $q=$r['search'];
                $blog =  DB::table('blogs')->where('post_title',"like" ,"%$q%")->get();
                // $category = categories::all();


            }else{
               return redirect('/blogs');
            }


        }else{
            $blog = blogs::all();
        }

        return view('public.blogs', ['blog'=>$blog,'search_value'=>$r['search']]);




    }

    public function  bt($id)
    {
        if (DB::table('blogs')->where('str_url', $id)->get()->count() > 0) {
            $b = DB::table('blogs')->where('str_url', $id)->get()->first();
            return view("public.bt")->with('blog', $b);
        } else {
            return abort(404);
        }
    }

    public function descb()
    {
        if (blogs::orderBy('id', "desc")->get()->count() > 0) {
            $b = blogs::orderBy('id', "desc")->get();

            return $b;
        } else {
            return abort(404);
        }
    }
}
