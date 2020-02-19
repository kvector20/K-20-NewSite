@extends('layouts.carrer')



@section('content')
<div class="container">
<form action="{{route('c7')}}" method='post'>
{{csrf_field()}}
<ul class="stepper linear">
  <li class="step active">
    <div data-step-label="Type something" class="step-title waves-effect waves-dark">Step 1</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input id="email-linear" type="text" class="form-control validate" required>
          <label for="email-linear">Your Name</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
      </div>
    </div>
  </li>


  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 2</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input id="email-linear" type="email" class="form-control validate" required>
          <label for="email-linear">Your Email</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
      </div>
    </div>
  </li>

  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 3</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input max-length='11' id="tel-linear" type="number" class="form-control validate" required>
          <label for="tel-linear">Your Phone</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
      </div>
    </div>
  </li>
  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 4</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input id="faculty-linear" type="text" class="form-control validate" required>
          <label for="faculty-linear">Your Faculty</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
      </div>
    </div>
  </li>

  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 5</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input id="university-linear" type="text" class="form-control validate" required>
          <label for="university-linear">Your University</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
      </div>
    </div>
  </li>
  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 6</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input id="NID-linear" type="number" class="form-control validate" required>
          <label for="NID-linear">Your National ID</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
      </div>
    </div>
  </li>

  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 7</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input id="password-linear" type="text" class="form-control validate" required>
          <label for="password-linear">Your password</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
      </div>
    </div>
  </li>
  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 8</div>
    <div class="step-new-content">
      Finish!
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary m-0 mt-4" type="button">SUBMIT</button>
      </div>
    </div>
  </li>
</ul>
</form>
</div>
@stop