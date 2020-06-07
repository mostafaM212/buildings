<?php

namespace App\Http\Controllers;

use App\Bu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuildingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bus=Bu::where('bu_status',1)->paginate(8) ;
//        $bus=Bu::all()->paginate(9);

        return view('web.bu.all',compact(['bus'])) ;
    }



    public function Rent($bu_type=''){
        if(isset($bu_type)){
            $bus=Bu::where('bu_rent',2)->where('bu_status',1)->where('bu_type' , $bu_type)->paginate(8);
        }else{
             $bus=Bu::where('bu_rent',2)->where('bu_status',1)->paginate(8);
      }
        return view('web.bu.all',compact(['bus'])) ;
    }


    public function sel($bu_type=''){
        if($bu_type !=''){
            $bus=Bu::where('bu_rent',1)->where('bu_status',1)->where('bu_type',$bu_type)->paginate(8);
        }else {
            $bus = Bu::where('bu_rent', 1)->where('bu_status', 1)->paginate(8);
        }
        return view('web.bu.all',compact(['bus'])) ;
    }


    public function search(Request $request){

        $bus=Bu::where('bu_name','like',$request->bu_name);
        $count=$bus->count();
        $bus=$bus->paginate(8);
        return view('web.bu.all',compact(['bus','count'])) ;
    }


    public function type($bu_type){

        if (in_array($bu_type,[0,1,2])){
            $bus=Bu::where('bu_type',$bu_type)->where('bu_status',1)->paginate(8);
            return view('web.bu.all',compact(['bus'])) ;
        }else{
            return redirect()->back();
        }
    }


    public function price(Request $request){
//        dd($request->all());
        $bus=Bu::where('bu_price','<=',$request->bu_price);
        $count=$bus->count();
        $bus=$bus->paginate(8);
        return view('web.bu.all',compact(['bus','count']));
    }


    public function rooms(Request $request){

        $bus=Bu::where('rooms','=',$request->bu_rooms);
        $count=$bus->count();
        $bus=$bus->paginate(8);
        return view('web.bu.all',compact(['bus','count']));
    }



    public function lang(Request $request){


        $bus=Bu::where('bu_square','<=',$request->lang);
        $count=$bus->count();
        $bus=$bus->paginate(8);
        return view('web.bu.all',compact(['bus','count']));
    }


    public function Advanced(){
        return view('web.bu.search') ;
    }

    public function search2(Request $request){
//        dd($request->all());
        $quary=DB::table('bu')->select('*');
//        dd($quary->get());
        if(isset($request->bu_name)){
            $quary->where('bu_name',$request->bu_name) ;
        }
        if(isset($request->bu_price)){
            $quary->where('bu_price',$request->bu_price) ;
        }
        if(isset($request->bu_place)){
            $quary->where('bu_place',$request->bu_place) ;
        }
//        if($request->bu_rent !=0){
//            $quary->where('bu_rent',$request->bu_rent) ;
//        }
        if($request->bu_rooms !=0){
            $quary->where('rooms','<=',$request->rooms) ;
        }
//        dd($quary->paginate(10));
        $count=$quary->count();
        $bus=$quary->paginate(8);
        return view('web.bu.all' ,compact(['bus','count']));
//        $bus=Bu::where(['bu_name','bu_price','bu_square','bu_type']) ;
    }

    public function show (Bu $bu){

        return view('web.bu.singleBuilding',compact(['bu'])) ;
    }

    public function add2(){
        if (Auth::check()) {
            return view('web.bu.add');
        }else{
            return redirect()->route('login');
        }
    }
}
