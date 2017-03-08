<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;

use Excel;

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

   public function postsExcel()
   {
      $posts = Post::all(); //request

      $postsArray= []; //create array

      foreach ($posts as $post) { //save request to array
         $postsArray[] = $post->toArray(); //save all record to each in array
      }


      Excel::create('All Post', function ($excel) use ($postsArray) { //create file name
                $excel->sheet('Sheet 1', function ($sheet) use ($postsArray) { //creat sheet
                    $sheet->setOrientation('landscape'); //set orientation
                    $sheet->fromArray($postsArray); // set something??
                });
            })->export('csv'); //save to csv .

      return redirect()->admin();

   }

}
