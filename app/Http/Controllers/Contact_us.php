<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest ;
class Contact_us extends Controller
{
    //
    public function index(){
        return view('theme.contact_us');
    }

    public function store(ContactRequest $request ){

        contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>contact()[$request->address],
            'massage'=>$request->massage,
            'view'=>0
        ]);
        session()->flash('success','شكرا لك على تعاونك');
        return redirect()->back();
    }
    public function show(){

        $contacts=contact::paginate(4);

        return view('theme.index',compact('contacts'));
    }

    public function destroy(contact $contact){
        $contact->delete();
        session()->flash('success','تم حذف الرساله بنجاح');
        return redirect()->back();
    }

    public function show2($id){
        $contact=contact::find($id);
        $contact->update([
            'view'=>1
        ]);
        return view('theme.show',compact(['contact']) );
    }
}
