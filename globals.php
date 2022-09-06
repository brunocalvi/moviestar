<?php 
session_start();

$base_url = "http://". $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]."?") . "/";

?>