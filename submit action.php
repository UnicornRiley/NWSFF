hp
   $email    = $_POST['email'];
   $idea = $_POST['idea'];

   $fh = fopen("submit.txt", "a+" ) or die("Could not write file");

   fwrite($fh, $email. '  -    '. $idea . "\n");
   fclose($fh);
header("Location: http://localhost/submit.php");
die();
