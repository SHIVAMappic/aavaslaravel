<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        $members = Member::all();
        return view('members.index',compact('members'));
    }

    public function add(){
        return view('members.add');
    }

    public function profileUpload(Request $request){
        $image = $request->file('profile_name');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $result = array('status'=>true,'profile'=>$new_name);
        echo json_encode($result);die;
    }


    public function store(){

    }


}
