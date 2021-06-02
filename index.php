<?php include 'header.php' ?>
<br>
<div class="container" >
<a href="joinus.php#v"><img  src="assets/img/ps-1.png" class="img-fluid" alt="..."></a>

</div>

   
      <br>
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



      <div class="container">
  <div class="row">
    <div class="col" >
    <div class="container shadow p-3 mb-5 bg-white rounded" >
    <h2 style="text-align:center; color: #124265; font-weight: 700; font-size: 20px; margin:10px; background-color: rgb(255, 203, 155);" >Covid-19 India Tracker</h2>
  <div class="row" style="text-align:center;">
    <div class="col" style="margin:3px; border-radius:15px;  background-color:#ff9287; border:4px solid red; text-align: center;"><a style="font-weight:bold;">Total Confirmed</a>
<br><?php  echo $totalcases ?><br> <a style="color: red;"> +<?php echo $newtotal ?></a></div>
    <div class="col" style="margin:3px; border-radius:15px; background-color:#90EE90; border:4px solid green; text-align: center;"><a style="font-weight:bold;">Total Recovered</a>
<br> <?php  echo $recover ?><br> <a style="color: green;">+<?php echo $newrecover ?> </a></div>
    <div class="w-100"></div>
    <div class="col" style="margin:3px; background-color:#f8674f; border-radius:15px; border:4px solid brown; text-align: center;"><a style="font-weight:bold;">Total Active Cases</a>
<br> <?php  echo $active ?> </div>
    <div class="col" style="margin:3px;  background-color:#f0f0e4; border-radius:15px; border:4px solid grey; text-align: center;"><a style="font-weight:bold;">Total Deaths</a>
<br> <?php  echo $deaths ?><br> <a style="color: grey;">+<?php echo $newdeaths ?></a></div>
  </div>
  <div class="text-center" style="margin:5px;">
            <a href="covid-19-india.php" class="btn btn-primary">Covid-19 India Statewise Tracker</a>
          </div> 
</div>
    

    
    
    
   </div>

    <div class="col">
    <?php include 'up.php'; ?>
    <div class="container shadow p-3 mb-5 bg-white rounded" >
    <h2 style="text-align:center; color: #124265; font-weight: 700; font-size: 20px; margin:10px; background-color: rgb(255, 203, 155);" >Covid-19 UP Tracker</h2>
  <div class="row" style="text-align:center;">
    <div class="col" style="margin:3px; background-color:#ff9287; border-radius:15px; border:4px solid red; text-align: center;"><a style="font-weight:bold;">Total Confirmed</a>
<br><?php  echo $confirmed  ?><br> <a style="color: red;"> +<?php echo $newconfirmed ?></a></div>
    <div class="col" style="margin:3px; background-color:#90EE90; border-radius:15px; border:4px solid green; text-align: center;"><a style="font-weight:bold;">Total Recovered</a>
<br> <?php  echo $rec ?><br> <a style="color: green;">+<?php echo $newrec ?> </a></div>
    <div class="w-100"></div>
    <div class="col" style="margin:3px;  background-color:#f8674f; border-radius:15px; border:4px solid brown; text-align: center;"><a style="font-weight:bold;">Total Active Cases</a>
<br> <?php  echo $act ?></div>
    <div class="col" style="margin:3px;  background-color:#f0f0e4; border-radius:15px; border:4px solid grey; text-align: center;"><a style="font-weight:bold;">Total Deaths</a>
<br> <?php  echo $dead ?><br> <a style="color: grey;">+<?php echo $newdead ?></a></div>
  </div>
  <div class="text-center"  style="margin:5px;">
            <a href="covid-19-up.php" class="btn btn-primary">Covid-19 Districtwise Tracker</a>
          </div> 
    
</div>
    
  </div>
   
        
          <br>


          <div class="container">
  <div class="row">
    <div class="col-sm" style="text-align:center;">
    <h2 style="text-align:center; color: #124265; font-weight: 700; font-size: 20px; margin:10px; background-color: rgb(255, 203, 155);" >Important Links</h2>
    <div class="text-center"  style="margin:5px;">
            <a href="hospital.php" class="btn btn-primary">Citywise Hospitals/Beds Available  </a>
          </div> 
          <div class="text-center"  style="margin:5px;">
            <a href="oxygen.php" class="btn btn-primary">Citywise Oxygen Refilling Center</a>
          </div> 
          <div class="text-center"  style="margin:5px;">
            <a href="medicine.php" class="btn btn-primary" style="padding-left:32px; padding-right:32px;">Searching For a Medicine ? </a>
          </div> 
        
          <div class="text-center"  style="margin:5px;">
            <a href="plasama.php" class="btn btn-primary" style="padding-left:30px; padding-right:30px;">Want To Donate a Plasma </a>
          </div> 
          <div class="text-center"  style="margin:5px;">
            <a href="plasama.php#b" class="btn btn-primary" style="padding-left:75px; padding-right:75px;">Need A Plasma</a>
          </div> 
          <div class="text-center"  style="margin:5px;">
            <a href="blog/index.php" class="btn btn-primary"style="padding-left:58px; padding-right:58px;">Resources Covid-19 </a>
          </div> 
          <div class="text-center"  style="margin:5px;">
            <a href="https://www.cowin.gov.in/home" class="btn btn-primary" style="padding-left:55px; padding-right:55px;">Vaccine Registration</a>
          </div> 
         
    </div>
    <div class="col-sm" style="text-align:center;">
    <h2 style="text-align:center; color: #DC143C; font-weight: 700; font-size: 20px; margin:10px; background-color: black;" >UP in DANGER</h2>
    <div class="table-responsive">
   
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">City</th>
      <th scope="col" style="color:red;">Cases</th>
      <th scope="col"  style="color:brown;">Active</th>
      <th scope="col"  style="color:green;">Recovered</th>
      <th scope="col"  style="color:grey;">Deaths</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Lucknow</th>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['deceased']   ?></a></td>
    </tr>
    <tr>
      <th scope="row">Prayagraj</th>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['deceased']   ?></a></td>
    </tr>
    <tr>
      <th scope="row">Varanasi</th>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['deceased']   ?></a></td>
      
    </tr>
    <tr>
      <th scope="row">Kanpur Nagar</th>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['confirmed'] ?><br>
      <a style="color:red; " >  +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['delta']['confirmed']     ?></a></td>
      <td> <?php echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['active'] ?></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['recovered']?><br>
      <a style="color:green; " > +<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['delta']['recovered']     ?></a></td>
      <td> <?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['deceased'] ?><br>
      <a style="color:grey; " >+<?php  echo $coranalive['Uttar Pradesh']['districtData']['Kanpur Nagar']['delta']['deceased']   ?></a></td>
      
    </tr>
   
  </tbody>
</table>
</div>
    </div>
    <div class="col-sm" style="text-align:center;">
    <h2 style="text-align:center; color: #124265; font-weight: 700; font-size: 20px; margin:10px; background-color: rgb(255, 203, 155);" >Other Links</h2>
    <div class="text-center"  style="margin:5px;">
            <a href="Covid-19 National Resources/nationalresources.php" class="btn btn-primary" >Covid-19 National Resources </a>
          </div> 
          <div class="text-center"  style="margin:5px;">
            <a href="Details for Assistance during Covid in Lucknow/assistancelucknow.php" class="btn btn-primary" style="padding-left:35px; padding-right:35px;">Assistance in Lucknow</a>
          </div> 
          <div class="text-center"  style="margin:5px;">
            <a href="Remdesivir-Distributor-List/remedesivirdistribution.php" class="btn btn-primary" style="padding-left:27px; padding-right:27px;">Remdesivir Distribution </a>
          </div> 
           
          <div class="text-center"  style="margin:5px;">
            <a href="joinus.php#v" class="btn btn-primary" style="padding-left:55px; padding-right:55px;">Join Us - Doctors</a>
          </div> 
          
          <div class="text-center"  style="margin:5px;">
            <a href="covidrecovered.php" class="btn btn-primary"style="padding-left:20px; padding-right:20px;">Recovered From Covid-19?</a>
          </div> 
          
         
          <div class="text-center"  style="margin:5px;">
            <a href="selfcheck.php" class="btn btn-primary" style="padding-left:35px; padding-right:35px;">Self Check for Covid-19 </a>
          </div>
    </div>
  </div>
</div>
<br>
<div class="container" >
<a href="joinus.php#cta"><img  src="assets/img/ps-2.png" class="img-fluid" alt="..."></a>

</div>
  <br>
 
  
  
   
  <main id="main">

  <section >
     
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2> About Corona Virus( Covid-19 )</h2>
        
        </div>
        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/abc.png" class="img-fluid" alt="">
           
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <br>
            <h3>What is COVID-19 (corona-virus)</h3>
            <br>
           <p>First of all it's compulsory to know that what is the full form of COVID-19. basically, COVID-19 means 'CO' stands for corona, 'VI' for virus, and 'D' for disease. Formally, this disease was referred to as '2019 novel coronavirus' or '2019-nCoV.covid is the vary influencing virus. It is highly unlikely that people can contract COVID-19 from food or food packaging.
<br>
Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</p>
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->
   

    <!-- ======= About Video Section ======= -->
    <section id="precautions" class="about-video">
     
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2> Corona Virus (Covid-19) Precautions</h2>
        
        </div>
        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/corona.png" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=rAj38E7vrS8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>The best way to prevent yourself from Corona Virus: Stay Home Stay Safe </h3>
            
            <ul>
              <li><i class="bx bx-check-double"></i> Always wear a Mask and Face Shield.</li>
              <li><i class="bx bx-check-double"></i>Avoid public gatherings.</li>
              <li><i class="bx bx-check-double"></i> Use Hand Sanetizer</li>
              <li><i class="bx bx-check-double"></i> Wash your hands properly</li>
              <li><i class="bx bx-check-double"></i> Do not Sneeze in Public</li>
              <li><i class="bx bx-check-double"></i>Don’t touch your eyes, nose or mouth.</li>
              <li><i class="bx bx-check-double"></i> Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
              <li><i class="bx bx-check-double"></i> If you have a fever, cough and difficulty breathing, seek medical attention.</li>
            </ul>
            <p>
              Calling in advance allows your healthcare provider to quickly direct you to the right health facility. This protects you, and prevents the spread of viruses and other infections.
            </p>
            <p>Masks can help prevent the spread of the virus from the person wearing the mask to others. Masks alone do not protect against COVID-19, and should be combined with physical distancing and hand hygiene. Follow the advice provided by your local health authority.</p>
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->

    <!-- ======= Clients Section ======= -->
    <section >
     
     <div class="container" data-aos="fade-up">
       <div class="section-title">
         <h2> New-Varient Of Corona Virus( Covid-19 )</h2>
       
       </div>
       <div class="row">

         <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
           <img src="assets/img/school.gif" class="img-fluid" alt="">
          
         </div>

         <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
         
           <h3>New COVID-19 Variants</h3>
        
         
           <p>Information about the characteristics of these variants is rapidly emerging. Scientists are working to learn more about how easily they might spread, whether they could cause more severe illness, and whether currently authorized vaccines will protect people against them. Currently, there is no evidence that these variants cause more severe illness or increased risk of death</p>
       
         <h4>What we do not know</h4>
        
         <ul>
              <li><i class="bx bx-check-double"></i> How widely these new variants have spread.</li>
              <li><i class="bx bx-check-double"></i>How the new variants differ.</li>
              <li><i class="bx bx-check-double"></i> How the disease caused by these new variants differs from the disease caused by other variants that are currently circulating.</li>
  
            </ul>

            <p><a href="https://timesofindia.indiatimes.com/world/us/moderna-says-its-covid-19-vaccine-demonstrates-neutralising-impact-on-new-variants/articleshow/80462149.cms">To Know More Click Here</a></p>
          </div>

       </div>

     </div>
   </section><!-- End About Video Section -->
   <br>
   <div class="container" data-aos="fade-up">
       
        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/u-1.png" class="img-fluid" alt="">
           
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
          <img src="assets/img/u-2.png" class="img-fluid" alt="">
           
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->
    <br><br>
   
    


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
         
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">How does the virus spread? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                COVID-19 is thought to spread mainly through close contact from person to person, including between people who are physically near each other (within about 6 feet). People who are infected but do not show symptoms can also spread the virus to others. Cases of reinfection with COVID-19  have been reported but are rare. We are still learning about how the virus spreads and the severity of illness it causes.<br>

COVID-19 spreads very easily from person to person. How easily a virus spreads from person to person can vary. The virus that causes COVID-19 appears to spread more efficiently than influenza but not as efficiently as measles, which is among the most contagious viruses known to affect people.<br>

For more information about how COVID-19 spreads, visit the How COVID-19 Spreads page to learn how COVID-19 spreads and how to protect yourself. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">What is community spread? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                Community spread means people have been infected with the virus in an area, including some who are not sure how or where they became infected. Each health department determines community spread differently based on local conditions. For information on community spread in your area, please visit your local health department’s website.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Is it safe to get care of my other medical condition during this time ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  <ul>
                <li>Continue taking care of your health and wellness</li>
                <li>Continue your medications, and do not change your treatment plan without talking to your healthcare provider.</li>
                <li>Continue to manage your disease the way your healthcare provider has told you.</li>
                <li>Have at least a 2-week supply of all prescription and non-prescription medications.</li>
                <li>Talk to your healthcare provider about whether your vaccinations and other preventative services are up to date.</li>
                <li>Call your healthcare provider<br>
if you have any concerns about your medical conditions, or if you get sick.<br>
to find out about different ways you can connect with your healthcare provider for chronic disease management or other conditions.<br>
If you must visit in-person, protect yourself and others.</li>
<li>Do not delay getting emergency care for your health problems or any underlying medical condition that requires immediate attention.<br>
If you need emergency help, call 911.<br>
Emergency departments have infection prevention plans to protect you from getting COVID-19 if you need care for your medical condition.</li>
<li>Continue to practice everyday prevention. Wash your hands often, avoid close contact, wear a mask, cover coughs and sneezes, and clean and disinfect frequently touched surfaces often.</li>
<li>When picking up medicines, use drive-thru windows, curbside services (prescriptions brought to you in your car), mail-order, or other delivery services.</li><br>
For more information, see Groups at Higher Risk for Severe Illness.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Is it ok for me to donate blood? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                In healthcare settings across the United States, donated blood is a lifesaving, essential part of caring for patients. The need for donated blood is constant, and blood centers are open and in urgent need of donations. CDC encourages people who are well to continue to donate blood if they are able, even if they are practicing social distancing because of COVID-19. CDC is supporting blood centers by providing recommendations that will keep donors and staff safe. Examples of these recommendations include spacing donor chairs 6 feet apart, thoroughly adhering to environmental cleaning practices, and encouraging donors to make donation appointments ahead of time.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Am I at risk for Covid-19 from mail, packages, or products?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                Coronaviruses are thought to be spread most often by respiratory droplets. Although the virus can survive for a short period on some surfaces, it is unlikely to be spread from domestic or international mail, products, or packaging. However, it may be possible that people can get COVID-19 by touching a surface or object that has the virus on it and then touching their own mouth, nose, or possibly their eyes, but this is not thought to be the main way the virus spreads.
<br>
Learn more about safe handling of deliveries and mail.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->



  </main><!-- End #main -->
  <br>
  <br>
 </div>
  <!-- ======= Footer ======= -->
  <?php include 'footer.php' ?>