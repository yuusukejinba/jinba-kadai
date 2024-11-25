<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {

      return view('index');
    
    }

    public function confirm(Request $request)
         {

          $contact = $request->only(['first-name' , 'last-name' , 'gender' , 'email' , 'tel' , 'address' , 'building' , 'detail']);
          
          return view('confirm', ['contact' => $contact]);
         }

         
         public function contact(ContactRequest $request)
         {

          $contact = $request->only(['first-name' , 'last-name' , 'gender' , 'email' , 'tel' , 'address' , 'building' , 'detail']);
          
          return view('confirm', ['contact' => $contact]);

         }

         public function store(Request $request)
         {
         $contact = $request->only(['first-name' , 'last-name' , 'gender->1:男性、2:女性、3:その他' , 'email' , 'tel' , 'address' , 'building' , 'detail']);
                Contact::create($contact);
                return view('thanks');
         }
}
