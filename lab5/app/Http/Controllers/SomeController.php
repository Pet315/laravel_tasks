<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Some;

// controller з декільками методами, які будуть відповідати за той чи інший запит
// декілька шаблонів, які відповідним чином реагують на ті чи інші запити

class SomeController extends Controller {

    public function hello() {
        return view('hello');
    }

    public function number($id) {
        return view('var_check', ['name'=>$id]);
    }

    public function letters($alp) {
        return view('var_check', ['name'=>$alp]);
    }

    public function join_us() {
        return view('join_us');
    }

    public function congrats(Request $req) {
        $nick = $req->input('nickname');
        return view('congrats', ['nickname' => $nick]);
    }

    public function user_profile() {
        $us1 = new Some();
        return view('user_profile', ['name'=>$us1->getName(), 'surname'=>$us1->getSurname(),
            'patr'=>$us1->getPatr(), 'friends'=>$us1->getFriends(), 'time_hours'=>$us1->getTH()]);
    }

}
