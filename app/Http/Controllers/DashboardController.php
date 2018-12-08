<?php

namespace App\Http\Controllers;

use App\Category;
use App\Member;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }



    public function dashboard(){
      $posts_count = Post::all()->count();
      $categories_count = Category::all()->count();
      $members_count = Member::all()->count();
      return view('dashboard.AdminDashboard', compact(['posts_count', 'categories_count', 'members_count']));
    }

    public function addPeople(){
      $members = Member::all();
      return view('dashboard.addPeople', compact('members'));
    }


    public function addPost(){
      $categories = Category::all();
      $posts = Post::all();
      return view('dashboard.AddPost', compact(['posts', 'categories']));
    }


    public function navbar(){
      $categpries = Category::all();
      return view('dashboard.navbarManagment', compact('categpries'));
    }


    public function postEdit(){
      return view('dashboard.postEdit');
    }


    public function posts(){
      $posts = Post::all();
      $categories = Category::all();
      return view('dashboard.AddPost', compact(['posts', 'categories']));
    }

    public function changePassword(Request $request){
      $this->validate($request,[
        'old_password' => 'required|string|max:250|min:6',
        'new_password' => 'required|string|max:250|min:6',
        'new_password_repeat' => 'required|string|max:250|min:6',
      ]);

      $user = Auth::user();
      if($request->new_password == $request->new_password_repeat){
        if(Hash::check($request->old_password, $user->password)){
          $user->password = Hash::make($request->new_password);
          $user->save();
        }
      }

      return redirect('admin-dashboard');

    }


    public function registerPeople(Request $request){
      $this->validate($request,[
        'name' => 'required|string|max:250|min:2',
        'image' => 'required|image',
        'role' => 'required|string|max:250|min:1',
        'description' => 'required|string|max:250|min:6',
      ]);

      $image = $request->file('image');
      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/people');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.' . $file_extension;
      $image->move($dir, $image_name);

      $member = Member::create([
        'name' => $request->name,
        'role' => $request->role,
        'description' => $request->description,
        'image_path' => $file_path,
      ]);

      return redirect(route('admin-add-people'));

    }



    public function removePeople($id){
      $member = Member::find($id);
      $member->delete();
      return redirect(route('admin-add-people'));
    }




    public function addCategory(Request $request){
      $this->validate($request,[
        'name' => 'required|string|max:250|min:1',
      ]);

      $category = Category::create([
        'name' => $request->name
      ]);

      return redirect(route('admin-navbar'));
    }

    public function removeCategory($id){
      $category = Category::find($id);
      $category->delete();
      return redirect(route('admin-navbar'));
    }




    public function insertPost(Request $request){
      $this->validate($request,[
        'title' => 'required|string|max:250|min:2',
        'content' => 'required|string|max:5000|min:2',
        'image' => 'required|image',
        'category_id' => 'required',
//        'file' => 'string|max:250|min:6',
      ]);


      $image = $request->file('image');
      $file_extension = $image->getClientOriginalExtension();
      $dir = FileHelper::getFileDirName('images/post');
      $file_name = FileHelper::getFileNewName();
      $image_name = $file_name . '.' . $file_extension;
      $file_path = $dir . '/' . $file_name . '.' . $file_extension;
      $image->move($dir, $image_name);



      $file = $request->file('file');
      if($file !== null){
      $file_extension2 = $file->getClientOriginalExtension();
      $dir2 = FileHelper::getFileDirName('images/file');
      $file_name2 = FileHelper::getFileNewName();
      $file_name22 = $file_name2 . '.' . $file_extension2;
      $file_path2 = $dir2 . '/' . $file_name2 . '.' . $file_extension2;
      $file->move($dir2, $file_name22);

      }else{
        $file_path2 = null;
      }


      $post = Post::create([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'content' => $request->get('content'),
        'image_path' => $file_path,
        'file_url' => $file_path2,
      ]);

      return redirect(route('admin-posts'));

    }




    public function removePost($id){
      $post = Post::find($id);
      $post->delete();
      return redirect(route('admin-posts'));
    }


    public function editPostForm($id){
      $post = Post::find($id);
      return view('dashboard.postEdit', compact('post'));
    }


    public function editPost(Request $request){
      $this->validate($request,[
        'title' => 'required|string|max:250|min:2',
        'content' => 'required|string|max:5000|min:2',
        'post_id' => 'required',
      ]);

      $post = Post::find($request->post_id);
      $post->title = $request->title;
      $post->content = $request->get('content');
      $post->save();

      return redirect(route('admin-posts'));

    }
}

