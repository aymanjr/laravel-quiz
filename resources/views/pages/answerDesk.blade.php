@extends('layout.layout')

@section('answers')


     <div class="container-fluid">
        <form method="POST" action="/submitans">
            @csrf
            <div class="row">
                <div class="col-md-3"></div>
        <div class="col-md-4">
            <h4>#{{Session::get('nextq')}}  {{$question->question}}</h4>
            <input type="radio" name="ans" checked="true">(A)<small>{{$question->a}}</small><br>
            <input type="radio" name="ans">(B)<small>{{$question->b}}</small><br>
            <input type="radio" name="ans">(C)<small>{{$question->c}}</small><br>
            <input type="radio" name="ans">(D)<small>{{$question->d}}</small><br>
             <input value="{{$question->ans}}" style="visibility: hidden" name="dbans">
        </div>
        <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit" style="float: right">Next</button>
            </div>

        </form>
        </div>

    </div>

@endsection
