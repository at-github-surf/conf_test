<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $Categories = Category::all();
        return view('index', ['categories' => $Categories]);
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['last_name','first_name','gender','email','tell','address','building','category_id','detail']);
        $Categories = Category::all();
        return view('confirm', ['contact' => $contact,'categories' => $Categories]);
    }

    public function store(Request $request)
    {
        $contact = $request->only(['last_name','first_name','gender','email','tell','address','building','category_id','detail']);
        Contact::create($contact);
        return view('thanks');
    }
}