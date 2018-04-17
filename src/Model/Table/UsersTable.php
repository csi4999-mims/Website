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
            ->notEmpty('FirstName', 'A first name is required.')
            ->add('FirstName', 'alphaNumeric', [
                'rule' => ['alphaNumeric', 'FirstName'],
                'message' => 'The first name must only contain English letters'
                  ])

            ->notEmpty('LastName', 'A last name is required.')
            ->add('LastName', 'alphaNumeric', [
                'rule' => ['alphaNumeric', 'LastName'],
                'message' => 'The last name must only contain English letters'
                  ])


            ->add('password', [
                'length' => [
                    'rule' => ['minLength',4],
                    'message' => 'The password you entered is too short.  Please try again.'
                    ]
                ])
            ->notEmpty('password', 'A password is required.')



            ->notEmpty('email', 'An email address is required.')


            ->notEmpty('phone', 'A phone number is required.')

            ->add('role', 'inList', [
                'rule' => ['inList', ['lawenforcement', 'thepublic']],
                'message' => 'Please enter a valid role.'
            ])
            ->notEmpty('role', 'A role is required.')


            ->add('confpass', 'compareWith', [
                'rule' => ['compareWith', 'password'],
                'message' => 'The passwords you entered do not match.'
            ])

			->add('email', [
				'unique' => ['rule' => 'validateUnique', 'provider' => 'table'],
				// 'message' => 'Email is already taken'
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
                    'message' => 'Your old password does not match the entered password.',
                ])
                ->notEmpty('oldpass');

        $validator
                ->add('newpass',[
                    'length' => [
                        'rule' => ['minLength',4],
                        'message' => 'Your new password is too short. Please try again.'
                    ]
                ])
                ->add('newpass',[
                    'match' => [
                        'rule' => ['compareWith','confpass'],
                        'message' => 'The passwords you entered do not match. Please try again.'
                    ]
                ])
                ->notEmpty('newpass');

        $validator
                ->add('confpass',[
                    'length' => [
                        'rule' => ['minLength',4],
                        'message' => 'Your new password is too short. Please try again.'
                    ]
                ])
                ->add('confpass',[
                    'match' => [
                        'rule' => ['compareWith','newpass'],
                        'message' => 'The passwords you entered do not match. Please try again.'
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
