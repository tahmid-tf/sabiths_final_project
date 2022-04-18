<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.admin-content.contact.index', compact('contacts'));
    }
}
