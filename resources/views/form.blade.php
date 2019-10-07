<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KVectorFoundaion</title>
    <link rel="icon" href="{{asset('img/logo.jpg')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
</head>
<body>

<div class="cover">
    <div class="container smooth-scroll">
        <h1 class='animated slower pulse infinite'>Be Different And <span>Join Us</span></h1>
        <a href="#form" class="btn btn-danger btn-rounded">Join Now</a>
    </div>
</div>

<div class="joinus container">
    <div class="container">
    @if(Session::has('ok'))
    <div class='alert alert-success'>{{Session::get('ok')}}</div>
    @endif

<div class="card wow fadeInUp" id='form'>

<h5 class="card-header color white-text text-center py-4">
  <strong>K'20 Participants Recruitment</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

  <!-- Form -->
  <form class="text-left" style="color: #757575;" action="/insert" method='post'>
  <div class="md-form animated slower fadeInUp delay-3s">

      <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - General Notes : <br>
       * Fill The Form In Engish Please <br>
       * Speical Characters Not Allowed Execpt [ @ , - , _ , . ] <br>
       * Http Link Not Allowed
      </small>

    </div>
    {{csrf_field()}}
    <!-- Email -->
    <div class="md-form animated slower fadeInUp delay-3s">
      <input type="text" id="materialLoginFormName" pattern='[a-z].{2,}' name='name' class="form-control" required>
      <label for="materialLoginFormEName">Name</label>
      <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - Enter Your Full Name Without Any Special character Ex : Ahmed Mohamed
      </small>

    </div>

    <div class="md-form animated slower fadeInUp delay-4s">
        <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name='mail' required>
        <label for="materialLoginFormEmail">E-Mail</label>
        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - Enter A Valid E-Mail Ex : Ahmed.123@gmail.com
      </small>

    </div>
    <div class="md-form animated slower fadeInUp delay-5s">
        <input id='phone' type="tel" pattern='[0-9]{11}' name='phone' class='form-control' maxlength='11' required>
        <label for="phone">Phone</label>
        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - Enter A Valid Phone Number Ex : 0101110002
      </small>

    </div>
    <div class="md-form animated slower fadeInUp delay-3s">
      <input type="text" id="materialLoginFormNameu" pattern='[a-z].{2,}' name='uni' class="form-control" required>
      <label for="materialLoginFormENameu">University</label>
      <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - Enter Your University Name Without Any Special character Ex : cairo uni..
      </small>

    </div>

    <div class="md-form animated slower fadeInUp delay-3s">
      <input type="text" id="materialLoginFormNamef" pattern='[a-z].{2,}' name='faculty' class="form-control" required>
      <label for="materialLoginFormENamef">Faculty</label>
      <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
       - Enter Your Faculty Name Without Any Special character Ex : Engineering
      </small>

    </div>

    <select name='ac[]' class="browser-default custom-select animated slower fadeInUp delay-5s" style='z-index:1225 !important' required>
      <option value="" disabled selected>Academic Year</option>
      <option value="prep">prep</option>
      <option value="first">first</option>
      <option value="second">second</option>
      <option value="third">third</option>
      <option value="forth">forth</option>
  </select>



    <select name='first[]' class="browser-default custom-select animated slower fadeInUp delay-5s" style='z-index:1225 !important' required>
      <option value="" disabled selected>First Preference</option>
      <option value="Robotics">Robotics</option>
      <option value="Android">Android</option>
      <option value="Embedded">Embedded System</option>
      <option value="Web">Web Development</option>
      <option value="Photoshop">Photoshop</option>
      <option value="Marketing">Marketing</option>
      <option value="Project">Project Management</option>
      <option value="Auto">Advanced Automotive</option>
      <option value="Aerodynamic">Aerodynamic</option>
  </select>


  <select name='second[]' class="browser-default custom-select animated slower fadeInUp delay-5s" style='z-index:1225 !important' required>
  <option value="" disabled selected>Second Preference</option>
  <option value="Robotics">Robotics</option>
      <option value="Android">Android</option>
      <option value="Embedded">Embedded System</option>
      <option value="Web">Web Development</option>
      <option value="Photoshop">Photoshop</option>
      <option value="Marketing">Marketing</option>
      <option value="Project">Project Management</option>
      <option value="Auto">Advanced Automotive</option>
      <option value="Aerodynamic">Aerodynamic</option>
  </select>




    <button name='send' class="btn btn-danger btn-rounded btn-block my-4 waves-effect z-depth-0 animated slower fadeInUp delay-5s" type="submit">Send</button>

  </form>
  <!-- Form -->

</div>

</div>

</div>

</div>


<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mdb.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>