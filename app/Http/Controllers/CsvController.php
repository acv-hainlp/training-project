<?php

namespace App\Http\Controllers;

use Excel;
use App\User;
use App\Post;

class CsvController extends Controller
{

    public function excel()
    {
    	// $users = User::all();

    	// $usersArray= [];

    	// foreach ($users as $user) {
    	// 	$usersArray[] = $user->toArray();
    	// }


    	// Excel::create('Export data', function ($excel) use ($usersArray) {
     //            $excel->sheet('Sheet 1', function ($sheet) use ($usersArray) {
     //                $sheet->setOrientation('landscape');
     //                $sheet->fromArray($usersArray);
     //            });
     //        })->export('csv');


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
	}
}