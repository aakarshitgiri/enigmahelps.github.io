<?php

$data = file_get_contents('https://api.covid19india.org/state_district_wise.json');
$coranalive = json_decode($data, true);


$confirmed=   $coranalive['Uttar Pradesh']['districtData']['Agra']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Aligarh']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Amethi']['confirmed']
+ $coranalive['Uttar Pradesh']['districtData']['Amroha']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Auraiya']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ayodhya']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Azamgarh']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Baghpat']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bahraich']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ballia']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Balrampur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Banda']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Barabanki']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bareilly']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Basti']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bhadohi']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bijnor']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Budaun']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Chandauli']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Deoria']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Etah']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Etawah']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Fatehpur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Firozabad']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ghazipur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Gonda']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Hamirpur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Hapur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Hardoi']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Hathras']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Jalaun']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Jaunpur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Jhansi']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kannauj']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kasganj']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kaushambi']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kushinagar']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Lalitpur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Lucknow']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Maharajganj']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mahoba']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mainpuri']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mathura']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mau']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Meerut']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mirzapur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Moradabad']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Pilibhit']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Prayagraj']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Rampur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Saharanpur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sambhal']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Shamli']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Shrawasti']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sitapur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sultanpur']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Unnao']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Varanasi']['confirmed']

;





$newconfirmed=   $coranalive['Uttar Pradesh']['districtData']['Agra']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Aligarh']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Amethi']['delta']['confirmed']
+ $coranalive['Uttar Pradesh']['districtData']['Amroha']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Auraiya']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ayodhya']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Azamgarh']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Baghpat']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bahraich']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ballia']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Balrampur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Banda']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Barabanki']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bareilly']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Basti']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bhadohi']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bijnor']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Budaun']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Chandauli']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Deoria']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Etah']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Etawah']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Fatehpur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Firozabad']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Ghazipur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Gonda']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Hamirpur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Hapur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Hardoi']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Hathras']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Jalaun']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Jaunpur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Jhansi']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kannauj']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kasganj']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kaushambi']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Kushinagar']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Lalitpur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Maharajganj']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mahoba']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mainpuri']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mathura']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mau']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Meerut']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Mirzapur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Moradabad']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Pilibhit']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Rampur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Saharanpur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sambhal']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Shamli']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Shrawasti']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sitapur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Sultanpur']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Unnao']['delta']['confirmed']
+$coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['confirmed']

;







$rec=   $coranalive['Uttar Pradesh']['districtData']['Agra']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Aligarh']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Amethi']['recovered']
+ $coranalive['Uttar Pradesh']['districtData']['Amroha']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Auraiya']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ayodhya']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Azamgarh']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Baghpat']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bahraich']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ballia']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Balrampur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Banda']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Barabanki']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bareilly']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Basti']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bhadohi']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bijnor']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Budaun']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Chandauli']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Deoria']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Etah']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Etawah']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Fatehpur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Firozabad']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ghazipur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Gonda']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Hamirpur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Hapur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Hardoi']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Hathras']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Jalaun']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Jaunpur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Jhansi']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kannauj']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kasganj']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kaushambi']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kushinagar']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Lalitpur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Lucknow']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Maharajganj']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mahoba']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mainpuri']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mathura']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mau']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Meerut']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mirzapur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Moradabad']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Pilibhit']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Prayagraj']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Rampur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Saharanpur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sambhal']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Shamli']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Shrawasti']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sitapur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sultanpur']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Unnao']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Varanasi']['recovered']

;

$newrec=  $coranalive['Uttar Pradesh']['districtData']['Agra']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Aligarh']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Amethi']['delta']['recovered']
+ $coranalive['Uttar Pradesh']['districtData']['Amroha']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Auraiya']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ayodhya']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Azamgarh']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Baghpat']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bahraich']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ballia']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Balrampur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Banda']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Barabanki']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bareilly']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Basti']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bhadohi']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bijnor']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Budaun']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Chandauli']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Deoria']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Etah']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Etawah']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Fatehpur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Firozabad']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Ghazipur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Gonda']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Hamirpur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Hapur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Hardoi']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Hathras']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Jalaun']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Jaunpur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Jhansi']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kannauj']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kasganj']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kaushambi']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Kushinagar']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Lalitpur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Maharajganj']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mahoba']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mainpuri']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mathura']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mau']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Meerut']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Mirzapur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Moradabad']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Pilibhit']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Rampur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Saharanpur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sambhal']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Shamli']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Shrawasti']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sitapur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Sultanpur']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Unnao']['delta']['recovered']
+$coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['recovered']

;





$act=  $coranalive['Uttar Pradesh']['districtData']['Agra']['active']
+$coranalive['Uttar Pradesh']['districtData']['Aligarh']['active']
+$coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['active']
+$coranalive['Uttar Pradesh']['districtData']['Amethi']['active']
+ $coranalive['Uttar Pradesh']['districtData']['Amroha']['active']
+$coranalive['Uttar Pradesh']['districtData']['Auraiya']['active']
+$coranalive['Uttar Pradesh']['districtData']['Ayodhya']['active']
+$coranalive['Uttar Pradesh']['districtData']['Azamgarh']['active']
+$coranalive['Uttar Pradesh']['districtData']['Baghpat']['active']
+$coranalive['Uttar Pradesh']['districtData']['Bahraich']['active']
+$coranalive['Uttar Pradesh']['districtData']['Ballia']['active']
+$coranalive['Uttar Pradesh']['districtData']['Balrampur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Banda']['active']
+$coranalive['Uttar Pradesh']['districtData']['Barabanki']['active']
+$coranalive['Uttar Pradesh']['districtData']['Bareilly']['active']
+$coranalive['Uttar Pradesh']['districtData']['Basti']['active']
+$coranalive['Uttar Pradesh']['districtData']['Bhadohi']['active']
+$coranalive['Uttar Pradesh']['districtData']['Bijnor']['active']
+$coranalive['Uttar Pradesh']['districtData']['Budaun']['active']
+$coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['active']
+$coranalive['Uttar Pradesh']['districtData']['Chandauli']['active']
+$coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['active']
+$coranalive['Uttar Pradesh']['districtData']['Deoria']['active']
+$coranalive['Uttar Pradesh']['districtData']['Etah']['active']
+$coranalive['Uttar Pradesh']['districtData']['Etawah']['active']
+$coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['active']
+$coranalive['Uttar Pradesh']['districtData']['Fatehpur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Firozabad']['active']
+$coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['active']
+$coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['active']
+$coranalive['Uttar Pradesh']['districtData']['Ghazipur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Gonda']['active']
+$coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Hamirpur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Hapur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Hardoi']['active']
+$coranalive['Uttar Pradesh']['districtData']['Hathras']['active']
+$coranalive['Uttar Pradesh']['districtData']['Jalaun']['active']
+$coranalive['Uttar Pradesh']['districtData']['Jaunpur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Jhansi']['active']
+$coranalive['Uttar Pradesh']['districtData']['Kannauj']['active']
+$coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['active']
+$coranalive['Uttar Pradesh']['districtData']['Kasganj']['active']
+$coranalive['Uttar Pradesh']['districtData']['Kaushambi']['active']
+$coranalive['Uttar Pradesh']['districtData']['Kushinagar']['active']
+$coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['active']
+$coranalive['Uttar Pradesh']['districtData']['Lalitpur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Lucknow']['active']
+$coranalive['Uttar Pradesh']['districtData']['Maharajganj']['active']
+$coranalive['Uttar Pradesh']['districtData']['Mahoba']['active']
+$coranalive['Uttar Pradesh']['districtData']['Mainpuri']['active']
+$coranalive['Uttar Pradesh']['districtData']['Mathura']['active']
+$coranalive['Uttar Pradesh']['districtData']['Mau']['active']
+$coranalive['Uttar Pradesh']['districtData']['Meerut']['active']
+$coranalive['Uttar Pradesh']['districtData']['Mirzapur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Moradabad']['active']
+$coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['active']
+$coranalive['Uttar Pradesh']['districtData']['Pilibhit']['active']
+$coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['active']
+$coranalive['Uttar Pradesh']['districtData']['Prayagraj']['active']
+$coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['active']
+$coranalive['Uttar Pradesh']['districtData']['Rampur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Saharanpur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Sambhal']['active']
+$coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['active']
+$coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Shamli']['active']
+$coranalive['Uttar Pradesh']['districtData']['Shrawasti']['active']
+$coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['active']
+$coranalive['Uttar Pradesh']['districtData']['Sitapur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['active']
+$coranalive['Uttar Pradesh']['districtData']['Sultanpur']['active']
+$coranalive['Uttar Pradesh']['districtData']['Unnao']['active']
+$coranalive['Uttar Pradesh']['districtData']['Varanasi']['active']

;

$dead=   $coranalive['Uttar Pradesh']['districtData']['Agra']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Aligarh']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Amethi']['deceased']
+ $coranalive['Uttar Pradesh']['districtData']['Amroha']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Auraiya']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ayodhya']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Azamgarh']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Baghpat']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bahraich']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ballia']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Balrampur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Banda']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Barabanki']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bareilly']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Basti']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bhadohi']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bijnor']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Budaun']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Chandauli']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Deoria']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Etah']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Etawah']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Fatehpur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Firozabad']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ghazipur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Gonda']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Hamirpur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Hapur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Hardoi']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Hathras']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Jalaun']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Jaunpur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Jhansi']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kannauj']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kasganj']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kaushambi']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kushinagar']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Lalitpur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Lucknow']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Maharajganj']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mahoba']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mainpuri']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mathura']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mau']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Meerut']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mirzapur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Moradabad']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Pilibhit']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Prayagraj']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Rampur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Saharanpur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sambhal']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Shamli']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Shrawasti']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sitapur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sultanpur']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Unnao']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Varanasi']['deceased']

;
$newdead=  $coranalive['Uttar Pradesh']['districtData']['Agra']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Aligarh']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ambedkar Nagar']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Amethi']['delta']['deceased']
+ $coranalive['Uttar Pradesh']['districtData']['Amroha']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Auraiya']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ayodhya']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Azamgarh']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Baghpat']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bahraich']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ballia']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Balrampur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Banda']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Barabanki']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bareilly']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Basti']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bhadohi']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bijnor']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Budaun']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Bulandshahr']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Chandauli']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Chitrakoot']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Deoria']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Etah']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Etawah']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Farrukhabad']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Fatehpur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Firozabad']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Gautam Buddha Nagar']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ghaziabad']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Ghazipur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Gonda']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Gorakhpur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Hamirpur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Hapur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Hardoi']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Hathras']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Jalaun']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Jaunpur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Jhansi']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kannauj']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kanpur Dehat']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kasganj']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kaushambi']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Kushinagar']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Lakhimpur Kheri']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Lalitpur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Lucknow']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Maharajganj']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mahoba']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mainpuri']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mathura']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mau']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Meerut']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Mirzapur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Moradabad']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Muzaffarnagar']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Pilibhit']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Pratapgarh']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Prayagraj']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Rae Bareli']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Rampur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Saharanpur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sambhal']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sant Kabir Nagar']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Shahjahanpur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Shamli']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Shrawasti']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Siddharthnagar']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sitapur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sonbhadra']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Sultanpur']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Unnao']['delta']['deceased']
+$coranalive['Uttar Pradesh']['districtData']['Varanasi']['delta']['deceased']

;






?>