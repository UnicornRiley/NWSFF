?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userName']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="land.css" type="text/css" />
</head>
<body>
<div class="header">
<ul>
<li><a href="home.php">Home page </a></li>
<li><a href="submit.php">Submit ideas </a></li>
<li><a href="logout.php?logout">Log out </a></li>
<li><a href="index.html.en">To be determined </a></li>
</ul>
</div>
</body>
</html>
<?php ob_end_flush(); ?>
