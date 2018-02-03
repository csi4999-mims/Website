<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

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
            ])
            ->add('confpass', 'compareWith', [
                'rule' => ['compareWith', 'password'],
                'message' => 'Passwords do not match'
            ]);
    }

    
//function used for validation on edit.ctp password form fields
  public function validationEdit(Validator $validator)
    {
        $validator
                ->add('oldpass','custom',[
                    'rule' => function($value, $context){
                        $user = $this->get($context['data']['id']);
                        if($user)
                        {
                            if((new DefaultPasswordHasher)->check($value, $user->password))
                            {
                                return true;
                            }
                        }
                        return false;
                    },
                    'message' => 'Your old password does not match the entered password!',
                ])
                ->notEmpty('oldpass');
        
        $validator
                ->add('newpass',[
                    'length' => [
                        'rule' => ['minLength',4],
                        'message' => 'Please enter at least 4 characters in password your password.'
                    ]
                ])
                ->add('newpass',[
                    'match' => [
                        'rule' => ['compareWith','confpass'],
                        'message' => 'Sorry! Password dose not match. Please try again!'
                    ]
                ])
                ->notEmpty('newpass');
        
        $validator
                ->add('confpass',[
                    'length' => [
                        'rule' => ['minLength',4],
                        'message' => 'Please enter at least 4 characters in password your password.'
                    ]
                ])
                ->add('confpass',[
                    'match' => [
                        'rule' => ['compareWith','newpass'],
                        'message' => 'Sorry! Password dose not match. Please try again!'
                    ]
                ])
                ->notEmpty('confpass');
        
        return $validator;
      
    }    
    
    
}
?>
