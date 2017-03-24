<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\CountryUser;

//use App\Http\Requests;

class ChartController extends Controller
{
    //
    public function getLaraChart()
    {
        $lava = new Lavacharts; // See note below for Laravel

        $popularity = $lava->DataTable();
        $data = CountryUser::select("name as 0","total_users as 1")->get()->toArray();

        $popularity->addStringColumn('Country')
            ->addNumberColumn('Our Service Users')
            ->addRows($data);

        $lava->PieChart('Our Service Users',$popularity,['titleTextStyle' => [
            'fontName' => 'Times',
            'fontColor' => '#eb6b2c',
            'fontSize'  =>14
        ],'title'=> 'List of our service users in different countries',
            'legend'=>['position'=>'right'], 'enableRegionInteractivity' => true,
            'keepAspectRatio' => true]);

        return view('laracharts',compact('lava'));
    }


}
