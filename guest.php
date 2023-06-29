<?php
if (isset($_SESSION["email"])) {
    session_destroy();
}
session_start();
$name="Guest";
$email="user@user.com";
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
// './account.php?q='.$GET['q']
// get current url of header 
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $url;
$modify= substr($url,31);
$url='location:account.php?'.$modify;
// echo '<BR> '.$modify;
header($url);

?>


<?php
// wait for 10 seconds to redirect to home page IF THE PAGE IS BLANK 
// 404 page redirect to home page
if (isset($_SESSION["email"])) {
    session_destroy();
}
header("Refresh: 5; url=index.php");
header("location:account.php?q=1");
 ?>
