<?php
/**
 * Encryption: A very simple PHP encryption library
 */
class Encryptionphp{

     const chiper = "AES-128-CTR";
     const options = 0;

    /**
	 * Cryptographic key of length 16, 24 or 32.
	 *
	 * @var string
	 */
     private $key;

     /**
	 * Initialize encryptionphp object.
	 *
	 * @param string $key
	 */
    public function __construct($key)
    {
        if (!in_array(strlen($key), [16, 24, 32])) {
			throw new Exception('Cryptographic key must be 16, 24, or 32 characters in length.');
		}
		$this->key = $key;
    }
    /**
	 *Initialize A non-NULL Initialization Vector..
	 * @return $iv
	 */
    public function iv(){
        $iv = openssl_random_pseudo_bytes(256/16);
        return $iv;
    }
    /**
     * Changeing bineryIv value into hex to store in database
     * @param string $convert
     * @return string
     */
    public function binerytohex($convert){
        return bin2hex($convert);
        
    }
    /**
     * Changeing hexIv value into binery to retrive encrypted data to decrypted from
     * @param string $convert
     * @return string
     */
    public function hextobinery($convert){
        return hex2bin($convert); 
    }
    /**
	 * Encrypt a string.
	 *
	 * @param string $content
	 * @param string $iv
	 * @return string
	 */
    public function encrypt($content, $iv)
    { 
        // $iv = $this->iv();
        return openssl_encrypt($content, self::chiper, $this->key, self::options, $iv);

    }
    /**
	 * Decrypt an encrypted string.
	 *
	 * @param string $chiper_text
	 * @param string $iv
	 * @return string
	 */
    public function decrypt($chiper_text, $iv)
    {
        // $iv = $this->hextobinery($iv);
        return openssl_decrypt($chiper_text, self::chiper, $this->key, self::options, $iv);
    }
}