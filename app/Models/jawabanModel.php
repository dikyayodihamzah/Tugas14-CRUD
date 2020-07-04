<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
  public static function get_all() {
    $answers = DB::table('answers')->get();
    return $answers;
  }

  public static function add($data) {
    $new_answers = DB::table('answers')->insert($data);
    return $new_answers;
  }

  public static function find_by_id($id) {
    $answers = DB::table('answers')->where('question_id', $id)->first();
    return $answers;
  }
}