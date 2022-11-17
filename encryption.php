<?php 

class StudentEncryption {
 

    public function __construct() {
        $this->cipher = "aes-256-cbc"; 

        $this->encryption_key = openssl_random_pseudo_bytes(32); 
    
        $this->iv_size = openssl_cipher_iv_length($this->cipher); 
        $this->iv = openssl_random_pseudo_bytes($this->iv_size); 
    
    }
    public function encryptData($data = "") {
        $encrypted_data = openssl_encrypt($data, $this->cipher, $this->encryption_key, 0, $this->iv); 
        
        // echo "Encrypted Text: " . $encrypted_data; 
        
        return $encrypted_data;
    }
    
    public function decryptData($encrypted_data = "") {
        $decrypted_data = openssl_decrypt($encrypted_data, $this->cipher, $this->encryption_key, 0, $this->iv); 

        // echo "Decrypted Text: " . $decrypted_data; 
        
        return $decrypted_data;
    }
}

// $data_to_be_encrypt = "this data";

// $studentAES = new StudentEncryption();

// $encrypt_data = $studentAES->encryptData($data_to_be_encrypt);

// print("Encrypted Data: $encrypt_data \n");
// $decrypted_data = $studentAES->decryptData($encrypt_data);
// print("Decrypted Data: $decrypted_data");
?>