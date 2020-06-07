<?php

use App\Bu;
use App\contact;
use App\SiteSettings;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

function getSetting($nameSetting='Site_Name'){
    $site=\App\SiteSettings::where('nameSetting',$nameSetting)->get();
    return $site[0]->value ;
}
function bu_count()
{
    if (Auth::check()){
        return Bu::where('user_id', Auth::id())->count();
    }else{
        return 0;
    }
}

function bu_type(){
    $array=[
        '','شقه','فيلا','شاليه'
    ];
    return $array ;
}
function bu_rent(){
    $array=['','تمليك','ايجار'];
    return $array ;
}
function bu_status(){
    $array=[
        '','مفعل','غير مفعل'
    ];
    return $array ;
}
function bu_place()
{
    return [
        "5" => "اسوان",
        "6" => "اسيوط",
        "4" => "الاسكندرية",
        "13" => "الاسماعيلية",
        "15" => "الاقصر",
        "24" => "البحر الاحمر",
        "7" => "البحيرة",
        "2" => "الجيزة",
        "9" => "الدقهلية",
        "28" => "السويس",
        "25" => "الشرقية",
        "12" => "الغربية",
        "11" => "الفيوم",
        "1" => "القاهرة",
        "22" => "القليوبية",
        "18" => "المنوفية",
        "17" => "المنيا",
        "19" => "الوادي الجديد",
        "8" => "بني سويف",
        "21" => "بور سعيد",
        "27" => "جنوب سيناء",
        "3" => "حلوان",
        "10" => "دمياط",
        "26" => "سوهاج",
        "20" => "شمال سيناء",
        "23" => "قنا",
        "14" => "كفر الشيخ",
        "16" => "مرسي مطروح",

    ];

}
function getImage(){
    $site= \App\SiteSettings::where('nameSetting','no_image')->get();
    return $site->value ;
}
function  getMainImage(){

    $image=SiteSettings::where('nameSetting','main_image')->get()[0];
//    dd($image);
    return $image->value ;
}

 function deleteImage($name = ''){
    if(file_exists($name)){
        File::delete($name);
    }
}

function contact(){
    return [
        'أعجاب','مشكله','أقتراح','إستفسار'
    ];
}

function getMassages(){
    $counts=contact::where('view',0)->get();
    return $counts ;
}

function countMassage(){
    return contact::where('view',0)->count();
}

function setActive($array,$class='active'){
    if(count($array)>0){
        $arr_seg=[];
        foreach($array as $key=>$url){
            if(Request::segment($key +1 )==$url){
                $arr_seg[]=$url ;
            }
        }
        if(count($arr_seg)== count(Request::segments())){
            if(isset($arr_seg[0])){
                return $class ;
            }

        }
    }

}

function getNumberOfBu($name,$value,$true=true){
    if ($true){
        return Bu::where($name,$value)->count();
    }else{
        return Bu::where($name,$value)->where('bu_status',1)->count();
    }


}

function getCountNotAvilable(){
    return Bu::where('bu_status',0)->count();
}
