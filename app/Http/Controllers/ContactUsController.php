<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function index()
    {
        $lists = Contactus::get();
        return view('admin.contactus.index',compact('lists'));
    }



    public function store(Request $request)
    {
        Contactus::create([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'message' =>$request->message,
        ]);
        return redirect('/contactus')->with('message','聯絡我們成功，請等候我們的聯繫。');
    }


    public function seemore($id)
    {
        $more = Contactus::find($id);
        return view('/admin/contactus/seemore',compact('more'));
    }


    public function delete(Request $request,$id)
    {
        $old_record = Contactus::find($id);
        $old_record->delete();
        return redirect('/admin/contactus')->with('message','刪除聯絡我們成功!');
    }
}
