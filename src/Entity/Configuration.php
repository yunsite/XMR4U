<?php 
namespace App\Entity;

class Configuration
{
    
    /**
     * @Assert\NotBlank()
     */
    public $username;
    /**
     * @Assert\NotBlank()
     */
    public $wallet;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getWallet()
    {
        return $this->wallet;
    }

    public function setWallet($wallet)
    {
        $this->wallet = $wallet;
    }
}
?>