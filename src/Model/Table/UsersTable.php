<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

//function to add validation to add.ctp form fields
//need to add additonal valition for each specific field still
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('FirstName', 'A First Name is required')
            ->notEmpty('LastName', 'A Last Name is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('email', 'An email is required')
            ->notEmpty('phone', 'A phone is required')
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'lawenforcement', 'thepublic']],
                'message' => 'Please enter a valid role'
            ]);
    }

}
?>
