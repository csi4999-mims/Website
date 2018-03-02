<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Report extends Entity
{

    protected $_accessible = [

      //columns for report table
      '*' => true,
      'report_id' => false,
      'report_submitter_id' => false,
      'report_missing_id' => false,
      'report_law_enforcment_id' => false,
      'report_approved_datetime' => false,
      'report_submit_datetime' => false,
      'report_missing_status' => false,
      'report_case_number' => false,

      //columns for missing table
      'missing_id'=> false,
      'missing_first_name' => true,
      'missing_middle_name' => true,
      'missing_last_name' => true,
      'missing_alias' => true,
      'missing_email_address' => true,
      'missing_gender' => true,
      'missing_ethnicity' => true,
      'missing_ethnicity_other' => true,
      'missing_phone_number' => true,
      'missing_eye_color' => true,
      'missing_eye_color_other' => true,
      'missing_hair_color' => true,
      'missing_hair_color_other' => true,
      'missing_markings' => true,
      'missing_weight_pounds' => true,
      'missing_height_inches' => true,
      'missing_date_of_birth' => true,
      'missing_facebook_username'=> true,
      'missing_twitter_username' => true,
      'missing_instagram_username' => true,
      'missing_snapchat_username' => true,
      'missing_misc' => true,

      //columns for family_friend table
      'ff_id' => false,
      'ff_home_id' => false,
      'ff_first_name' => true,
      'ff_last_name' => true,
      'ff_middle_name' => true,
      'ff_alias' => true,
      'ff_gender' => true,
      'ff_ethnicity' => true,
      'ff_ethnicity_other' => true,

      //variables for family_friend location
      'ff_street' => true,
      'ff_city' => true,
      'ff_state' => true,
      'ff_zip' => true,
      'ff_phone' => true,
      'ff_email' => true,

      //columns for place table
      'place_id' => false,
      'place_name' => true,
      'place_state' => true,
      'place_city' => true,
      'place_street' => true,
      'place_number' => true,
      'place_zip' => true,
      'place_misc' => true,

      //columns for workplace table
      'workplace_report_id' => false,
      'workplace_place_id' => false,
      'workplace_start_date' => true,
      'workplace_end_date' => true,

      //columns for last_seen table
      'seen_report_id' => false,
      'seen_place_id' => false,
      'seen_when' => true,
      'seen_notes' => true,

      //variables for (last_seen <-> place) relationship
      'seen_name' => true,
      'seen_street' => true,
      'seen_number' => true,
      'seen_city' => true,
      'seen_state' => true,
      'seen_zip' => true,


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
