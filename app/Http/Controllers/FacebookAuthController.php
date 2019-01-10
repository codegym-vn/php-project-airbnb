<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->route('home');
    }

    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('provider_id', $facebookUser->id)->first();

        if ($authUser) {
            return $authUser;
        }

        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'email_verified_at' => $facebookUser->email_verified_at,
            'password' => $facebookUser->token,
            'phone' => $facebookUser->phone,
            'provider_id' => $facebookUser->id,
            'provider' => $facebookUser->id,
            'role' => $facebookUser->role
        ]);
    }
}
