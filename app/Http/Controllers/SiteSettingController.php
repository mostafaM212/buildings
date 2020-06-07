<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index(){
        $siteSettings=SiteSettings::all();
        return view('admin.siteSetting.index',compact(['siteSettings'])) ;
    }
    public function store(Request $request){

        if (isset($request->main_image)){

            $image=$request->main_image ;

            $oldImage=SiteSettings::where('nameSetting','main_image')->get()[0];
//            dd($oldImage);
            deleteImage($oldImage->value);

            $imageName=$image->getClientOriginalName();

            $imageName=time().$imageName ;

            $image->move('main_image/',$imageName);

           $image='main_image/'.$imageName ;

            $siteImage=SiteSettings::where('nameSetting','main_image')->update([
                'value'=>$image,
            ]);
        }
        foreach ($request->only(['Site_Name','youtube','Facebook','mobile','twitter','address','keywords','Description'])as $key=>$req){
            $siteSetting=SiteSettings::where('nameSetting',$key)->update([
                'value'=>$req,
            ]);


        }

        session()->flash('success','تم تعديل الموقع بنجاح');
        return redirect()->back();
    }

}
