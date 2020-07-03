<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
  public static function get_all() {
    $questions = DB::table('questions')->get();
    return $questions;
  }

  public static function add($data) {
    $new_questions = DB::table('questions')->insert($data);
    return $new_questions;
  }
}