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

  public static function find_by_id($id) {
    $question = DB::table('questions')->where('id', $id)->first();
    return $question;
  }

  public static function update($id, $request) {
    $question = DB::table('questions')
                  ->where('id', $id)
                  ->update([
                    'judul' => $request["judul"],
                    'isi' => $request["isi"],
                  ]);
    return $question;
  }

  public static function destroy($id) {
    $deleted = DB::table('questions')->where('id', $id)->delete();
    return $deleted;
  }
}