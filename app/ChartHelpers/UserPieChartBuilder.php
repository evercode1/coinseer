<?php
namespace App\ChartHelpers;
use DB;

class UserPieChartBuilder
{

    use SetsTables;


    private $unFormattedData = [];

    public $data;


    public function __construct()
    {

        $this->data['data'] = ['labels' => [], 'values' => []];


        $this->getUnFormattedData();

        $this->setLabelsAndValues();


    }


    private function setLabelsAndValues()
    {

        foreach ($this->unFormattedData as $label => $value){


            $label = $label == 1 ? 'Confirmed' : 'Unconfirmed';


            $this->data['data']['labels'][] = $label;
            $this->data['data']['values'][] = $value;


        }


    }

    public function getData()
    {


        return $this->data;


    }



    /**
     * @param $lastWeek
     * @param $today
     */

    private function getUnFormattedData()
    {



        $rows = DB::table('users')
            ->select(
                'confirmed',

                DB::raw('COUNT(id) as count'))
            ->groupBy('confirmed')
            ->orderBy('confirmed', 'asc')
            ->get();

        foreach($rows as $row){

            $this->unFormattedData[$row->confirmed] = $row->count;

        }




    }




}