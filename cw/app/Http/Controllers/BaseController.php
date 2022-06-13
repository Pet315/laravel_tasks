<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function congrats(Request $req) {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $comment = $req->input('comment');

        $arr1 = DB::table('reviews')->where('name', 'like', $name)->get('name');
        $arr2 = DB::table('reviews')->where('email', 'like', $email)->get('email');
        $arr3 = DB::table('reviews')->where('phone', 'like', $phone)->get('phone');

        if (count($arr1) != 0 || count($arr2) != 0 || count($arr3) != 0) {
            return view('website1/congrats',
                ['name' => "ви уже надіслали нам дані про себе"]);
        }

//        if (strlen($phone) < 10 || strlen($email) < 6 ) {
//            return view('website1/specification', ['name' => "Будь ласка, введіть email, або телефон для зв'язку"]);
//        }

        if ((!ctype_digit($phone) && !stristr($phone, "+")
                && !stristr($phone, "-")) || !stristr($email, '@') || !stristr($email, '.')) {
            return view('website1/specification', ['name' => "Помилка при написанні номеру телефону, або електронної пошти"]);
        }

        DB::table('reviews')->insert([
            ['name' => $name, 'email' => $email, 'phone' => $phone,
                'comment' => $comment]]);
        return view('website1/congrats', ['name' => $name]);
    }

    public function m_congrats(Request $req) {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $comment = $req->input('comment');

        $arr1 = DB::table('reviews')->where('name', 'like', $name)->get('name');


        if (count($arr1) != 0) {
            return view('website1/m_congrats', ['name' => "ви уже надіслали нам дані про себе"]);
        }

        DB::table('reviews')->insert([
            ['name' => $name, 'email' => $email, 'phone' => $phone,
                'comment' => $comment]]);
        return view('website1/m_congrats', ['name' => $name]);
    }
}
