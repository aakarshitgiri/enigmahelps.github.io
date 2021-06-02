<h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px; margin:10px; background-color: rgb(255, 203, 155);" >Covid-19 India Tracker</h2>     
  
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
<div class="col shadow-lg p-5 mb-5 bg-white rounded" style="margin:3px; border:4px solid red; text-align: center;"><a style="font-weight:bold;">Total Confirmed</a>
<br><?php  echo $totalcases ?><br> <a style="color: red;"> +<?php echo $newtotal ?></a> </div>
<div class="col shadow-lg p-5 mb-5 bg-white rounded" style="margin:3px; border:4px solid green; text-align: center;"><a style="font-weight:bold;">Total Recoverd</a>
<br> <?php  echo $recover ?><br> <a style="color: green;">+<?php echo $newrecover ?> </a></div>

<div class="col shadow-lg p-5 mb-5 bg-white rounded" style="margin:3px; border:4px solid red; text-align: center;"></div>

<div class="col shadow-lg p-5 mb-5 bg-white rounded" style="margin:3px; border:4px solid brown; text-align: center;"><a style="font-weight:bold;">Total Active Cases</a>
<br> <?php  echo $active ?> </div>
<div class="col shadow-lg p-5 mb-5 bg-white rounded" style="margin:3px; border:4px solid grey; text-align: center;"><a style="font-weight:bold;">Total Deaths</a>
<br> <?php  echo $deaths ?><br> <a style="color: grey;">+<?php echo $newdeaths ?></a> </div>
</div>

      <div class="text-center">
        <a href="covid-19-india.php" class="btn-get-started scrollto">Covid-19 India Statewise Tracker</a>
      </div>
   
  <!-- End Counts Section -->





















  <h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px; margin:10px; background-color: rgb(255, 203, 155);" >Covid-19 Uttar Pradesh Tracker</h2>
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
   
     
          <div class="text-center">
            <a href="covid-19-up.php" class="btn-get-started scrollto">Covid-19 Districtwise Tracker</a>
          </div>
          <br>
          <div class="container shadow-lg p-3 mb-5  rounded" style="background-color: ghostwhite;">
<h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px; margin:10px;" >Important Usefull Links</h2>


<p style="text-align:center; color: #124265; font-weight: 1000;   " ><a style="color:brown;" target="_blank" href="Covid-19 National Resources/nationalresources.php">For Covid-19 National Resources Click Here</a></p>
     
      <p style="text-align:center; color: #124265; font-weight: 1000;   " ><a style="color:brown;" target="_blank" href="Details for Assistance during Covid in Lucknow/assistancelucknow.php">Details Assistance During Covid-19 in Lucknow Click Here  </a></p>
    
      <p style="text-align:center; color: #124265; font-weight: 1000;  " ><a style="color:brown;" target="_blank" href="Remdesivir-Distributor-List/remedesivirdistribution.php">To know about the Remedevisir Distribution Click Here</a></p>


</div>
