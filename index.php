<?php
/*!

# jsPipe
  HTML, CSS and JavaScript Debugging Web-Applicatio.
  
  [Getting Started](http://jspipe.cxm.tw) [GitHub project](https://github.com/syuemingfang/syuemingfang-jspipe)

****************************************************************************************************/

/*!
+ Version: 0.1.0.0
+ Copyright © 2013 [Syue](mailtot:syuemingfang@gmail.com). All rights reserved.
+ Date: *Tue Aug 06 2013 16:47:48 GMT+0800 (Central Standard Time)*

****************************************************************************************************/
//!
if(!isset($_REQUEST['url'])){
	header('Content-type: text/html');
	$html=isset($_REQUEST['html']) ? $_REQUEST['html'] : '';
	require('main.php');
} else{
	$url=isset($_REQUEST['url']) ? $_REQUEST['url'] : '';
	$jspipe=isset($_REQUEST['jspipe']) ? $_REQUEST['jspipe'] : '';
	$ch=curl_init();
	$options=array(CURLOPT_URL => $url, CURLOPT_HEADER => false, CURLOPT_RETURNTRANSFER => true, CURLOPT_USERAGENT => "Google Bot", CURLOPT_SSL_VERIFYPEER => false, CURLOPT_FOLLOWLOCATION => true);
	curl_setopt_array($ch, $options);
	$html=curl_exec($ch);
	curl_close($ch);
	header('Content-type: text/html');
	require('main.php');
}
?>