@extends('layouts.carrer')



@section('content')
<style>
  .cover
  {
    height:100vh;
    width:100%;
    background-image:linear-gradient(to right bottom,rgba(0,0,0,.8),rgba(0,0,0,.5)),url('../img/c7.webp');
    background-size:100% 100%;
    color: whitesmoke;
    display:flex;
    justify-content:center;
    align-items:center;
  }
  @media(max-width:500px)
  {
    .cover
    {
      height:75vh;
    }
  }
  ul.stepper
  {
    margin:0
  }
</style>
<div class="cover smooth-scroll">
  <a href="#form" class='btn btn-primary btn-rounded'>Register Now</a>
</div>

<div class="container">
<form action="{{route('c7')}}" method='post'>
{{csrf_field()}}
<ul class="stepper linear" id='form'>
  <li class="step active">
    <div data-step-label="Type something" class="step-title waves-effect waves-dark">Step 1</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input name='name' id="name-linear" type="text" class="form-control validate" required>
          <label for="name-linear">Your Name</label>
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
          <input name='email' id="email-linear" type="email" class="form-control validate" required>
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
          <input name='phone' id="tel-linear" type="number" class="form-control validate" required>
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
          <input name='department' id="department-linear" type="text" class="form-control validate" required>
          <label for="department-linear">Your Department</label>
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
          <input name='faculty' id="faculty-linear" type="text" class="form-control validate" required>
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
    <div class="step-title waves-effect waves-dark">Step 6</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input name='uni' id="university-linear" type="text" class="form-control validate" required>
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
    <div class="step-title waves-effect waves-dark">Step 7</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input name='NID' id="NID-linear" type="number" class="form-control validate" required>
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
    <div class="step-title waves-effect waves-dark">Step 8</div>
    <div class="step-new-content">
      <div class="row">
        <div class="md-form col-12 ml-auto">
          <input name='session' id="session-linear" type="text" class="form-control validate" required>
          <label for="session-linear">Your Session</label>
        </div>
      </div>
      <div class="step-actions">
        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">CONTINUE</button>
        <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">BACK</button>
      </div>
    </div>
  </li>
  <li class="step">
    <div class="step-title waves-effect waves-dark">Step 9</div>
    <div class="step-new-content">
      Finish!
      <div class="step-actions">
        <input type="submit" value="Submit" class='waves-effect waves-dark btn btn-sm btn-primary m-0 mt-4'>
      </div>
    </div>
  </li>
</ul>
</form>
</div>
@stop