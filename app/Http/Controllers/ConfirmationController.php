<?php

namespace App\Http\Controllers;

use App\Events\ConfirmationRequest;
use App\Exceptions\TokenMismatchException;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\AlreadyConfirmedException;

class ConfirmationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

        // process token from get request

       if ( ! $user = $this->userWithMatchedToken()){

           throw new TokenMismatchException('your request was invalid');

       }

       $user->update(['confirmed' => 1,
                      'confirmation_token' => null]);

        return view('confirmation.index');

    }

    public function show()
    {

        // get instance of user

        $user = User::where('id', Auth::id())->first();

        if( $user->confirmed ){


            throw new AlreadyConfirmedException;

        }

        if ( ! $user->confirmation_token ){


            throw new TokenMismatchException('you do not have a token');

        }


        // send email with token (fire ConfirmationRequest event)

        event(new ConfirmationRequest($user));


        return view('confirmation.show');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    private function userWithMatchedToken()
    {
        $user = User::where('confirmation_token', request('token'))
                ->where('id', Auth::id())
                ->first();

        if ($user->confirmation_token){

            return $user;

        }


    }
}
