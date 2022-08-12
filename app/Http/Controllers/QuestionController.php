<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{

    public function create(Request $request){

        $q  = new question();
        $q->question=$request->question;
        $q->a=$request->opa;
        $q->b=$request->opb;
        $q->c=$request->opc;
        $q->d=$request->opd;
        $q->ans=$request->ans;

        $q->save();
        Session::put('succeessMessage',"Question has been added");

        return redirect('/questions');

    }


}
