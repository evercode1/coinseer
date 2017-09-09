<?php

namespace App\UtilityTraits;

trait levels
{
    public function showLevelOf($model)
    {

        switch($model){

            case $model->level_id == 10:

                return 'beginner';
                break;

            case $model->level_id == 20:

                return 'intermediate';

            case $model->level_id == 30:

                return 'technical';

            default:

                return 'beginner';



        }



    }

    public function levels()
    {

        return $levels = [10 =>'beginner', 20 =>'intermediate', 30 => 'technical'];


    }





}