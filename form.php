<?php 
$msg = $_POST['message'];
$sender = $_POST['sender'];
$num = $_POST['phone'];
$to = "aguchris740@gmail.com";
$subject = "New Message From Portfolio";
$content = "From ".$sender." \nPhone Number: $num\n Content: $msg";
$mail = mail($to,$subject,$content);
if (msg) {
  echo("<script> window.location = 'index.html?sent=true'</script>");
} else {
  echo "<script> window.location = 'index.html?sent=false'</script>";
}
?>