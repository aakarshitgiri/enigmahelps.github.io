<?php include 'header.php' ?>
      <br>

      <h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px; margin:10px; background-color: rgb(255, 203, 155);" >Covid-19 Uttar Pradesh Tracker</h2>
<br>
<div class="container">

<?php include 'up.php'; ?>

<div class="row">
    <div class="col shadow-lg p-3 mb-5 bg-white rounded" style="margin:3px; border:4px solid red; text-align: center;"><a style="font-weight:bold;">Total Confirmed</a>
<br><?php  echo $confirmed  ?><br> <a style="color: red;"> +<?php echo $newconfirmed ?></a> </div>
    <div class="col shadow-lg p-3 mb-5 bg-white rounded" style="margin:3px; border:4px solid green; text-align: center;"><a style="font-weight:bold;">Total Recoverd</a>
<br> <?php  echo $rec ?><br> <a style="color: green;">+<?php echo $newrec ?> </a></div>
    <div class="col shadow-lg p-3 mb-5 bg-white rounded" style="margin:3px; border:4px solid brown; text-align: center;"><a style="font-weight:bold;">Total Active Cases</a>
<br> <?php  echo $act ?> </div>
    <div class="col shadow-lg p-3 mb-5 bg-white rounded" style="margin:3px; border:4px solid grey; text-align: center;"><a style="font-weight:bold;">Total Deaths</a>
<br> <?php  echo $dead ?><br> <a style="color: grey;">+<?php echo $newdead ?></a> </div>
  </div>
   
    <br>
<div class="table-responsive">
    <table class="table table-striped ">
  <thead>
    <tr>
      
      <th scope="col">District</th>
     
      <th scope="col"><a style="color:red; " >Cases</a></th>
      <th scope="col"><a style="color:brown; " >Active</a></th>
      <th scope="col"><a style="color:green; " >Recovered</a></th>
      <th scope="col"><a style="color:grey; " >Death</a></th>
    </tr>
  </thead>
  <tbody>
  <?php

$data = file_get_contents('https://api.covid19india.org/state_district_wise.json');
$coranalive = json_decode($data, true);

?>

      <tr>
  <th>Agra</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Agra']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Agra']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Agra']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Agra']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Agra']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Agra']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Agra']['delta']['deceased']   ?></a></td>
    </tr>
    </tr>
    <tr>
    <th>Aligarh</th>
    <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Aligarh']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Aligarh']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Aligarh']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Aligarh']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Aligarh']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Aligarh']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Aligarh']['delta']['deceased']   ?></a></td></tr>
  <tr>
  <th>Ambedakar Nagar</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['delta']['deceased']   ?></a></td></tr>
  <tr>
  <th>Amethi</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Amethi']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Amethi']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Amethi']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Amethi']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Amethi']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Amethi']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Amethi']['delta']['deceased']   ?></a></td></tr>

  <tr>

  <th>Amroha</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Amroha']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Amroha']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Amroha']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Amroha']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Amroha']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Amroha']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Amroha']['delta']['deceased']   ?></a></td></tr>

  <tr>
  <th>Auraiya</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Auraiya']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Auraiya']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Auraiya']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Auraiya']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Auraiya']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Auraiya']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Auraiya']['delta']['deceased']   ?></a></td></tr>
  <tr>
  <th>Ayodhya</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ayodhya']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ayodhya']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Ayodhya']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ayodhya']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ayodhya']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ayodhya']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ayodhya']['delta']['deceased']   ?></a></td>
    
    </tr>
  <tr>
  <th>Azamgarh</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Azamgarh']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Azamgarh']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Azamgarh']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Azamgarh']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Azamgarh']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Azamgarh']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Azamgarh']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Baghpat</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Baghpat']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Baghpat']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Baghpat']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Baghpat']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Baghpat']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Baghpat']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Baghpat']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Bahraich</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bahraich']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bahraich']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Bahraich']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bahraich']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bahraich']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bahraich']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bahraich']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Ballia</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ballia']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ballia']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Ballia']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ballia']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ballia']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ballia']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ballia']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
      <th>Balrampur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Balrampur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Balrampur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Balrampur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Balrampur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Balrampur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Balrampur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Balrampur']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
      <th>Banda</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Banda']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Banda']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Banda']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Banda']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Banda']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Banda']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Banda']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Barabanki</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Barabanki']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Barabanki']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Barabanki']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Barabanki']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Barabanki']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Barabanki']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Barabanki']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Barelliy</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bareilly']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bareilly']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Bareilly']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bareilly']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bareilly']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bareilly']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bareilly']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Basti</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Basti']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Basti']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Basti']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Basti']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Basti']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Basti']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Basti']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Bhadohi</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bhadohi']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bhadohi']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Bhadohi']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bhadohi']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bhadohi']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bhadohi']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bhadohi']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
 <th>Bijnor</th>
 <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bijnor']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bijnor']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Bijnor']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bijnor']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bijnor']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bijnor']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bijnor']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Budaun</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Budaun']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Budaun']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Budaun']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Budaun']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Budaun']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Budaun']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Budaun']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Bulandsahar</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Chandauli</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Chandauli']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Chandauli']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Chandauli']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Chandauli']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Chandauli']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Chandauli']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Chandauli']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
 <th>Chitrkoot</th>
 <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Deoriya</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Deoria']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Deoria']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Deoria']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Deoria']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Deoria']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Deoria']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Deoria']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Etah</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Etah']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Etah']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Etah']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Etah']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Etah']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Etah']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Etah']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Etawah</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Etawah']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Etawah']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Etawah']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Etawah']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Etawah']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Etawah']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Etawah']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
  <th>Farrukhabad</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['delta']['deceased']   ?></a></td>
    </tr>
  <tr>
 <th>Fatehpur</th>
 <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Fatehpur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Fatehpur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Fatehpur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Fatehpur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Fatehpur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Fatehpur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Fatehpur']['delta']['deceased']   ?></a></td>

    </tr>
  <tr>
  <th>Firozabad</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Firozabad']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Firozabad']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Firozabad']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Firozabad']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Firozabad']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Firozabad']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Firozabad']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Gautam Buddha Nagar</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Ghaziyabad</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Ghazipur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghazipur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghazipur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Ghazipur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghazipur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghazipur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghazipur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Ghazipur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Gonda</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gonda']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gonda']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Gonda']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gonda']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gonda']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gonda']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gonda']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Gorakhpur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Hamirpur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hamirpur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hamirpur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Hamirpur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hamirpur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hamirpur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hamirpur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hamirpur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Hapur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hapur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hapur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Hapur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hapur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hapur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hapur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hapur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Hardoi</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hardoi']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hardoi']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Hardoi']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hardoi']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hardoi']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hardoi']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hardoi']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Hathras</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hathras']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hathras']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Hathras']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hathras']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hathras']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Hathras']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Hathras']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Jalaun</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jalaun']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jalaun']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Jalaun']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jalaun']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jalaun']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jalaun']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jalaun']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Jaunpur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jaunpur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jaunpur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Jaunpur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jaunpur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jaunpur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jaunpur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jaunpur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Jhansi</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jhansi']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jhansi']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Jhansi']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jhansi']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jhansi']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Jhansi']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Jhansi']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Kannauj</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kannauj']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kannauj']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Kannauj']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kannauj']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kannauj']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kannauj']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kannauj']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Kanpur Dehat</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Kanpur Nagar</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['delta']['deceased']   ?></a></td>
      
  <tr>
  <th>Kasganj</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kasganj']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kasganj']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Kasganj']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kasganj']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kasganj']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kasganj']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kasganj']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Kaushambi</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kaushambi']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kaushambi']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Kaushambi']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kaushambi']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kaushambi']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kaushambi']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kaushambi']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Kushinagar</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kushinagar']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kushinagar']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Kushinagar']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kushinagar']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kushinagar']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kushinagar']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kushinagar']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Lakhimpur Kheri</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Lalitpur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lalitpur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lalitpur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Lalitpur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lalitpur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lalitpur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lalitpur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lalitpur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Lucknow</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Maharajganj</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Maharajganj']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Maharajganj']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Maharajganj']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Maharajganj']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Maharajganj']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Maharajganj']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Maharajganj']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Mahoba</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mahoba']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mahoba']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Mahoba']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mahoba']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mahoba']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mahoba']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mahoba']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Mainpuri</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mainpuri']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mainpuri']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Mainpuri']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mainpuri']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mainpuri']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mainpuri']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mainpuri']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Mathura</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mathura']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mathura']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Mathura']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mathura']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mathura']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mathura']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mathura']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Mau</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mau']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mau']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Mau']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mau']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mau']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mau']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mau']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Meerut</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Meerut']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Meerut']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Meerut']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Meerut']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Meerut']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Meerut']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Meerut']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Mirzapur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mirzapur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mirzapur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Mirzapur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mirzapur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mirzapur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Mirzapur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Mirzapur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Moradabad</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Moradabad']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Moradabad']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Moradabad']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Moradabad']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Moradabad']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Moradabad']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Moradabad']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Muzaffarnagar</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Pilibhit</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Pilibhit']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Pilibhit']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Pilibhit']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Pilibhit']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Pilibhit']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Pilibhit']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Pilibhit']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Pratapgarh</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>

  <th>Prayagraj</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>

  <th>Rae Bareli</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Rampur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Rampur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Rampur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Rampur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Rampur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Rampur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Rampur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Rampur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Saharanpur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Saharanpur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Saharanpur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Saharanpur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Saharanpur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Saharanpur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Saharanpur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Saharanpur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Sambhal</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sambhal']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sambhal']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Sambhal']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sambhal']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sambhal']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sambhal']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sambhal']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Sant Kabir Nagar</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Shahjahanpur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Shamli</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shamli']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shamli']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Shamli']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shamli']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shamli']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shamli']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shamli']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Shrawasti</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shrawasti']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shrawasti']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Shrawasti']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shrawasti']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shrawasti']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Shrawasti']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Shrawasti']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Siddharthnagar</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Sitapur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sitapur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sitapur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Sitapur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sitapur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sitapur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sitapur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sitapur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Sonbhadra</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Sultanpur</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sultanpur']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sultanpur']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Sultanpur']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sultanpur']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sultanpur']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Sultanpur']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Sultanpur']['delta']['deceased']   ?></a></td>
      </tr>
  <tr>
  <th>Unnao</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Unnao']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Unnao']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Unnao']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Unnao']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Unnao']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Unnao']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Unnao']['delta']['deceased']   ?></a></td>
      
  </tr> <tr>
  <th>Varanasi</th>
  <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['deceased']   ?></a></td>
      
    </tr>
 




  </tbody>
</table>

</div>



<?php include 'footer.php' ?>