<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        return view('index', [
            'entityOne' => \App\EntityOne::all(),
            'entityTwo' => \App\EntityTwo::all(),
        ]);
    }

    public function setStatus($model, $id, $status) {
        $modelClass = 'App\\' . $model;
        $modelClass::find($id)->setStatus($status);
        return back();
    }
}
