<?php

function grs($length = 3) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function smail($to, $subject, $message) {
  $headers = "Content-Type: text/html;charset=UTF-8\r\nX-Mailer:PHP/".phpversion();
  mail($to, $subject, $message, $headers);
}

function getdir($dir) {
  $data = array();
  $i = 0;
  foreach (scandir($dir) as $key => $value) {
    if ($value == ".." || $value == ".") continue;
    $data[$i] = $value;
    $i++;
  }
  return $data;
}

function dir_exists($path) {
  return file_exists($path);
}

function parseVariables($data) {
  return str_replace("<NFFORUMSLIST>", array(), $data);
}
