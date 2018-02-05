<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    
//function to tell which items in the UsersTable are accessible 
    protected $_accessible = [
      '*' => true,
      'id' => false,
      'FirstName' => true,
      'LastName' => true,
      'phone' => true,
      'email' => true,
      'password' => true,
    ];
    
//function to hash the password field
//this uses default hasing 
//we can choose a different kind of hashing if we want
    protected function _setPassword($password)
    {
       if (strlen($password) > 0) {
		 return (new DefaultPasswordHasher)->hash($password);
	}
    }

//function to hash the confirm password field
//uses default hashing
    protected function _setConfirmPassword($ConfirmPassword)
    {
	if (strlen($ConfirmPassword) > 0) {
		return (new DefaultPasswordHasher)->hash($ConfirmPassword);
	}
    }
}
