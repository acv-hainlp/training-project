<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

class AdminController extends Controller
{
   public function index()
   {
   		return view('admin.index');
   }

   public function showPost()
   {
   		
   }
}
