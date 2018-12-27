<?php

// New configuration array for Client-Options
$redis_options = array();

// some default values...
$redis_options["schema"] = "tcp";
$redis_options["host"] = "localhost";
$redis_options["port"] = 6379;
$redis_options["password"] = "password";


// read configuration from file if exists ...
if( is_file("./.htconfig.php") ) {
  include_once("./.htconfig.php");
}

// get redis configuration options from environment variables
foreach( $redis_options as $k => $v) {
  $tmp = getenv(strtoupper("REDIS_OPTIONS_" . $k));
  if( isset($tmp) and $tmp != '' ) {
    $redis_options[$k] = $tmp;
  }
}

?>
