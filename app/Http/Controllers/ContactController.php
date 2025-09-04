<?php

namespace App\Http\Controllers;
use App\Mail\ClientAcknowledgementMail;
use App\Mail\AdminNotificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
use App\Models\Contact;
use App\Models\Contactform;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function admincontact() {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function adminaddcontact() {
        return view('admin.contact.create');
    }

    public function adminstorecontact (Request $request) {

        Contact::insert([
            'address' => $request->address,
            'email'=> $request->email,
            'phone' => $request->phone,
            'created_at' =>Carbon::now()
        ]);
        return redirect()->route('contact.admin')->with('message', 'Address details save successfully');
    }

    public function homeindex() {
        $contacts = DB::table('contacts')->first();
        return view('pages.contact', compact('contacts'));
    }


    public function deletecontact($id) {
        Contact::find($id)->delete(); 
        return redirect()->route('contact.admin')->with('message', 'contact delete successfully');
    }

    public function updatecontact(Request $request, $id) {
        Contact::find($id)->update([
            'address' => $request->address,
            'email'=> $request->email,
            'phone' => $request->phone,
        ]);
        return redirect()->route('contact.admin')->with('message', 'Contact updated successfully');
    }

    public function editcontact($id) {
        $contacts = Contact::find($id);
        return view('admin.contact.edit',compact('contacts'));
    }

    public function formcontact(Request $request) {
        $message = Contactform::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject,
            'message'   => $request->message,
            'phone'     => $request->phone,
            'interest'  => $request->interest,
            'created_at'=> Carbon::now()
        ]);
    
        // Send email to client
        Mail::to($request->email)->send(new ClientAcknowledgementMail($request->name));
    
        // Send email to admin
        $adminEmail = "johnmuthogakanyingi@gmail.com"; // Change to your admin email
        Mail::to($adminEmail)->send(new AdminNotificationMail($message->toArray()));
    
        return redirect()->route('contact')->with('message', "Thank you, your message was sent successfully. We'll get back to you within 24 business hours.");
    }

    public function contactmessage() {
        $messages = Contactform::all();
        return view('admin.contact.message',compact('messages'));
    }

    public function cmessagedelete($id) {
        Contactform::find($id)->delete(); 
        return redirect()->route('contact.message')->with('message', 'contact messages delete successfully');
    }

    public function viewmessage($id) {
        $messages = Contactform::find($id);
        return view('admin.contact.messageveiw',compact('messages'));
    }
}
