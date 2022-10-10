<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return [
            'code' => 200,
            'msg' => 'Success',
            'data' => [
                'name' => 'william ning',
                'age' => 29
            ]
        ];
    }

    public function view()
    {
        return view('view');
    }

    public function getPost(Request $request)
    {
        return $request->post();
    }

    // http://laravel7.test:8080/whoop
    // http://laravel7.test:8080/index/whoop
    public function whoop(){
        try {
            throw new \Exception('Just for test whoop component');
        } catch (\Throwable $th) {
            //throw $th;
            var_dump($th->getMessage());
        }
        dd('whoop');
    }
}
