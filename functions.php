<?php

function generatePassword($passwLength) {
  $asciiCharacters = '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
  $generatedPassword = "";

  for ($i = 0; $i < $passwLength; $i++) {
    $randomChar = rand(0, strlen($asciiCharacters)) . " ";
    $generatedPassword .= $asciiCharacters[$randomChar];
  }
  return $generatedPassword;
}

?>