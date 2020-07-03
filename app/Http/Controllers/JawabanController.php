<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index() {
        $answers = JawabanModel::get_all();
        return view('items.index', compact('answers'));
    }
    
    public function store(Request $request) {
        // dd($request->all());
        $answer = $request->all();
        unset($answer["_token"]);
        $answers = JawabanModel::add($answer);
        if ($answer) {
            return view('items.index', compact('answers'));
        }
    }
}
