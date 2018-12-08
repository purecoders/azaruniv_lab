<?php

namespace App\Http\Controllers;

use App\Category;
use App\Member;
use App\Post;
use App\Ticket;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
      $categories = Category::all();
      $posts1 = Post::orderBy('id', 'desc')->take(6)->get();
      $posts2 = Post::orderBy('id', 'desc')->take(15)->get();
      return view('index', compact(['categories', 'posts1', 'posts2']));
    }

    public function people(){
      $masters = Member::orderBy('id','asc')->where('role', 'like', 'استاد')->get();
      $students = Member::orderBy('id','asc')->where('role', 'like', 'دانشجو')->get();
      return view('People', compact(['masters', 'students']));
    }

    public function categoryPosts($id){
      $category = Category::find($id);
      $posts = $category->posts;
      $newPosts = Post::orderBy('id', 'desc')->take(5)->get();
      return view('categoryPosts', compact(['posts', 'newPosts']));
    }


    public function showPost($id){
      $post = Post::find($id);
      return view('postContent', compact(['post']));
    }

    public function contact(){
      return view('Contact');
    }

    public function sendTicket(Request $request){
      $this->validate($request,[
        'name'     =>'required|string|max:50',
        'email'     =>'required|string|max:100',
        'text'     =>'required|string|max:5000',
      ]);

      $ticket = Ticket::create([
        'name' => $request->name,
        'email' => $request->email,
        'text' => $request->text,
      ]);

      return redirect(route('contact'));
    }

}
