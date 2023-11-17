<?php
include('config/lang.php');

$_form_data = $_POST['formdata'];
$jsonData = json_decode($_form_data);

$_name = $jsonData->name;
$_email = $jsonData->email;
$_phone = $jsonData->phone;
$_reqtype = $jsonData->reqtype;
$_msg = $jsonData->cmsg;

$_canProceed = 1;
$_err_list = array(
  'name' => '',
  'email' => '',
  'phone' => '',
  'reqtype' => '',
  'msg' => ''
);

if($_name == ''){
  $_canProceed = 0;
  $_err_list['name'] = $_name.' - E - .nmo-cform .input-wrap.name .err';
} else if(!containsOnlyCharactersAndSpaces($_name)){
  $_canProceed = 0;
  $_err_list['name'] = $_name.' - W - .nmo-cform .input-wrap.name .err';
}

if($_email == ''){
  $_canProceed = 0;
  $_err_list['email'] = $_email.' - E - .nmo-cform .input-wrap.email .err';
} else if(!validateEmail($_email)){
  $_canProceed = 0;
  $_err_list['email'] = $_email.' - W - .nmo-cform .input-wrap.email .err';
}

if($_phone == ''){
  $_canProceed = 0;
  $_err_list['phone'] = $_phone.' - E - .nmo-cform .input-wrap.phone .err';
} else if(!validatePhoneNumber($_phone)){
  $_canProceed = 0;
  $_err_list['phone'] = $_phone.' - W - .nmo-cform .input-wrap.phone .err';
}

if($_reqtype == ''){
  $_canProceed = 0;
  $_err_list['reqtype'] = $_reqtype.' - E - .nmo-cform .input-wrap.request .err';
} else if(!containsOnlyCharactersAndSpaces($_reqtype)){
  $_canProceed = 0;
  $_err_list['reqtype'] = $_reqtype.' - W - .nmo-cform .input-wrap.request .err';
}

if(!containsOnlyCharactersAndSpaces($_msg)){
  $_canProceed = 0;
  $_err_list['msg'] = $_msg.' - W - .nmo-cform .input-wrap.message .err';
}

if($_canProceed){
  

  //print_r($jsonData);

  $_name = $jsonData->name;
  $_email = $jsonData->email;
  $_phone = $jsonData->phone;
  $_reqtype = $jsonData->reqtype;
  $_msg = $jsonData->cmsg;


  // Mailgun API key and domain
  $mailgunApiKey = 'c351251b0d3fc67627794f1be25db756-db137ccd-0718b11c';
  $mailgunDomain = 'mail.itp17.com';


  $api_Key = 'd5f3bcb898960eaedc685034778b4c03-db137ccd-71e63f5b';
  $domain = 'mail.rbprojects.me';

  $url = 'https://api.mailgun.net/v3/' . $domain . '/messages';

  $to = 'ali.aladdine@gmail.com';
  $from = 'ali@nimdigital.me';
  $subject = 'Contact From Submission';
  $message = '<strong>Name:</strong> '.$_name.'<br>
              <strong>Phone:</strong> '.$_phone.'<br>
              <strong>Email:</strong> '.$_email.'<br>
              <strong>Request Type:</strong> '.$_reqtype.'<br>
              <strong>Message:</strong><br>'.$_msg.'<br>';

  $api_Key = 'key-b7c73742079213cd16036d48b54367bc';
  $domain = 'mail.rbprojects.me';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, 'api:'.$api_Key);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $plain = strip_tags(nl2br($message));
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/'.$domain.
      '/messages');
  curl_setopt($ch, CURLOPT_POSTFIELDS,

      array('from' => $from,
          'to' => $to,
          'subject' => $subject,
          'html' => $message));

  $j = json_decode(curl_exec($ch));
  $info = curl_getinfo($ch);
  
  //print_r($info);

  curl_close($ch);

  $_resp_arr = array('status' => 1);
} else {
  $_resp_arr = array('status' => 0, 'message' => $_strings['contact'][$_lang]['generic_err'], 'error_list' => $_err_list);
  //'inidata' => $jsonData
}


$jsonData = json_encode($_resp_arr);
print_r($jsonData);


function containsOnlyCharactersAndSpaces($inputString) {
  // Use a regular expression to match only characters and spaces
  // ^ asserts the start of the string
  // [A-Za-z ]+ matches one or more characters (A-Z, a-z) or spaces
  // $ asserts the end of the string
  return preg_match('/^[A-Za-z ]+$/', $inputString) === 1;
}

function validatePhoneNumber($phoneNumber) {
  // Define a regex pattern for a phone number with a country code
  $pattern = '/^\d+$/';

  // Use preg_match to test if the phone number matches the pattern
  if (preg_match($pattern, $phoneNumber)) {
      return true; // Valid phone number with country code
  } else {
      return false; // Invalid phone number
  }
}

function validateEmail($email) {
  // Use the regex pattern to validate the email address
  return preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email) === 1;
}
?>