<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function show($id) {
        $answers = JawabanModel::find_by_id($id);
        if(!$answers) {
            return view('items.answer_null');
        }
        else {
            return view('items.answers_index', compact('answers'));
        }
    }
    
    public function store(Request $request) {
        $answer = $request->all();
        unset($answer["_token"]);
        $answers = JawabanModel::add($answer);
        if ($answer) {
            return view('items.answers_index', compact('answers'));
        }
    }
}
