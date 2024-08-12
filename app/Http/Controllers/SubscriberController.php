<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class SubscriberController extends Controller
{
    public function verify(Subscriber $subscriber): Application|Redirector|RedirectResponse
    {
        if(!$subscriber->hasVerifiedEmail()){
            $subscriber->markEmailAsVerified();
        }

        return redirect('/?verified=1');
    }
}
