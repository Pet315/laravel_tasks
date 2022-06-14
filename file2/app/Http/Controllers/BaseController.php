<?php

namespace App\Http\Controllers;
use App\Models\Profession;
use App\Models\Subdivision;
use App\Models\Worker;

class BaseController
{
    public function company()
    {
        return view('company', ['subdivs' => Subdivision::get(), 'workers' => Worker::get(), 'profs' => Profession::get()]);
    }

    public function getWorkers($id) {
        $s = Subdivision::where('id', 'like', $id)->get();
        $r = Subdivision::find($id)->workers;
        return view('workers', ['workers'=>$r, 'subdiv'=>$s]);
    }

    public function connectNToN($id) {
        $p = Profession::where('id', 'like', $id)->get();
        $r = Profession::find($id)->workers;
        return view('nn_connect', ['workers'=>$r, 'prof'=>$p]);
    }

    public function create($name, $hns) {
        $s = new Subdivision();
        $s->name = $name;
        $s->head_name_surname = $hns;
        $s->save();
        return view('company', ['subdivs' => Subdivision::get(), 'workers' => Worker::get(), 'profs' => Profession::get()]);
    }

}
