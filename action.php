<?php 
if (isset($_POST["send"])) {
	$to = "mikamars@bk.ru";
	$charset = "utf-8";
	$headerss ="Content-type: text/html; charset=$charset\r\n";
	$headerss.="MIME-Version: 1.0\r\n";
	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
	$msg = "Անուն: ".$_POST["name"]."\n";"Հեռախոսահամար: ".$_POST["number"]."\n";$msg .= "Հաղորդագրություն: ".$_POST["msg"]."\n";
	$send = mail($to, $msg, $headerss);
	if ($send) echo '<script>alert("Շնորհակալություն!");</script>';
	header('Location: index.php');
}