<?php



function get_cfg_from_env($name, $default='') {
  $ret = $default;
  $tmp = getenv($name);
  if( isset($tmp) and $tmp != '' ) {
    $ret = $tmp;
  }
  return $ret;
}

// New configuration array for Client-Options
$redis_options = array();

// some default values...
$redis_options["schema"] = get_cfg_from_env("REDIS_OPTIONS_SCHEMA","tcp");
$redis_options["host"] = get_cfg_from_env("REDIS_OPTIONS_HOST","localhost");
$redis_options["port"] = get_cfg_from_env("REDIS_OPTIONS_PORT",6379);
$redis_options["password"] = get_cfg_from_env("REDIS_OPTIONS_PASSWORD","password");

$redis_title = get_cfg_from_env("REDIS_TITLE","");

// read configuration from file if exists ...
if( is_file("./.htconfig.php") ) {
  include_once("./.htconfig.php");
}

?>
