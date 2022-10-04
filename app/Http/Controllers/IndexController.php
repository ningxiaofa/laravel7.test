<?php

namespace App\Http\Controllers;

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
}
