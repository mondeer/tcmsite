<?php

namespace tcm\Http\Controllers;

use Illuminate\Http\Request;
use tcm\Apply;

class ApplyCtrl extends Controller
{
    public function apply(Request $request) {
      $apply = new Apply;

      $apply->fname = $request->input('fname');
      $apply->mname = $request->input('mname');
      $apply->surname = $request->input('surname');
      $apply->county = $request->input('county');
      $apply->address = $request->input('address');
      $apply->phone = $request->input('phone');
      $apply->grade = $request->input('grade');
      $apply->course = $request->input('course');
      $apply->save();

      return redirect('/courses');

    }
}
