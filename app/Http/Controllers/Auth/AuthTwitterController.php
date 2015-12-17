<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Socialite;
use Vinkla\Hashids\Facades\Hashids;

class ProviderTwitter extends Controller
{

    /**
     * @return mixed
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {

        try {
            $twitter_usuario = Socialite::driver('twitter')->user();

            dd($twitter_usuario);

        } catch (Exception $e) {
            dd($e);
            return response()->redirectToRoute('provider.twitter.error');
        }

        //$authUser = $this->findOrCreateUser($user);

        //Auth::login($authUser, true);

        //return Redirect::to('home');
    }

    /**
     * @return string
     */
    public function providerError()
    {
        dd('Error');
    }

}