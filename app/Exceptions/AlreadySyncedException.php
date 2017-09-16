<?php
namespace App\Exceptions;

class AlreadySyncedException extends \Exception
{

    public function handle($request, \Exception $exception)
    {



           if ($request->ajax()) {

                return response()->json(['error' => 'Already Synced'], 500);

           }

           return response()->view('errors.already-synced-exception', compact('exception'), 500);



    }

}