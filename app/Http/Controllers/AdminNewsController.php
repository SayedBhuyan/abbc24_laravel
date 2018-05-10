<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use File;
// use Intervention\Image\ImageManagerStatic as Image;


class AdminNewsController extends Controller
{
    public function index()
    {

      $news = News::all();
      return view("admin.news.index", [
        "news" => $news
      ]);

    }

    public function create()
    {
      return view("admin.news.new");
    }

    public function store(Request $request)
    {
      $news = new News;
      $news->title = $request->title;

      if($request->hasfile('image'))
     {

        foreach($request->file('image') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/assets/admin/images/uploads/', $name);
            $imagename = $name;
        }
     }

      $news->image = $imagename;
      $news->description = $request->content;
      $news->author = $request->author;
      $news->category = $request->category;



      if($news->save()) {
        return redirect("/admin/news/");
      } else {
        die("Server is on construction...");
      }
    }

    public function edit($id)
    {
      $news = News::find($id);
      return view("admin.news.update", [
        "news" => $news
      ]);
    }

    public function update(Request $request)
    {
      $news = News::find($request->id);
      $news->title = $request->title;

      if($request->hasfile('image'))
     {

        foreach($request->file('image') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/assets/admin/images/uploads/', $name);
            $imagename = $name;
        }

        if(File::exists(public_path().'/assets/admin/images/uploads/', $news->image)) {
          @unlink(public_path()."/assets/admin/images/uploads/{$news->image}");
        }
     } else {
       $imagename = public_path()."/assets/admin/images/uploads/{$request->image}";
     }

      $news->image = $imagename;
      $news->description = $request->content;
      $news->author = $request->author;
      $news->category = $request->category;



      if($news->update()) {
        return redirect("/admin/news/");
      } else {
        die("Server is on construction...");
      }
    }

    public function destroy($id)
    {
      if(News::find($id)) {
        News::destroy($id);
        return redirect("/admin/news/");
      } else {
        die("Server is on construction for this method...");
      }
    }
}
