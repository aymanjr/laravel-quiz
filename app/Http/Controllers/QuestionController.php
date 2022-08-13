<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{


    public function create(Request $request)
    {

        $q  = new question();
        $q->question = $request->question;
        $q->a = $request->opa;
        $q->b = $request->opb;
        $q->c = $request->opc;
        $q->d = $request->opd;
        $q->ans = $request->ans;

        $q->save();
        Session::put('succeessMessage', "Question has been added");

        return redirect('/questions');
    }

    public function show()
    {

        $qs = question::all();

        return view('pages.questions')->with(['questions' => $qs]);
    }
    public function update(Request $request)
    {

        $q  = question::find($request->id);
        $q->question = $request->question;
        $q->a = $request->opa;
        $q->b = $request->opb;
        $q->c = $request->opc;
        $q->d = $request->opd;
        $q->ans = $request->ans;

        $q->save();
        Session::put('succeessMessage', "Question has been UPDATED");

        return redirect('/questions');
    }

    public function delete(Request $request)
    {
        question::where('id',$request->id)->delete();
        return redirect('/questions');
    }

    public function startquiz(){
        Session::put("nextq",'1');
        Session::put("wrongans",'0');
        Session::put("correctans",'0');

        $q = question::all()->first();

        return view('pages.answerDesk')->with(['question'=>$q]);

    }
}
