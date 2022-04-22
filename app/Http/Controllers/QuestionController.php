<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    function saveQuestion(Request $request, $productId){
        $newQuestion = $request->all();
        // save to db
        //save foreignKey
    }
}
