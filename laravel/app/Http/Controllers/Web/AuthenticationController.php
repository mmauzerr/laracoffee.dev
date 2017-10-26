<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Auth;

class AuthenticationController extends Controller
{
    public function getSocialRedirect( $account ) {
        try {

            return Socialite::with( $account )->redirect();

        } catch ( \InvalidArgumentException $e ) {

            return redirect( '/login' );

        }
    }

    public function getSocialCallback( $account ) {

    }
}