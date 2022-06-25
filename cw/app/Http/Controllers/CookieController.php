<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use App\Http\Requests;
//use App\Http\Controller\Controllers;

class CookieController extends Controller
{
    public function setCookie() {
//        $minutes = 1;
        $response = new Response();
        $response->withCookie(cookie('name5', 'a'));
        $response->withCookie(cookie('name2', 'b'));
        $response->withCookie(cookie('name4', 'c'));
        return $response;
    }

    public function getCookie(Request $request) {
        echo $request->cookie('name');
        echo $request->cookie('name5');
        if ($request->cookie('name')) {
            echo 'Yeah';
        } else {
            echo 'Nothing';
        }
    }
}
