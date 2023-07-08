<?php
if (isset($_SESSION["email"])) {
    session_destroy();
    echo '<script>alert("You have been logged out successfully")</script>';
}

session_start();
$name = "Guest";
$email = "user@user.com";
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
// get current url of header modify it and redirect to the appropriate page 


$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $url . '<br>';
header(str_replace(strtok($url, '?'), 'location:account.php', $url));

?>



<?php
// wait for 10 seconds to redirect to home page IF THE PAGE IS BLANK 
// 404 page redirect to home page
// sleep(10);
// if (isset($_SESSION["email"])) {
//     session_destroy();
// }
// header("Refresh: 5; url=index.php");
// header("location:account.php?q=1");
?>