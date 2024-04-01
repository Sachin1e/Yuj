<?php 
require_once("yujdata.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
//require_once("contact_mail.php");
$yourName = $conn->real_escape_string($_POST['name']);
$yourPhone = $conn->real_escape_string($_POST['phone_no']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$comments = $conn->real_escape_string($_POST['feedback']);

$sql="INSERT INTO contact_form_info (name, phone_no, email, feedback) VALUES ('".$yourName."','".$yourPhone."', '".$yourEmail."', '".$comments."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error. ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>