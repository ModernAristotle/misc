<?php

$email_array = array("ranjita.sahoo@afixi.com", "rakesh.acharya@afixi.com");
$phone_array = array('7873387489', '9861041647');
if ($_REQUEST['email'] || $_REQUEST['phone']) {
  if (in_array($_REQUEST['email'], $email_array) && in_array($_REQUEST['phone'], $phone_array)) {
    print '1';
  } else if(in_array($_REQUEST['email'], $email_array)){
    print "1";
  }else if(in_array($_REQUEST['phone'], $phone_array)){
    print "1";
  }else{
    print "2";
  }
}
?>

