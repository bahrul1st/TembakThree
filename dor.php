<?php
///////////////////////////////////////////
///////CREATED BY BAHRUL1ST CHANNEL////////
//////www.facebook.com/bahrul1st///////
/////https://github.com/bahrul1st//////
///////////////////////////////////////

include 'Arul420.php';

$tri = new tri();
$imei = "868880043302499";
echo "Nimer hape llu Sini Coy : ";
$msisdn = trim(fgets(STDIN));
$otp = $tri->request_otp($msisdn,$imei);
echo $otp[1] . "\r\n";
echo "Noh Anak Buah Gw ngirim OTP Masukin Sini Cepet :v : ";
$otp = trim(fgets(STDIN));
$login = $tri->login($msisdn,$otp);
$login = json_decode($login,true);
$bearer = $login['access_token'];
$id = $tri->trans($bearer);
$id = json_decode($id,true);
$id = $id['data'][0]['rewardTransactionId'];
for($id1 = 1500; $id1 < 1600;$id1++)
{
  $gas = $tri->claim($bearer,$id,$id1);
  echo $gas . "\r\n";
  sleep(2);
}


?>
