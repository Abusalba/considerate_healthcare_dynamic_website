<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models as Model; // Assuming your models are in the App\Models namespace
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function dashboard(){
       $state = [
           'blogs' => Model\Blog::count(),
           'abouts' => Model\About::count(),
           'contacts' => Model\Contact::count(),
       ];
       return view('admin.dashboard', compact('state'));
   }
}
