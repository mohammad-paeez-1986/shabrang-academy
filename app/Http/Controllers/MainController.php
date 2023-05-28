<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        // $ip = $_SERVER['REMOTE_ADDR'];
        // $ref = @$_SERVER['HTTP_REFERER'];
        // $time = date("Y-m-d H:i");
        // var_dump($_SERVER);
        // return;
        // app('db')->statement("insert into visitors values(null,'$ip', '$ref', '$time')");
        // return app('db')->select("SELECT * FROM visitors order by id desc");
        return view("index");
    }

    //
}
