<?php

namespace Modules\Aboutus\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('aboutus::index');
    }
}
