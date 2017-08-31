<?php

namespace App\Utilities;

class Copyright
{

    public static function displayNotice()
    {

        $date = date('Y') > 2017 ? date ('Y') : 2017;


        return '&copy ' . $date . ' &nbsp; <a href="/about">CoinSeer</a> &nbsp; All rights Reserved.';


    }

}