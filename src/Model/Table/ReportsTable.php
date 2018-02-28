<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ReportsTable extends Table
{

    public function validationReport(Validator $validator)
    {

        return $validator
          ->notEmpty('FirstName', 'A first name is required')
    			->notEmpty('LastName', 'A last name is required')
    			->notEmpty('Gender', 'A gender is required')
    			->notempty('Ethinicity', 'An ethnicity is required')
    			->notEmpty('EyeColor', 'An eye color is required')
    			->notEmpty('HairColor', 'A hair color is required')
    			//->notEmpty('marks', 'Marks are required?') This should be allowed to be null.
    			->notEmpty('Weight', 'Please enter a weight for the missing person')
    			->notEmpty('Height', 'Please enter a height for the missing person')
    			->notEmpty('DoB', 'Please enter a date of birth')
    			->notEmpty('Phone', 'Please enter a phone number for the missing person');
    			//->notEmpty('SocialMedia', 'Please enter the missing persons social media account information')
    			//->notEmpty('additional', 'Please enter any additional information') This should be allowed to be null

	}
    //
    // public function validationReport2(Validator $validator)
    // {
    //
    //  return $validator
    //      ->notEmpty('FirstName', 'A first name is required')
    //      ->notempty('LastName', 'A last name is required')
    //      ->notempty('Gender', 'A gender is required')
    //      ->notempty('Relation', 'A relation to the Family/Friend is required')
    //      ->notempty('Street', 'A Street is required')
    //      ->notempty('City', 'A City is required')
    //      ->notempty('State', 'A State is required')
    //      ->notempty('Zip', 'A Zip Code is reqired')
    //      ->notempty('Phone', 'A Phone Number is required')
    //      ->notempty('Email', 'An Email is required');
    //
    //
    // }
    //
    // public function validationReport3(Validator $validator)
    // {
    //
    //
    //     return $validator
    //         ->notempty('Name','A name of the place is required')
    //         ->notempty('Street','A street is required')
    //         ->notempty('City','A city is required')
    //         ->notempty('State','A state is required')
    //         ->notempty('Zip','A Zip Code is required')
    //         ->notempty('Email','An Email is requred');
    //
    // }
}


?>
