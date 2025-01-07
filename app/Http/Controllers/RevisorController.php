<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller

{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        $last_checked_articles = Article::whereNotNull('is_accepted')
            ->orderBy('updated_at', 'desc')
            ->take(5)
            ->get();

        return view('revisor.index', compact('article_to_check', 'last_checked_articles'));
    }

    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect()
            ->back()
            ->with('message', "You have accepted the article $article->title");
    }

    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect()
            ->back()
            ->with('message', "you rejected the item $article->title");
    }

    public function annulla(Article $article)
    {
        $article->setAccepted(null);
        return redirect()->route('homepage')->with('message', 'Your operation has been undone successfully')
            ->with('message', "you rejected the item $article->title");
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message', 'Thank You, you have requested to become an auditor');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }
}
