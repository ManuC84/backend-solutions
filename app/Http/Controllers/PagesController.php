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
            'images' => ["/img/bes-webdesign.jpeg","/img/bes-programming.jpeg", "/img/bes-seo.jpeg" ],
            'modalTitle' => ["Your Web Design Resource", "Get Your App Running", "Make Sure Your Customer Finds You"],
            'modalContent' => ["Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.","Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.","Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line."],
            'id' => ["exampleModalCenter1", "exampleModalCenter2", "exampleModalCenter3" ]
        );
        return view('pages.services')->with($data);
    }
}
