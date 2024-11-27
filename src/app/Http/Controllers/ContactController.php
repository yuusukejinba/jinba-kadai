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

         
         public function contact(Request $request)
         {

          $contact = $request->only(['first-name' , 'last-name' , 'gender' , 'email' , 'tel' , 'address' , 'building' , 'detail']);
          
          return view('confirm', ['confirm' => $contact]);

         }

         public function thanks(Request $request)
         {

          $contact = $request->only(['first-name' , 'last-name' , 'gender' , 'email' , 'tel' , 'address' , 'building' , 'detail']);
          
          return view('thanks' , ['confirm' => $contact]);
          

         }

         public function store(Request $request)
         {
         $contact = $request->only(['category_id' , 'first-name' , 'last-name' , 'gender->1:男性、2:女性、3:その他' , 'email' , 'tel' , 'address' , 'building' , 'detail']);
                Contact::create($contact);
                return view('thanks');
         }

         public function register(Request $request)
         {

          $contact = $request->only(['first-name' , 'last-name' , 'email' , 'password']);
          
          return view('register', ['contact' => $contact]);
         }

         public function login(Request $request)
         {

          $contact = $request->only(['email' , 'password']);
          
          return view('login', ['contact' => $contact]);
         }
         
         public function admin(Request $request)
         {

          $contact = $request->only(['first-name' , 'last-name' , 'email' , 'password']);
          
          return view('admin', ['contact' => $contact]);
}
}