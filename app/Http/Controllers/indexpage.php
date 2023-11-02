<?php

namespace App\Http\Controllers;

use App\Models\categories;


use App\Models\tools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Type\NullType;

class indexpage extends Controller
{
    //
    function index(Request $r)
    {
        if(isset($r['search'])){
            if($r['search'] !=''){
                $q=$r['search'];
                $tools =  DB::table('tools')->where('name',"like" ,"%$q%")->get();
                // $category = categories::all();

                return view('public.index', ['tools_list'=>$tools,'search_value'=>$r['search']]);
            }else{
               return redirect('/');
            }


        }else{
            // $tools = DB::table('tools')->where('category', $id)->get();
            $category = categories::all();
            return view('public.index', ['category'=>$category,'search_value'=>$r['search']]);
        }



    }

    // function getcategory()
    // {
    //     return
    // }

    function tools($id)
    {
        $t = DB::table('tools')->where('category', $id)->get();
        // $t = tools::where('category', '=', $id)->all();
        return $t;
    }
}
