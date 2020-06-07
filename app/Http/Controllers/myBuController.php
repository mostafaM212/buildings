<?php

namespace App\Http\Controllers;

use App\Bu;
use App\Http\Requests\BuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class myBuController extends Controller
{
    //
    public function index(){

        $bus=Bu::where('user_id',Auth::id())->paginate(8);
        return view('welcome',compact(['bus']));
    }

    public function show($id){

            $bus=Bu::where('bu_status',0)->paginate(8) ;
            //        $bus=Bu::all()->paginate(9);

            return view('web.bu.all',compact(['bus'])) ;


    }

    public function edit($id,Request $request){

        $bu=Bu::find($request->bu_id) ;
        return view('web.bu.add',compact(['bu'])) ;
    }

    public function update(BuRequest $request,$id){


        $bu= Bu::find($request->bu_id);

        $building=$request->only( 'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type', 'bu_small_dis','bu_meta', 'bu_langtuide',
            'bu_latitude','user_id', 'rooms', 'bu_large_dis', 'image','discount','bu_place');

        $building['bu_rent']=key(bu_rent($request->bu_rent));
        $building['bu_type']=key(bu_type( $request->bu_type) ) ;
        if (!Auth::user()->isAdmin()){
            $building['bu_status']=0;
        }
        if ($request->hasFile('image')){
            $image= $building['image'];
//            dd(filesize($image));
            if (filesize($image)>1400000){
                session()->flash('success','هذه الصوره كبيره جدا ');
                return redirect()->back();
            }
            $imageName=$image->getClientOriginalName();

            $imageName=time().$imageName ;
            $image->move('bu_image/upload',$imageName);

            deleteImage($bu->image);

            $building['image']='bu_image/upload/'.$imageName ;
        }

        $bu->update($building) ;
        session()->flash('success','تم تعديل لعقار نجاح');
        return redirect()->route('/');
    }
}
