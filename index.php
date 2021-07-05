<?php

include 'Encryptionphp.php';

$encryption = new Encryptionphp('bZKn8iklVOQr7eC8ONvnCeRFBJwWo1PG');
// $encryped = $encryption->Encrypt('hey hello its working');

// echo $encryped;
// $iv = openssl_random_pseudo_bytes(256/16);

echo "This value is encrypted: " .$encryption->encrypt('hey hello its working') . "<br>";

echo "This value is IV: " .$encryption->iv();

$iv = $encryption->binerytohex();
echo "<br>";
echo $iv ;