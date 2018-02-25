<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

class UsersTable extends Table
{

    public function initialize(array $config){

    }

//function to add validation to add.ctp form fields
//need to add additonal valition for each specific field still
    public function validationDefault(Validator $validator)
    {
       
        $validator
            ->notEmpty('FirstName', 'A First Name is required')
            ->add('FirstName', 'alphaNumeric', [
                'rule' => ['alphaNumeric', 'FirstName'], 
                'message' => 'First name must only contain the alphabet'
                  ])          
        
            ->notEmpty('LastName', 'A Last Name is required')
            ->add('LastName', 'alphaNumeric', [
                'rule' => ['alphaNumeric', 'LastName'], 
                'message' => 'Last name must only contain the alphabet'
                  ])

          
            ->add('password', [
                'length' => [
                    'rule' => ['minLength',4],
                    'message' => 'Please enter at least 4 characters for your password.'
                    ]
                ])
            ->notEmpty('password', 'A password is required')
            
          
        
            ->notEmpty('email', 'An email is required')
          
        
            ->notEmpty('phone', 'A phone is required')
          
            ->add('role', 'inList', [
                'rule' => ['inList', ['lawenforcement', 'thepublic']],
                'message' => 'Please enter a valid role'
            ])
            ->notEmpty('role', 'A role is required')
        
       
            ->add('confpass', 'compareWith', [
                'rule' => ['compareWith', 'password'],
                'message' => 'Passwords do not match'
            ])
			
			->add('email', [
				'unique' => ['rule' => 'validateUnique', 'provider' => 'table'],
				//'message' => 'Email is already taken'
					]);
        
    return $validator;
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
                        'message' => 'Please enter at least 4 characters in for your password.'
                    ]
                ])
                ->add('newpass',[
                    'match' => [
                        'rule' => ['compareWith','confpass'],
                        'message' => 'Sorry! Password does not match. Please try again!'
                    ]
                ])
                ->notEmpty('newpass');

        $validator
                ->add('confpass',[
                    'length' => [
                        'rule' => ['minLength',4],
                        'message' => 'Please enter at least 4 characters for your password.'
                    ]
                ])
                ->add('confpass',[
                    'match' => [
                        'rule' => ['compareWith','newpass'],
                        'message' => 'Sorry! Password does not match. Please try again!'
                    ]
                ])
                ->notEmpty('confpass');

      $validator
            ->add('newphone' ,[
                'length' => [
                    'rule' => ['minLength' ,10],
                    'message' => 'Please enter 10 digits for the phone number.'
                    ]
                ])
                ->allowEmpty;
        

        return $validator;

    }


}
?>
