<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Report extends Entity
{

    protected $_accessible = [

      //columns for report table
      '*' => true,
      'id' => false,
      'submitter_id' => false,
      'missing_id' => false,
      'law_enforcment_id' => false,
      'approved_datetime' => false,
      'submit_datetime' => false,
      'missing_status' => false,
      'case_number' => false,

      //columns for place table
      'name' => true,
      'country' => true,
      'city' => true,
      'street' => true,
      'number' => true,
      'zip' => true,

      //columns for missing table
      
      'email_address' => true,
      'phone_number' => true,
      'eye_color' => true,
      'eye_color_other' => true,
      'hair_color' => true,
      'hair_color_other' => true,
      'markings' => true,
      'weight_pounds' => true,
      'height_inches' => true,
      'date_of_birth' => true,
      'facebook_username'=> true,
      'misc' => true,

      //columns for family_friend table
      'first_name' => true,
      'last_name' => true,
      'middle_name' => true,
      'alias' => true,
      'home_id' => false,
      'gender' => true,
      'ethnicity' => true,
      'ethnicity_other' => true,

      // 'status' => true,
      // 'DateCreated' => true,
      // 'SubmitterEmail' => true,
      // 'FirstName' => true,
      // 'LastName' => true,
      // 'Gender' => true,
      // 'Ethnicity' => true,
      // 'EyeColor' => true,
      // 'HairColor' => true,
      //   'MarksTattoos' => true,
      //   'Weight' => true,
      //   'Height' => true,
      //   'DoB' => true,
      //   'Phone' => true,
      //   'SocialMediaAccount' => true,
      //   'ReportMiscInfo' => true,
    ];

}
