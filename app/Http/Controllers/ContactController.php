<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('userPage.pages.contact');
    }
    public function PostInfoCustomer(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'text' => 'required|string',
            'title' => 'required|string',
        ], [
            'name.required' => 'Name is required',
            'text.required' => 'Description is required',
            'title.required' => 'Title is required',
        ]);
        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData);
        }
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->title = $request->title;
        $contact->comment = $request->text;
        $contact->active = 1;
        $contact->save();

        return response()->json(['message' => 'Send successfully!!']);
    }
}
