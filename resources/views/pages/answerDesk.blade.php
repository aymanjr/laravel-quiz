@extends('layout.layout')

@section('answers')


     <div class="container-fluid">
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <h4>Founder of pakistan</h4>
            <input type="radio" name="ans" checked="true">(A)<small>Quizad azzam</small><br>
            <input type="radio" name="ans">(B)<small>Quizad azzam</small><br>
            <input type="radio" name="ans">(C)<small>Quizad azzam</small><br>
            <input type="radio" name="ans">(D)<small>Quizad azzam</small><br>
             <input value="" style="visibility: hidden" name="dbans">
        </div>
        <div class="col-md-5"></div>
        </div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <a href="#"><button class="btn btn-primary" style="float: right">Next</button></a>
        </div>

        </div>
     </div>

@endsection
