<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function AllContacts() {
    	$contacts=DB::table('contacts')->get();

    	return view('pages.all-contacts')->with('data',$contacts);
    }
    public function InsertData() {
    	return view('pages.insert');
    }

    public function DataAdded(Request $request) {
    	
    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;
    	$data['description']=$request->description;
    	
    	$add=DB::table('contacts')->insert($data);

    	return Redirect()->route('all.contacts');


    }

    public function DeleteData($id){
    	$dlt=DB::table('contacts')->where('id',$id)->delete();
    	return Redirect()->route('all.contacts');

    }
     public function EditData($id){
    	$edt=DB::table('contacts')->where('id',$id)->first();
    	return view('pages.edit-contact', compact('edt'));

    }

    public function UpdateData(Request $request,$id) {

        $data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;
    	$data['description']=$request->description;

    	$updt=DB::table('contacts')->where('id',$id)->update($data);
    	return Redirect()->route('all.contacts');

    }
    public function ViewData($id) {
    	$view=DB::table('contacts')->where('id',$id)->first();
    	return view('pages.view-contact', compact('view'));

    }

}
