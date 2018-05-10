<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PagesController extends Controller
{
    public function single($id)
    {
        $news = News::find($id);
        return view("single", [
          "news" => $news
        ]);
    }
}
