<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use Validator,Redirect,Response,File;
 use Socialite;
 use App\User;
 class SocialController extends Controller
 {
    public function redirectToFacebook()
 {
    return Socialite::driver('facebook')->redirect();
 }
    public function handleFacebookCallback()
 {
    $getInfo = Socialite::driver('facebook')->user();
    $user = $this->createUser($getInfo);
    auth()->login($user);
    return redirect()->to('/home');
 }
    function createUser($getInfo){
    $user = User::where('provider_id', $getInfo->id)->first();
    if (!$user) {
        $user = User::create([
            'name'     => $getInfo->name,
            'email'    => $getInfo->email,
            //'provider' => $provider,
            'provider_id' => $getInfo->id
        ]);
   }
   return $user;
 }
 }
