<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
  public static function get_all() {
    $answers = DB::table('answers')->get();
    return $answers;
  }

  public static function add($data) {
    $new_answers = DB::table('items')->insert($data);
    return $new_answers;
  }
}