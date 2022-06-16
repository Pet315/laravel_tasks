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

        // --- filter 1

        $account_id = Account::where('name', 'like', $name)->where('phone', 'like', $phone)->get('id');

        if (count($account_id) == 0) {
            // checking for errors
            if ((strlen($phone) < 7 || strlen($phone) > 16)) {
                return view('website1/specification', ['name' => "Введіть телефон (тільки цифрами), а також email (якщо не бажаєте вводити email, поставте прочерк)."]);
            }
            if (!ctype_digit($phone) && !stristr($phone, '+')) {
                return view('website1/specification', ['name' => "Помилка при написанні номеру телефону (мають бути тільки числа)."]);
            }
            if (!ctype_digit($product_id) || !ctype_digit($quantity)) {
                return view('website1/specification', ['name' => "Вводьте кількість і номер товару тільки за допомогою чисел!"]);
            }
            if ($product_id > 4 || $quantity < 1) {
                return view('website1/specification', ['name' => "Неправильно введено код товару (має бути від 1 до 4), або кількість (>0)."]);
            }

            // saving to db
            Account::insert([
                ['name' => $name, 'email' => $email, 'phone' => $phone]]);

            $account_id = Account::where('name', 'like', $name)->where('phone', 'like', $phone)->get('id');
        }

        // --- filter 2
        $account_orders = Account::find($account_id[0]['id'])->orders; // account orders

        if(count($account_orders) < 6) { // creating account orders limit

            // saving to db
            Order::insert([['quantity' => $quantity, 'product_id' => $product_id, 'account_id' => $account_id[0]['id']]]);

            // returning account name and info about last ordered products
            $pr = Product::where('id', 'like', $product_id)->get()[0];
            return view('website1/congrats', ['name' => $name, 'quantity' => $quantity, 'product' => $pr]);
        }

        return view('website1/specification', ['name' => "На жаль, ліміт замовлення товарів для вас уже
        вичерпано. Очікуйте зворотнього зв'язку."]);
    }

    public function m_congrats(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $product_id = $req->input('product_id');
        $quantity = $req->input('quantity');

        // --- filter 1

        $account_id = Account::where('name', 'like', $name)->where('phone', 'like', $phone)->get('id');

        if (count($account_id) == 0) {  // if entered data is unique
            // checking for errors
            if ((strlen($phone) < 7 || strlen($phone) > 16)) {
                return view('website1/m_specification', ['name' => "Введіть телефон (тільки цифрами), а також email (якщо не бажаєте вводити email, поставте прочерк)."]);
            }
            if (!ctype_digit($phone) && !stristr($phone, '+')) {
                return view('website1/m_specification', ['name' => "Помилка при написанні номеру телефону (мають бути тільки числа)."]);
            }
            if (!ctype_digit($product_id) || !ctype_digit($quantity)) {
                return view('website1/m_specification', ['name' => "Вводьте кількість і номер товару тільки за допомогою чисел!"]);
            }
            if ($product_id > 4 || $quantity < 1) {
                return view('website1/m_specification', ['name' => "Неправильно введено код товару (має бути від 1 до 4), або кількість (>0)."]);
            }

            // saving to db
            Account::insert([
                ['name' => $name, 'email' => $email, 'phone' => $phone]]);

            $account_id = Account::where('name', 'like', $name)->where('phone', 'like', $phone)->get('id');
        }

        // --- filter 2
        $account_orders = Account::find($account_id[0]['id'])->orders; // account orders

        if(count($account_orders) < 6) { // creating account orders limit

            // saving to db
            Order::insert([['quantity' => $quantity, 'product_id' => $product_id, 'account_id' => $account_id[0]['id']]]);

            // returning account name and info about last ordered products
            $pr = Product::where('id', 'like', $product_id)->get()[0];
            return view('website1/m_congrats', ['name' => $name, 'quantity' => $quantity, 'product' => $pr]);
        }

        return view('website1/m_specification', ['name' => "Дякуємо! Ліміт замовлення товарів для вас уже
        вичерпано. Очікуйте зворотнього зв'язку."]);
    }


}
