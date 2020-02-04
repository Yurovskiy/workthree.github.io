<?php

if ($_POST) {
	$adminemail="tarikpulseup@gmail.com";
	$date=date("d.m.y");
	$time=date("H:i"); 
	$name = htmlspecialchars($_POST["name"]);
	$phone = htmlspecialchars($_POST["phone"]);
	$message = htmlspecialchars($_POST["message"]);
	$json = array();
	
	function mime_header_encode($str, $data_charset, $send_charset) {
		if($data_charset != $send_charset)
		$str=iconv($data_charset,$send_charset.'//IGNORE',$str);
		return ('=?'.$send_charset.'?B?'.base64_encode($str).'?=');
	}
	
	$msg=" 
 		Date: $date
		Time: $time
		Name: $name
		Phone number: $phone 
		Message: $message
	"; 

	mail("$adminemail", "$date $time Message from 
		$name", "$msg");

	$f = fopen("message.txt", "a+"); 
	 
	fwrite($f," \n $date $time Message from: $name"); 
	 
	fwrite($f,"\n $msg "); 
	 
	fwrite($f,"\n ---------------"); 
	 
	fclose($f); 
 
	

	$json['error'] = 0;

	echo json_encode($json);
} else { 
	echo 'GET LOST!';
}

?>