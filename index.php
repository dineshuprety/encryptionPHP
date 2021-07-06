<?php
/**
 * View example folder for better exprience 
 */
require_once 'src/Encryptionphp.php';

$privateKey = 'bZKn8iklVOQr7eC8ONvnCeRFBJwWo1PG';
$encryption = new Encryptionphp($privateKey);

// includeing Iv function
$iv = $encryption->iv();
// Encrypt a string
$encrypted = $encryption->encrypt('Today is a good day!', $iv);

echo 'Encrypted: '.$encrypted.'<br />';

// Decrypt a chiper dynamic way
$decrypted = $encryption->decrypt($encrypted, $iv);

echo 'Decrypted: '.$decrypted.'<br />';