<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Houses and Holds</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id='wrap'>
  <h1>Houses and Holds</h1>

<?php
if(isset($_POST['interact']))
{
  $interaction = $_POST['interaction'];
  $user_id = $_POST['user_id'];
  $user_email = $_POST['user_email'];
  $char_id = $_POST['char_id'];

  echo $interaction;
}

echo "<form action='index.php' method='post'>";
echo "<input type='hidden' name='user_email' value='" . $user_email . "' />";
echo "<input type='hidden' name='user_id' value='" . $user_id . "' />";
echo "<input type='hidden' name='char_id' value='" . $char_id . "' />";
echo "<input type='submit' name='play' value='Back' />";
echo "</form>";

 ?>

</body>
</html>