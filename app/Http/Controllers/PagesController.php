<?php
  namespace App\Http\Controllers;

  use App\Post;

  class PagesController extends Controller {

    //you can use a period(.) instead of a forward slash
    //to navigate subdirectories

    public function getIndex() {
      $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		  return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout() {
      $first = "John";
      $last = "Doe";

      $full = $first . " " . $last;
      $email = "johnbonleal17@gmail.com";
      return view('pages.about')->with("fullname",$full)->with("email",$email);
    }
    public function getContact() {
      return view('pages.contact');
    }
  }
 ?>
