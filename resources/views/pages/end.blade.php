@extends('layout.layout')

@section('end')
<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-4">
        <label for="">Correct<small> {{Session::get('correctans')}}</small></label>
        <label for="">InCorrect<small> {{Session::get('wrongans')}}</small></label>
        <label for="">Results<small> {{Session::get('correctans')}}/{{Session::get('correctans') + Session::get('wrongans') }}</small></label>
        <br>
        <h3>The Quiz is Done  </h3>
        <a href="#"><button class="btn btn-primary" style="margin-left: 10%">Finish Quiz</button></a>
    </div>
</div>

@endsection
