<?php

session_start();

unset($_SESSION['pseudo']);

header("Refresh: 2; url=index.php");
echo "You are  disconnected successfully.<br><br><i>Please wait we are directing you , to the Home page...</i>";

?>
