<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::orderBy('id', 'desc')->paginate(4);
        return view('Admin.Actions.blog', compact('blogs'));
    }

    public function editBlog(Request $request, $id){
        try {
           if ($request->hasFile('image')) {
               if ($request->file('image')->getSize() > 5000000) {
                   return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
               }
           }
           $blog = Blog::where('id', $id)->first();
           if ($blog){
               if ($request->hasFile('image')){
                   $image = $request->file('image');
                   $image_name = User::processImage($image);
                   $blog->image = $image_name;
               }
               $blog->title = $request->title;
               $blog->text = $request->text;
               $blog->save();
               return redirect()->back()->with('success', "Blog Details Successfully Updated");
           }
           else{
               return redirect()->back()->with('failure', "Blog not found");
           }
        }
        catch(\Exception $exception){
           return redirect()->back()->with('failure', 'Action could not be performed');
        }
    }

    public function createBlog(Request $request){
        try {
           if (!$request->hasFile('image')) {
               return redirect()->back()->with('failure', "Image File must be Uploaded");
           }
           else{
               if ($request->file('image')->getSize() > 5000000) {
                   return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
               }
               $this->validate($request, [
                   'title' => 'bail|required',
                   'text' => 'bail|required',
               ]);

               $new_blog = new Blog();
               $image = $request->file('image');
               $image_name = User::processImage($image);
               $new_blog->image = $image_name;
               $new_blog->title = $request->title;
               $new_blog->text = $request->text;
               $new_blog->save();
               return redirect()->back()->with('success', "Blog Successfully Added");
           }

        }
        catch(\Exception $exception){
           return redirect()->back()->with('failure', 'Action could not be performed');
        }
    }

    public function deleteBlog($id){
        try {
           $blog = Blog::where('id', $id)->first();
           if ($blog){
               $blog->delete();
               return redirect()->back()->with('success', "Blog Deleted Successfully");
           }
           else{
               return redirect()->back()->with('failure', "Blog not found");
           }
        }
        catch(\Exception $exception){
           return redirect()->back()->with('failure', 'Action could not be performed');
        }
    }
}
