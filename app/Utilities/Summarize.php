<?php

namespace App\Utilities;

class Summarize
{
    public static function summary($string)
    {

        return substr($string, 0, 20) . '...';

    }

    public static function longSummary($string)
    {

        return substr($string, 0, 140) . '...';

    }

    public static function componentSummary($string)
    {

        return substr($string, 0, 156);

    }


}

