<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

echo "You have been logged out.";
?>