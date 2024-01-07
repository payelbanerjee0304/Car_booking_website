<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index():View
    {
        return view('index');
    }
    public function offer():View
    {
        return view('offer');
    }
    public function aboutus():View
    {
        return view('aboutus');
    }
    public function contactus():View
    {
        return view('contactus');
    }
    public function contactusaction(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $name=$request->input("name");
        $email=$request->input("email");
        $subject=$request->input("subject");
        $message=$request->input("message");
        $data=[
        'name'=>$name,
        'email'=>$email,
        'subject'=>$subject,
        'message'=>$message];
        DB::table('contactus')->insert($data);
        return redirect("/contactus")->with ('massage','Query has been Submited Successfully ');
    }
    public function insert():View
    {
        return view('form');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'requirement'=>'required',
            'pickup'=>'required',
            'drop'=>'required',
            'bdate'=>'required',
            'btime'=>'required',
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
        $requirement=$request->input('requirement');
        $pickup=$request->input('pickup');
        $drop=$request->input('drop');
        $bdate=$request->input('bdate');
        $btime=$request->input('btime');
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        if($request->file('file'))
        $file=$request->file('file');
        $fileName= time()."_".$file->getClientOriginalName();
        $uploadlocation="./upload";
        $file->move($uploadlocation,$fileName);
                $data=[
                    'requirement'=>$requirement,
                    'pickup'=>$pickup,
                    'drop_loc'=>$drop,
                    'bdate'=>$bdate,
                    'btime'=>$btime,
                    'name'=>$name,
                    'email'=>$email,
                    'phone'=>$phone,
                    'image'=>$uploadlocation.'/'.$fileName,
                    'user'=>'client'
                ];
                DB::table('cab_booking')->insert($data);
                return redirect('/insert')->with('message','Data Inserted Successfully');
    }
    public function displayall():View
    {
        $user="client";
        $data=DB::table('cab_booking')->where('user','=',$user)->get();
        return view('displayall')->with(['allinfo'=>$data]);
    }
    public function displayclient($dc):View
    {
        $userid=$dc;
        $user=DB::table('cab_booking')->where('user_id','=',$userid)->get();
        return view('displayclient')->with(['clientinfo'=>$user]);
    }
    public function login():View
    {
        return view('login');
    }
    public function save(Request $request)
    {
        $email=$request->input('email');
        $password=$request->input('password');
        $data=DB::table('cab_booking')->where('email','=',$email)->get();
        if(empty($data[0]))
        {
            return redirect('/login')->with('message','Data not found');
        }
        else
        {
            if($data[0]->phone==$password)
            {
                    if($data[0]->user=='client')
                    {
                        $userid=$data[0]->user_id;
                        $user=DB::table('cab_booking')->where('user_id','=',$userid)->get();
                        return view('displayclient')->with(['clientinfo'=>$user]);
                    }
                    else
                    {
                        return redirect('/displayall');
                    }
            }
            else
            {
                return redirect('/login')->with('message','Password doesnot match');
            }
        }
    }
    public function delete($del)
    {
        $userid=$del;
        DB::table('cab_booking')->where('user_id','=',$userid)->delete();
        return redirect('/displayall')->with('message','User has been deleted');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login')->with('message','Logout Successfully');
    }
    public function edit($ep):View
    {
        $userid=$ep;
        $user=DB::table('cab_booking')->where('user_id','=',$userid)->get();
        return view('edit')->with(['userinfo'=>$user[0]]);
    }
    public function update(Request $request)
    {
        $userid=$request->input('uid');
        $requirement=$request->input('requirement');
        $pickup=$request->input('pickup');
        $drop=$request->input('drop');
        $btime=$request->input('btime');
        $name=$request->input('name');
        if($request->file('file')){
        $file=$request->file('file');
        $filename=time()."_".$file->getClientOriginalName();
        $uploadlocation="./upload";
        $file->move($uploadlocation,$filename);
        $data=[
                'requirement'=>$requirement,
                'pickup'=>$pickup,
                'drop_loc'=>$drop,
                'btime'=>$btime,
                'name'=>$name,
                'image'=>$uploadlocation.'/'.$filename
            ];
            DB::table('cab_booking')->where('user_id','=',$userid)->update($data);
            $user=DB::table('cab_booking')->where('user_id','=',$userid)->get();
            return view('displayclient')->with(['clientinfo'=>$user]);
            }
            else
            {
                $data=[
                    'requirement'=>$requirement,
                    'pickup'=>$pickup,
                    'drop_loc'=>$drop,
                    'btime'=>$btime,
                    'name'=>$name
            ];
            DB::table('cab_booking')->where('user_id','=',$userid)->update($data);
            $user=DB::table('cab_booking')->where('user_id','=',$userid)->get();
            return view('displayclient')->with(['clientinfo'=>$user]);
            }
    }
}
