<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CheckController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth') ;
    }

    public function index($id){
        $user=User::find($id);
        return view('user.edit',compact(['user']));
    }
        public function store(Request $request,$id){
            $user=User::find($id);

            $user->name=$request->name ;
       //    dd($request->all());
//           dd(Hash::check('62646284',Auth::user()->password));
            $old=$request->old_password ;
            if(!Hash::check($old,$user->password)){
                session()->flash('success','برجاء التحقق من كلمه المرور القديمه');
            }
            if($request->password !=null && Hash::check($old,$user->password)){

                $user->password =Hash::make($request->password) ;
            }

            $user->save();
            session()->flash('success','تم التعديل بنجاح');
            return redirect()->route('/');
        }
}
