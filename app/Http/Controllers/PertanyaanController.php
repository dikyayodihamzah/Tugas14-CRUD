<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public static function index() {
        $questions = PertanyaanModel::get_all();
        return view('items.index', compact('questions'));
    }

    public function create() {
        return view ('items.question_form');
    }
    
    public function store(Request $request) {
        //dd($request->all());
        $question = $request->all();
        unset($question["_token"]);
        $questions = PertanyaanModel::add($question);
        if ($question) {
            return PertanyaanController::index();
        }
    }
}
