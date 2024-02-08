<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book () {
      $book = "本のページ";
      return view("book", compact("book"));
    }
}
