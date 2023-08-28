<?php
// Define the target URL you want to redirect to
$targetUrl = "https://www.example.com/newpage";

// Perform the redirection using the header() function
header("Location: $targetUrl");
exit(); // Ensure that the script stops executing after the redirection
?>
