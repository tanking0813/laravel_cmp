<?php namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ShopController extends Controller {

    /**
     *
     * @return mixed
     */
    public function index()
	{
        $data = [
            'data' =>[
                [
                    'engine' => 'Trident',
                    'browser' => 'Internet Explorer 4.0',
                    'platform' => 'Win 95+',
                    'version' => '4',
                    'grade' => 'X',
                ],
                [
                    'engine' => 'Trident',
                    'browser' => 'Internet Explorer 5.0',
                    'platform' => 'Win 95+',
                    'version' => '5',
                    'grade' => 'C',
                ]
            ]
        ];

		//return View::make('backend::index');
        return Response::json($data);
	}
	
}