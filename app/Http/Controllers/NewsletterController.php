<?php

namespace App\Http\Controllers;

use Newsletter;
use App\Http\Requests\NewsletterStoreRequest;
use Illuminate\Support\Facades\Redirect;

class NewsletterController extends Controller
{
    public function store(NewsletterStoreRequest $request)
    {
        Newsletter::subscribePending($request->email);

        $request->session()->flash('signup', 'Thanks for signing up! Please check your email for confirmation.');

        return Redirect::route('welcome');
    }
}
