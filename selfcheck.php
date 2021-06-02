<?php include 'header.php' ?>


<br>
<div class="text-center"  style="margin:5px;">
<h1 style="font-size:2em;">Currently Not Working, Visit After Some Time </h1>
<h1 style="font-size:1.5em; background-color: antiquewhite;">Covid-19 Self Assessment Test</h1>
</div>
<br>
<div class="container shadow-lg p-3 mb-5  rounded" style="background-color: ghostwhite;">

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active invisible" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  invisible" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  invisible" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  invisible" id="pills-new-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-new" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <h1 style="font-size:1em; ">Enter Your Personal Information</h1>
  <form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Fullname">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Age">
    </div>
  </div>

<br>


  <div class="form-row">
  
    <div class="col">
      <input type="text" class="form-control" placeholder="Contact">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Location">
    </div>
  </div>

<br>
<div class="text-center"  style="margin:5px;">
<a class="btn btn-info" style="padding-left:75px; padding-right:75px;" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Next</a>
          </div> 
          </form>

</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="container">
  <h1 style="font-size:1em; ">Do You Have Any Of The Following Symptoms ?</h1>
  <div class="row">
  <form>
    <div class="col">
  

<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label style="font-size: 1em;" class="custom-control-label" for="customCheck1">Fever</label>
</div><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Dry Cough</label>
</div><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Tiredness</label>
</div><div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Sore Throat</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label style="font-size: 1em;" class="custom-control-label" for="customCheck1">Loss of Speech or Movement</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label style="font-size: 1em;" class="custom-control-label" for="customCheck1">None Of The Above</label>
</div>

    </div>
    <div class="col">

    <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Loss of Taste or Smell</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Conjunctivitis</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Difficulty Breathing or Shortness of Breath</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Chest Pain or Pressure</label>
</div>

<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label style="font-size: 1em;" class="custom-control-label" for="customCheck1">Aches and Pains</label>
</div>

</div>
</div>
<br>

<div class="text-center"  style="margin:5px;">
<a class="btn btn-info" style="padding-left:75px; padding-right:75px;" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Next</a>
          </div> 
          </form>  
  </div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <h1 style="font-size:1em; ">Have You Ever Had Any Of The Following ?</h1>
  <form>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label style="font-size: 1em;" class="custom-control-label" for="customCheck1">Diabetes</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Hypertention</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Lung Disease</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Heart Disease</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label style="font-size: 1em;" class="custom-control-label" for="customCheck1">Kidney Disease</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label style="font-size: 1em;" class="custom-control-label" for="customCheck1">None Of The Above</label>
</div>
<br>
<div class="text-center"  style="margin:5px;">
<a class="btn btn-info" style="padding-left:75px; padding-right:75px;" id="pills-new-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-new" aria-selected="false">Next</a>
          </div>
          </form>
  </div>
  <div class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-new-tab">
  <h1 style="font-size:1em; ">Have You Ever Had Any Of The Following ?</h1>
  <form>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label style="font-size: 1em;" class="custom-control-label" for="customCheck1">Travelled Internationally From Last 30 Days</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">Have Interacted Or Lived Along With THe Covid Patients</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">I am healthcare Worker</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label  style="font-size: 1em;" class="custom-control-label" for="customCheck1">None Of The Above</label>
</div>
<br>
<div class="text-center"  style="margin:5px;">
<button type="button" style="padding-left:75px; padding-right:75px;" class="btn btn-primary">Submit</button>
</div>
</form>

  </div>
</div>
</section>

<?php include 'footer.php' ?>










