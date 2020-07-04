<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function show($id) {
        $answers = JawabanModel::find_by_id($id);
        return view('items.answers_index', compact('answers'));
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
