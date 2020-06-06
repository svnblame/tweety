<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class TweetController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('tweets.index', [
            'tweets' => current_user()->timeline(),
        ]);
    }

    /**
     * Store new Tweet to database.
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body'    => $attributes['body'],
        ]);

        return redirect('/tweet');
    }
}
