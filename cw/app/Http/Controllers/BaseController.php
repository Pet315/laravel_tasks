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

        $account_id = Account::where('name', 'like', $name)->get('id'); // searching for account id using name

        if (count($account_id) == 0) { // if this name is unique

            // checking for errors
            if (strlen($phone) < 7 && strlen($email) < 5) {
                return view('website1/specification', ['name' => "Будь ласка, введіть email, або телефон для зв'язку"]);
            }
            if ((!ctype_digit($phone) && !stristr($phone, "+") && !stristr($phone, "-")) ||
                (!stristr($email, '@') && !stristr($email, '-')) || (!stristr($email, '.') &&
                    !stristr($email, '-'))) {
                return view('website1/specification', ['name' => "Помилка при написанні номеру телефону, або електронної пошти"]);
            }

            // saving to db
            Account::insert([
                ['name' => $name, 'email' => $email, 'phone' => $phone]]);

        }

        // --- filter 2
        $account_id = Account::where('name', 'like', $name)->get('id')[0]; // searching for account id using name
        $account_orders = Account::find($account_id['id'])->orders; // account orders

        if(count($account_orders) < 6) { // creating account orders limit

            // checking for errors
            if (!ctype_digit($product_id) || !ctype_digit($quantity)) {
                return view('website1/specification', ['name' => "Вводьте кількість і номер товару тільки за допомогою чисел!"]);
            }
            if ($product_id > 4 || $quantity <= 0) {
                return view('website1/specification', ['name' => "Неправильно введено код товару (має бути від 1 до 4), або кількість (>1)."]);
            }

            // saving to db
            Order::insert([['quantity' => $quantity, 'product_id' => $product_id, 'account_id' => $account_id['id']]]);
            $pr = Product::where('id', 'like', $product_id)->get()[0];

            // returning info about last ordered product
            return view('website1/congrats', ['name' => $name, 'quantity' => $quantity, 'product' => $pr]);
        }

        return view('website1/specification', ['name' => "Ліміт обрання товарів для користувачів з цими ім'ям та
        прізвищем вичерпано. Якщо це ваше перше замовлення, вводячи ім'я та прізвище, додайте ще кілька цифр/літер в
        кінці, або ім'я по-батькові"]);
    }

    public function m_congrats(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $product_id = $req->input('product_id');
        $quantity = $req->input('quantity');

        // --- filter 1

        $account_id = Account::where('name', 'like', $name)->get('id'); // searching for account id using name

        if (count($account_id) == 0) { // if this name is unique

            // checking for errors
            if (strlen($phone) < 7 && strlen($email) < 5) {
                return view('website1/m_specification', ['name' => "Будь ласка, введіть email, або телефон для зв'язку"]);
            }
            if ((!ctype_digit($phone) && !stristr($phone, "+") && !stristr($phone, "-")) ||
                (!stristr($email, '@') && !stristr($email, '-')) || (!stristr($email, '.') &&
                    !stristr($email, '-'))) {
                return view('website1/m_specification', ['name' => "Помилка при написанні номеру телефону, або електронної пошти"]);
            }

            // saving to db
            Account::insert([
                ['name' => $name, 'email' => $email, 'phone' => $phone]]);

        }

        // --- filter 2
        $account_id = Account::where('name', 'like', $name)->get('id')[0]; // searching for account id using name
        $account_orders = Account::find($account_id['id'])->orders; // account orders

        if(count($account_orders) < 6) { // creating account orders limit

            // checking for errors
            if (!ctype_digit($product_id) || !ctype_digit($quantity)) {
                return view('website1/m_specification', ['name' => "Вводьте кількість і номер товару тільки за допомогою чисел!"]);
            }
            if ($product_id > 4 || $quantity <= 0) {
                return view('website1/m_specification', ['name' => "Неправильно введено код товару (має бути від 1 до 4), або кількість (>1)."]);
            }

            // saving to db
            Order::insert([['quantity' => $quantity, 'product_id' => $product_id, 'account_id' => $account_id['id']]]);
            $pr = Product::where('id', 'like', $product_id)->get()[0];

            // returning info about last ordered product
            return view('website1/m_congrats', ['name' => $name, 'quantity' => $quantity, 'product' => $pr]);
        }

        return view('website1/m_specification', ['name' => "Ліміт обрання товарів для користувачів з цими ім'ям та
        прізвищем вичерпано. Якщо це ваше перше замовлення, вводячи ім'я та прізвище, додайте ще кілька цифр/літер в
        кінці, або ім'я по-батькові"]);
    }


}
