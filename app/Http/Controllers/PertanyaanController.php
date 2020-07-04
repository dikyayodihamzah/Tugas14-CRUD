<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index() {
        $questions = PertanyaanModel::get_all();
        return view('items.questions_index', compact('questions'));
    }

    public function create() {
        return view ('items.question_form');
    }
    
    public function store(Request $request) {
        $question = $request->all();
        unset($question["_token"]);
        $questions = PertanyaanModel::add($question);
        if ($question) {
            return redirect('/pertanyaan');
        }
        else {
            return view('items.question_null');
        }
    }

    public function show($id) {
        $question = PertanyaanModel::find_by_id($id);
        return view('items.question_show', compact('question'));
    }

    public function edit($id) {
        $question = PertanyaanModel::find_by_id($id);
        return view('items.question_edit', compact('question'));
    }

    public function update($id, Request $request) {
        $question = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        $deleted = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
