<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;

use Datatables;

class AdminController extends Controller
{
   public function __construct()
   {
      $this->middleware('admin');
   }

	public function index()
	{
		return view('admin.index');
	}
	
   public function users()
   {
   		return view('admin.users');
   }

   public function usersData()
   {
   		return Datatables::of(User::query())->make(true);
   }

   public function posts()
   {
      return view('admin.posts');
   }

   public function postsData()
   {
      return Datatables::of(Post::query())->make(true);
   }

   public function comments()
   {
      return view('admin.comments');
   }

   public function commentsData()
   {
      return Datatables::of(Comment::query())->make(true);
   }

}
