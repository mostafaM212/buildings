<?php

namespace App\Http\Controllers;

use App\Bu;
use App\Http\Requests\BuRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BuController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin')->except(['store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        //

        if($request->bu_name !=''){
            $bus=Bu::where('bu_name',$request->bu_name)->paginate(5) ;
            return view('admin.bu.index',compact(['bus'])) ;
        }
        else {
            $bus = Bu::paginate(5);
            return view('admin.bu.index', compact(['bus']));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.bu.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuRequest $request)
    {
        //


            $building=$request->only( 'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type', 'bu_small_dis','bu_meta', 'bu_langtuide',
                'bu_latitude', 'bu_status','user_id', 'rooms', 'bu_large_dis', 'image','discount','bu_place');
////           dd(array_keys(bu_status(),$request->bu_status));
//            $building['bu_rent']=array_keys(bu_rent(),$request->bu_rent);
//        $building['bu_type']=array_keys(bu_type())[$request->bu_type] ;
//        $building['bu_status']=array_keys(bu_status()[$request->bu_status]);
        $building['user_id'] = Auth::id() ;
//        $bu=Bu::create([
//            'bu_name'=>$request->bu_name,
//            'bu_price'=>$request->bu_price,
//            'bu_rent'=>key(bu_rent($request->bu_rent)),
//            'bu_type'=>key(bu_rent($request->bu_type)),
//            'bu_square'=>$request->bu_square,
//            'bu_small_dis'=>$request->bu_small_dis,
//            'bu_meta'=>$request->bu_meta,
//            'bu_langtuide'=>$request->bu_langtuide,
//            'bu_latitude'=>$request->bu_latitude,
//            'bu_status'=>key(bu_status($request->status)),
//            'user_id'=>Auth::user()->id,
//            'rooms'=>$request->rooms,
//            'bu_large_dis'=>$request->bu_large_dis,
//            'image'=>$image
//        ]);
        if(!Auth::user()->isAdmin()){
            $building['bu_status']=0 ;
        }
        $image=$building['image'] ;
        $imageName=$image->getClientOriginalName() ;

        $imageName=time().$imageName ;

        $image->move('bu_image/upload',$imageName);
        $building['image']='bu_image/upload/'.$imageName ;
        Bu::create($building) ;
        session()->flash('success','تم أضافه العقار بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bu $bu)
    {
        //
        $user=User::find($bu->user_id) ;

        return view('admin.bu.add' , compact(['bu','user'])) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BuRequest $request,Bu $bu)
    {

        //
        $building=$request->only( 'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type', 'bu_small_dis','bu_meta', 'bu_langtuide',
            'bu_latitude', 'bu_status','user_id', 'rooms', 'bu_large_dis', 'image','discount','bu_place');


        if ($request->hasFile('image')){
            $image= $building['image'];
            $imageName=$image->getClientOriginalName();

            $imageName=time().$imageName ;
            $image->move('bu_image/upload',$imageName);

            deleteImage($bu->image);

            $building['image']='bu_image/upload/'.$imageName ;
        }




//            $image=$building['image'] ;
//            $imageName=$image->getClientOriginalName();
//            $imageName=time().$imageName ;
////            dd($imageName);
//            $image->move('bu_image/upload',$imageName);
//            $building['image']='bu_image/upload/'.$imageName;
            $bu->update($building);
//        }else{
//            $bu->update($building);
//        }
//        $bu->update([
//            'bu_name'=>$request->bu_name,
//            'bu_price'=>$request->bu_price,
//            'bu_rent'=>key(bu_rent($request->bu_rent)),
//            'bu_type'=>key(bu_rent($request->bu_type)),
//            'bu_square'=>$request->bu_square,
//            'bu_small_dis'=>$request->bu_small_dis,
//            'bu_meta'=>$request->bu_meta,
//            'bu_langtuide'=>$request->bu_langtuide,
//            'bu_latitude'=>$request->bu_latitude,
//            'bu_status'=>key(bu_status($request->status)),
//            'rooms'=>$request->rooms,
//            'bu_large_dis'=>$request->bu_large_dis,
//            'image'=>$image
//        ]);
//        $bu->save();
        session()->flash('success','تم تعديل العقار بنجاح');
        return redirect()->route('bu.index') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bu $bu)
    {
        //
       if($bu->image != 'bu_image/1.jpg'){

           deleteImage($bu->image);
       }
        $bu->delete() ;
        session()->flash('success','تم حذف العقار بنجاح');
        return redirect()->back();
    }


    public function avalable(Request $request){
        $bu=Bu::find($request->id) ;
        $bu->bu_status=1 ;
        $bu->save();
        session()->flash('success','تم تفعيل العقار بنجاح');
        return redirect()->back();
    }
}
