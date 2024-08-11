<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\Contact_request;

class ContactController extends Controller
{
    public function input_form(){

     return view('input_form');
    }

    public function contact_save(Contact_request $request){

    Contact::create($request->validated());
   return redirect(route('contact_list'));
    }

    public function contact_list(){
    $contacts = Contact::all();
    return view('Contact_list',compact('contacts'));

}
public function contact_edit($id){

$contact=Contact::find($id);
return view('contact_edit',compact('contact'));


}
public function contact_update(Contact_request $request,$id){

    $contact=Contact::find($id);
    $contact->update($request->validated());
    return redirect(route('contact_list'));
}
public function contact_delete($id){

   Contact::destroy($id);
   return redirect(route('contact_list'));

}
}