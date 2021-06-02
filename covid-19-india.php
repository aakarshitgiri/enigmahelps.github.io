<!DOCTYPE html>
<?php include 'header.php' ?>
      <br>

      <h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px; margin:10px; background-color: rgb(255, 203, 155);" >Covid-19 India Tracker</h2>
<br>
<div class="container">
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

$i=1;
$totalcases=0;
$newtotal=0;
$recover=0;
$newrecover=0;
$active=0;
$deaths=0;
$newdeaths=0;
while($i < $statescount){

  $totalcases +=$coranalive['statewise'][$i]['confirmed'];
$newtotal +=$coranalive['statewise'][$i]['deltaconfirmed'];
$recover +=$coranalive['statewise'][$i]['recovered'];
$newrecover +=$coranalive['statewise'][$i]['deltarecovered'];
$active += $coranalive['statewise'][$i]['active'];
$deaths += $coranalive['statewise'][$i]['deaths'];
$newdeaths += $coranalive['statewise'][$i]['deltadeaths'];

  $i++;
}


?>


  <div class="row">
    <div class="col shadow-lg p-3 mb-5 bg-white rounded" style="margin:3px; border:4px solid red; text-align: center;"><a style="font-weight:bold;">Total Confirmed</a>
<br><?php  echo $totalcases ?><br> <a style="color: red;"> +<?php echo $newtotal ?></a> </div>
    <div class="col shadow-lg p-3 mb-5 bg-white rounded" style="margin:3px; border:4px solid green; text-align: center;"><a style="font-weight:bold;">Total Recoverd</a>
<br> <?php  echo $recover ?><br> <a style="color: green;">+<?php echo $newrecover ?> </a></div>
    <div class="col shadow-lg p-3 mb-5 bg-white rounded" style="margin:3px; border:4px solid brown; text-align: center;"><a style="font-weight:bold;">Total Active Cases</a>
<br> <?php  echo $active ?> </div>
    <div class="col shadow-lg p-3 mb-5 bg-white rounded" style="margin:3px; border:4px solid grey; text-align: center;"><a style="font-weight:bold;">Total Deaths</a>
<br> <?php  echo $deaths ?><br> <a style="color: grey;">+<?php echo $newdeaths ?></a> </div>
  </div>
   
    <br>
<div class="table-responsive">
    <table class="table table-striped ">
  <thead>
    <tr>
      
      <th scope="col">State/UT</th>
      <th scope="col">Last Updated</th>
      <th scope="col"><a style="color:red; " >Cases</a></th>
      <th scope="col"><a style="color:brown; " >Active</a></th>
      <th scope="col"><a style="color:green; " >Recovered</a></th>
      <th scope="col"><a style="color:grey; " >Death</a></th>
    </tr>
  </thead>
  <tbody>
  
    
    <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

$i=1;
$total=0;
while($i < $statescount){
?>
 
 <tr>
      <th scope="row"> <?php echo $coranalive['statewise'][$i]['state'] ?></th>
      <th scope="row"> <?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></th>
      <td> <?php  echo $coranalive['statewise'][$i]['confirmed'] ?><br>
      <a style="color:red; " >  +<?php   echo $coranalive['statewise'][$i]['deltaconfirmed']      ?></a></td>
      <td> <?php echo $coranalive['statewise'][$i]['active'] ?></td>
      <td> <?php  echo $coranalive['statewise'][$i]['recovered'] ?><br>
      <a style="color:green; " > +<?php  echo $coranalive['statewise'][$i]['deltarecovered']      ?></a></td>
      <td> <?php  echo $coranalive['statewise'][$i]['deaths'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['statewise'][$i]['deltadeaths']      ?></a></td>
    </tr>


<?php
$total +=$coranalive['statewise'][$i]['confirmed'];
  $i++;
}


?>

  </tbody>
</table>

</div>

<?php include 'footer.php' ?>