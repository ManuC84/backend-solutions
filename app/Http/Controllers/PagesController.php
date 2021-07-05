<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PagesController extends Controller
{
    public function index()
    {

        $user = null;
        if(auth()->user()) {
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
        }
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);

        return view('pages.index')->with('user', $user);



    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO'],
            'images' => ["/img/bes-webdesign.jpeg","/img/bes-programming.jpeg", "/img/bes-seo.jpeg" ]
        );
        return view('pages.services')->with($data);
    }
}
