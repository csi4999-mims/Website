<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Report extends Entity
{

    protected $_accessible = [
      '*' => true,
      'Report_ID' => false,
      'CaseNumber' => true,
      'status' => true,
      'DateCreated' => true,
      'SubmitterEmail' => true,
      'FirstName' => true,
      'LastName' => true,
      'Gender' => true,
      'Ethnicity' => true,
      'EyeColor' => true,
      'HairColor' => true,
        'MarksTattoos' => true,
        'Weight' => true,
        'Height' => true,
        'DoB' => true,
        'Phone' => true,
        'SocialMediaAccount' => true,
        'ReportMiscInfo' => true,
        'category' => true,
    ];

}
