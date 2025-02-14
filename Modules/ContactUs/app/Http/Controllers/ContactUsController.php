<?php

namespace Modules\ContactUs\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contactus::index');
    }
}
