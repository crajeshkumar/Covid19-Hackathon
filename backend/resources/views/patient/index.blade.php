@extends('layouts.generic_template');
@section('title')
Patient Form 
@endsection

@section('head')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')
<div class="container">
    <form action="/patientform" method="POST">
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Age</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Age" name="age">
        </div>
         <div class="form-group">
          <label for="exampleFormControlSelect1">Gender</label>
          <select class="form-control" name="gender" id="exampleFormControlSelect1">
            <option selected value="male">Male</option>
            <option value="female">Female</option>
            <option value="transgender">Transgender</option>
          </select>
        </div>
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Symptoms</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="symptoms[]" id="gridRadios1" value="fever">
                  <label class="form-check-label" for="gridRadios1">
                    Fever
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="symptoms[]"id="gridRadios2" value="tiredness">
                  <label class="form-check-label" for="gridRadios2">
                    Tiredness
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="symptoms[]" id="gridRadios3" value="dry cough">
                  <label class="form-check-label" for="gridRadios3">
                    Dry cough
                  </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="symptoms[]" id="gridRadios3" value="aches and pains">
                    <label class="form-check-label" for="gridRadios3">
                        Aches and Pains
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="symptoms[]" id="gridRadios3" value="nasal congestion">
                    <label class="form-check-label" for="gridRadios3">
                        Nasal Congestion
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="symptoms[]" id="gridRadios3" value="runny nose">
                    <label class="form-check-label" for="gridRadios3">
                        Runny nose.
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="symptoms[]" id="gridRadios3" value="sore throat">
                    <label class="form-check-label" for="gridRadios3">
                        Sore throat
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="symptoms[]" id="gridRadios3" value="diarrhoea">
                    <label class="form-check-label" for="gridRadios3">
                        Diarrhoea
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="symptoms[]" id="gridRadios3" value="others">
                    <label class="form-check-label" for="gridRadios3">
                        Others
                    </label>
                  </div>
              </div>
            </div>
          </fieldset>
        <div class="form-group">
            <label for="exampleFormControlInput1">Symptoms duration</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="In Dates" name="duration">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Brief about symptoms</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="brief"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mobile Number</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Mobile Number" name="number">
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationTooltip03">City</label>
              <input type="text" class="form-control" id="validationTooltip03" placeholder="City" name="city">
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationTooltip04">State</label>
              <input type="text" class="form-control" id="validationTooltip04" placeholder="State" name="state">
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationTooltip05">Zip</label>
              <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" name="pincode">
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
</div>

@endsection