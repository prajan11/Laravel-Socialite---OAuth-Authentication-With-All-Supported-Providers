<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialMediaLoginController extends Controller
{

    /**
     * Redirect the user to the OAuth Provider i.e. Facebook, Google and so on.
     */
    public function redirect($providerName){
        return Socialite::driver($providerName)->redirect();
    }

    /**
     * Receiving callback from the provider after the user authentication
     * Handle stuffs after the user is redirected back to our application with data
     */
    public function callback($providerName){
        //initialising the $socialite user variable to null
        $socialite_user=null;

        //twitter allows us to use only OAuth 1.0 version which doesn't accept stateless() method.
        if($providerName == "twitter"){
            $socialite_user = Socialite::driver($providerName)->user();
        }
        else{
            $socialite_user = Socialite::driver($providerName)->stateless()->user();
        }


        $email=$socialite_user->email;  //storing email obtained from OAuth provider
        $name=$socialite_user->name;
        $provider_id= $socialite_user->id;

        //checking if the user already exists in our database
        $user_exists = User::where('email',$socialite_user->email)->exists();
        //since we are using multiple OAuth providers, generating column name for each OAuth provider (Eg: facebook_provider_id)
        $provider_column_name = $providerName.'_provider_id';

        //if the user already exists in our database
        if($user_exists){

            $user=User::where('email',$socialite_user->email)->first(); //extract the user details
            //if the existing user has logged in from different OAuth provider, populate the provider id for new OAuth provider column
            if(!$user[$provider_column_name]){
                $user[$provider_column_name] = $provider_id;
                $user->save();  //update the user details
            }
            Auth::login($user);
        }
        else{    //if new user, register the user
            $new_user = new User();
            $new_user->name=$name;
            $new_user->email=$email;
            $new_user[$provider_column_name]=$provider_id;

            $new_user->save();

            Auth::login($new_user);


        }

        //redirect the user to the dashboard.
        return redirect()->route('dashboard');


    }
}

