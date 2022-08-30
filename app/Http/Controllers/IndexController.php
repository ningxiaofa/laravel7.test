<?php

namespace App\Http\Controllers;

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
}
