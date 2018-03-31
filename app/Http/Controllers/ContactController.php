<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function sendMessage(Request $request){

    $this->validate($request,array(
      'name' =>'required',
      'email' => 'required|email',
      'subject' => 'required',
      'message' => 'required'
    ));

      $myEmail = 'testing@vetmontemar.cl';
      $email = $request->email;
      $subject = $request->subject;
      $bodyMessage = $request->message;
      $name = $request->name;

      Mail::to($myEmail)->send(new ContactForm($email,$name,$subject,$bodyMessage));

      return view('welcome');
  }
}
