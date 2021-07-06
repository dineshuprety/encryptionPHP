# Encryption

This is a very simple PHP encryption library. You can use this library to encrypt or decrypt string with a 16, 24, 32 characters private key.



## Usage

### Getting Started

> \$encryption = new Encryption( **string** \$key );

```php
// Include core encryption library from Src folder
require_once 'Encryptionphp.php';

// Initialize encryption object
$encryption = new Encryption('bZKn8iklVOQr7eC8ONvnCeRFBJwWo1PG');
```



### Encrypt

Encrypts a string to secure it.

> \$encryption->encrypt( **string** $text, **string** $iv);

```php
// iv() funcation for dynamic encrypted data
$iv = $encryption->iv();
// Encrypt a string
$encrypted = $encryption->encrypt('Today is a good day!', $iv);

echo $encrypted;
```


### Decrypt

Decrypts an encrypted chiper.

> **string** \$encryption->decrypt( **string** $chiper. **string** $iv);

```php
$decrypted = $encryption->decrypt($encrypted, $iv);

echo $decrypted;
```

**Result:**

```
Today is a good day!
```
**Note:**

```
Use this code to encrypt the data into database 
```