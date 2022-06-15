<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Account;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function congrats(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $product_id = $req->input('product_id');
        $quantity = $req->input('quantity');

        // filter 1
        $arr1 = Account::where('name', 'like', $name)->get();
        $arr2 = Account::where('email', 'like', $email)->get();
        $arr3 = Account::where('phone', 'like', $phone)->get();

        if (count($arr1) == 0 && (count($arr2) == 0 || count($arr3) == 0)) {
            if (strlen($phone) < 7 && strlen($email) < 5) {
                return view('website1/specification', ['name' => "Будь ласка, введіть email, або телефон для зв'язку"]);
            }
            if (!ctype_digit($phone) && !stristr($phone, "+") && !stristr($phone, "-") &&
                (!stristr($email, '@') || !stristr($email, '.'))) {
                return view('website1/specification', ['name' => "Помилка при написанні номеру телефону, або електронної пошти"]);
            }
            Account::insert([
                ['name' => $name, 'email' => $email, 'phone' => $phone]]);

        }

        //filter 2

        $order_ids = Account::get('id');
        $i=0;
        foreach ($order_ids as $oi) {
            $arr[$i] = $oi;
            $i++;
        }
        $account_id = end($arr);
        $arr1 = Order::where('account_id', 'like', $account_id['id'])->get();

        if(count($arr1) < 6) {

            if (!ctype_digit($product_id) && !ctype_digit($quantity)) {
                return view('website1/specification', ['name' => "Вводьте кількість і номер товару тільки числами!"]);
            }

            Order::insert([['quantity' => $quantity, 'product_id' => $product_id, 'account_id' => $account_id['id']]]);
            $pr = Product::where('id', 'like', $product_id)->get()[0];

            return view('website1/congrats', ['name' => $name, 'quantity' => $quantity, 'products' => $pr]);
        }

        return view('website1/specification', ['name' => "Дякуємо! Ліміт обрання товарів вичерпано"]);
    }

    public function m_congrats(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $product_id = $req->input('product_id');
        $quantity = $req->input('quantity');

        // filter 1
        $arr1 = Account::where('name', 'like', $name)->get();
        $arr2 = Account::where('email', 'like', $email)->get();
        $arr3 = Account::where('phone', 'like', $phone)->get();
        if (count($arr1) == 0 && (count($arr2) == 0 || count($arr3) == 0)) {
            if (strlen($phone) < 7 && strlen($email) < 5) {
                return view('website1/m_specification', ['name' => "Будь ласка, введіть email, або телефон для зв'язку"]);
            }
            if (!ctype_digit($phone) && !stristr($phone, "+") && !stristr($phone, "-") &&
                (!stristr($email, '@') || !stristr($email, '.'))) {
                return view('website1/m_specification', ['name' => "Помилка при написанні номеру телефону, або електронної пошти"]);
            }
            Account::insert([
                ['name' => $name, 'email' => $email, 'phone' => $phone]]);

        }

        //filter 2

        $order_ids = Account::get('id');
        $i=0;
        foreach ($order_ids as $oi) {
            $arr[$i] = $oi;
            $i++;
        }
        $account_id = end($arr);
        $arr1 = Order::where('account_id', 'like', $account_id['id'])->get();

        if(count($arr1) < 6) {

            if (!ctype_digit($product_id) && !ctype_digit($quantity)) {
                return view('website1/m_specification', ['name' => "Вводьте кількість і номер товару тільки числами!"]);
            }

            Order::insert([['quantity' => $quantity, 'product_id' => $product_id, 'account_id' => $account_id['id']]]);
            $pr = Product::where('id', 'like', $product_id)->get()[0];

            return view('website1/m_congrats', ['name' => $name, 'quantity' => $quantity, 'products' => $pr]);
        }

        return view('website1/m_specification', ['name' => "Дякуємо! Ліміт обрання товарів вичерпано"]);
    }


}
