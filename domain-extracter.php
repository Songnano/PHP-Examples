<?php
  if (count(explode(".",$_SERVER["SERVER_NAME"])) === 3) {
  if (explode(".",$_SERVER["SERVER_NAME"])[1] === "example.com") {
    $domain = "";
    $domain .= explode(".",$_SERVER["SERVER_NAME"])[0].".";
    $domain .= explode(".",$_SERVER["SERVER_NAME"])[1].".";
    $domain .= explode(".",$_SERVER["SERVER_NAME"])[2];
    $subdomain = explode(".",$_SERVER["SERVER_NAME"])[0];
  }
} else if (count(explode(".",$_SERVER["SERVER_NAME"])) === 2) {
  if (explode(".",$_SERVER["SERVER_NAME"])[1] === "localhost") {
    $domain = "";
    $domain .= explode(".",$_SERVER["SERVER_NAME"])[0].".";
    $domain .= explode(".",$_SERVER["SERVER_NAME"])[1];
    $subdomain = explode(".",$_SERVER["SERVER_NAME"])[0];
  }
}
?>
