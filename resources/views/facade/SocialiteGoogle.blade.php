<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
$user = Socialite::driver('github')->user();
// All Providers
$user->getId();
$user->getNickname();
$user->getName();
$user->getEmail();
$user->getAvatar();
class LoginController extends Controller
{
    /**
     * Redirect the user to the google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        // $user->token;
    }
	return Socialite::driver('google')
    ->setScopes(['read:user', 'user'])
    ->redirect();
	
	public function logoutGoogle(){
		return Socialite::driver('google')->stateless()->user();
	}
}