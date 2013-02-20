<?php

function url(){
        if(isset($_SERVER['HTTPS'])){
                $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }else{
                $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}



function request_uri($omit_query_string = FALSE) {
  if (isset($_SERVER['REQUEST_URI'])) {
    $uri = $_SERVER['REQUEST_URI'];
  }
  else {
    if (isset($_SERVER['argv'][0])) {
      $uri = $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['argv'][0];
    }
    elseif (isset($_SERVER['QUERY_STRING'])) {
      $uri = $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'];
    }
    else {
      $uri = $_SERVER['SCRIPT_NAME'];
    }
  }
  // Prevent multiple slashes to avoid cross site requests via the Form API.
  $uri = '/' . ltrim($uri, '/');

  return $omit_query_string ? strtok($uri, '?') : $uri;
}


?>