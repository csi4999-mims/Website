<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Date;
use Cake\Database\Type\DateType;
class ReportsController extends AppController{

//built in function of cakePHP
    public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
        'order' => array('User.username' => 'asc' )
    );

//function to render report page
//functionality needs to be added
    public function report() {

      $this->LoadModel('Users');
      $this->LoadModel('Missing');
      $this->set(compact('user'));
      $user = $this->Users->get($this->Auth->user('id'));

      $report = $this->Missing->newEntity();

      if ($this->request->is('post')) {
        $conn = ConnectionManager::get('default');

        $report = $this->Missing->patchEntity($report, $this->request->getData());

        $dob = \Cake\Database\Type::build('date')->marshal($report->get('missing_date_of_birth'));

        try {
          if
          (
            $conn->insert('missing',
            [
              'first_name' => $report->get('missing_first_name'),
              'middle_name' => $report->get('missing_middle_name'),
              'last_name' => $report->get('missing_last_name'),
              'alias' => $report->get('missing_alias'),
              'email' => $report->get('missing_email_address'),
              'phone' => $report->get('missing_phone_number'),
              'gender' => $report->get('missing_gender'),
              'ethnicity' => $report->get('missing_ethnicity'),
              'ethnicity_other' => $report->get('missing_ethnicity_other'),
              'eye_color' => $report->get('missing_eye_color'),
              'eye_color_other' => $report->get('missing_eye_color_other'),
              'hair_color' => $report->get('missing_hair_color'),
              'hair_color_other' => $report->get('missing_hair_color_other'),
              'markings' => $report->get('missing_markings'),
              'weight_pounds' => $report->get('missing_weight_pounds'),
              'height_inches' => (($report->get('missing_height_feet') * 12) + $report->get('missing_height_inches')), //this needs to be calculated based on feet * 12 + inches
              //'date_of_birth' => $report->get('missing_date_of_birth'),
              'date_of_birth' => $dob,
              'facebook_username' => $report->get('missing_facebook_username'),
              'twitter_username' => $report->get('missing_twitter_username'),
              'instagram_username' => $report->get('missing_instagram_username'),
              'snapchat_username' => $report->get('missing_snapchat_username'),
              'misc' => $report->get('missing_misc')
            ])
          )
/*
        if
        (
          $conn->insert('place',
          [
            'name' => $report->get('seen_name'),
            'country' => $report->get('seen_country'),
            'state' => $report->get('seen_state'),
            'city' => $report->get('seen_city'),
            'street' => $report->get('seen_street'),
            'number' => $report->get('seen_number'),
            'zip' => $report->get('seen_zip')
          ])
        )

        if
        (
          //write a query that will store the report_id and place_id into variables

          $conn->insert('last_seen',
          [
            //'report_id' => $reportIdVariable
            //'place_id' => $placeIdVariable
            //'when' => $report->get('seen_when'),   Dates need to be worked on
            'notes' => $report->get('seen_notes')
          ])
        )

        if
        (
          $conn->insert('place',
          [
            'street' => $report->get('ff_soemthinng'),
            'city' => $report->get('ff_something else'),
            'state' => $report->get('ff_something more'),
            'zip' => $report->get('ff_lastsomething')
          ])
        )

        if
        (
          //write a query that will retrieve the home_id from the places table

          $conn->insert('friend_family',
          [
            'first_name' => $report->get('ff_first_name'),
            'last_name' => $report->get('ff_last_name'),
            'middle_name' => $report->get('ff_middle_name'),
            'alias' => $report->get('ff_alias'),
            //'home_id' => $homeIdVariable,
            'gender' => $report->get('ff_gender'),
            'ethnicity' => $report->get('ff_ethnicity'),
            'ethnicity_other' => $report->get('ff_ethnicity_other')
          ])
        )

        if
        (
          //write queries to retire friend_family_id and missing_id and store them as variables

          $conn->insert('missing_relation',
          [
            //'friend_family_id' => $ffIDvariable
            //'missing_id' => $missingIDvariable
            'relation_type' => $report->get('ff_relation'),
            'relation_type_other' => $report->get('ff_relation_other')
          ])
        )

        if
        (
          $conn->insert('place',
          [
            'name' => $report->get('hangout_name'),
            'street' => $report->get('hangout_street'), //this shit needs to be fixed
            'number' => $report->get('hangout_number'), //this shit needs to be fixed
            'city' => $report->get('hangout_city'),
            'state' => $report->get('hangout_state'),
            'zip' => $report->get('hangout_zip')
          ])
        )

        if
        (
          $conn->insert('place',
          [
            'name' => $report->get('place_name'),
            'street' => $report->get('place_street'), //this shit needs to be fixed
            'number' => $report->get('place_number'), //this shit needs to be fixed
            'city' => $report->get('place_city'),
            'state' => $report->get('place_state'),
            'zip' => $report->get('place_zip')
          ])
        )

        if
        (
          //write queries to retrieve missingid and placeid and store them as variables
          $conn->insert('workplace',
          [
            //'missing_id' => $missingIDvariable,
            //'place_id' => $placeIdVariable,
            //'start_date' => $report->get('workplace_start_date'),    //dates need to be worked on
            //'end_date' => $report->get('workplace_end_date')         // dates need to be worked on
          ])
        )
*/

          {
            $this->Flash->success(__('The report has been submitted'));
            //return $this->redirect(['action' => 'homeConcernedPublic']);
          }
        }
        catch (\Exception $e)
        {
          echo $e->getMessage();
        }
      }



        /*$this->loadModel('Users');
        $this->set(compact('user'));
        $user =$this->Users->get($this->Auth->user('id'));
        $report = $this->Reports->newEntity();
        if ($this->request->is('post')) {
            // Prior to 3.4.0 $this->request->data() was used.
            $report = $this->Reports->patchEntity($report, $this->request->getData());
            if ($this->Reports->save($report)) {
                $this->Flash->success(__('The report has been saved.'));
                if ($user['role'] == 'thepublic'){
                  return $this->redirect(array('controller' => 'Users', 'action' => 'home_concerned_public'));
                }
                elseif ($user['role'] == 'lawenforcement'){
                  return $this->redirect(array('controller' => 'Users', 'action' => 'home_law_enforcement'));
                }
            }else{
                $this->Flash->error(__('Unable to add the report.'));
            }

        }
        $this->set('report', $report);
        */
    }

//function to view the detailed reports page
    public function detailedReport($Report_ID = null) {
      $report = $this->Reports->get($Report_ID);
      $this->set(compact('report'));

      //Edit Missing Person Info Section
      //edit first name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FirstName' => $this->request->data['editFirstName'],
          ]);
          if ($report->dirty('FirstName') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The First Name is successfully changed');
            } else {
                $this->Flash->error('First Name was not saved');
            }
          }

      }
      //edit last name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'LastName' => $this->request->data['editLastName'],
          ]);
          if ($report->dirty('LastName') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Name is successfully changed');
            } else {
                $this->Flash->error('Last Name was not saved');
            }
          }

      }
      //edit gender
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Gender' => $this->request->data['editGender'],
          ]);
          if ($report->dirty('Gender') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Gender is successfully changed');
            } else {
                $this->Flash->error('Gender was not saved');
            }
          }
      }
      //edit ethnicity
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Ethnicity' => $this->request->data['editEthnicity'],
          ]);
          if ($report->dirty('Ethnicity') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Ethnicity is successfully changed');
            } else {
                $this->Flash->error('Ethnicity was not saved');
            }
          }
      }
      //edit dob
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'DoB' => $this->request->data['editDoB'],
          ]);
          if ($report->dirty('DoB') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Date of Birth is successfully changed');
            } else {
                $this->Flash->error('Date of Birth was not saved');
            }
          }
      }
      //edit height(feet)
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Feet' => $this->request->data['editFeet'],
          ]);
            if ($report->dirty('Feet') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Height Feet is successfully changed');
            } else {
                $this->Flash->error('Height Feet was not saved');
            }
          }
      }
      //edit height(inches)
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Inches' => $this->request->data['editInches'],
          ]);
          if ($report->dirty('Inches') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Height Inches is successfully changed');
            } else {
                $this->Flash->error('Height Inches was not saved');
            }
          }
      }
      //edit marks/tattoos
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'MarksTattoos' => $this->request->data['editMarksTattoos'],
          ]);
          if ($report->dirty('MarksTattoos') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Marks/Tattoos is successfully changed');
            } else {
                $this->Flash->error('Marks/Tattoos was not saved');
            }
          }
      }
      //edit weight
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Weight' => $this->request->data['editWeight'],
          ]);
          if ($report->dirty('Weight') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Weight is successfully changed');
            } else {
                $this->Flash->error('Weight was not saved');
            }
          }
      }
      //edit eye color
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'EyeColor' => $this->request->data['editEyeColor'],
          ]);
          if ($report->dirty('EyeColor') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Eye Color is successfully changed');
            } else {
                $this->Flash->error('Eye Color was not saved');
            }
          }
      }
      //edit hair color
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HairColor' => $this->request->data['editHairColor'],
          ]);
          if ($report->dirty('HairColor') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hair Color is successfully changed');
            } else {
                $this->Flash->error('Hair Color was not saved');
            }
          }
      }
      //edit phone
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Phone' => $this->request->data['editPhone'],
              ]);
          if ($report->dirty('Phone') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Phone is successfully changed');
            } else {
                $this->Flash->error('Phone was not saved');
            }
          }
      }
      //edit social media
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SocialMediaAccount' => $this->request->data['editSocialMediaAccount'],
              ]);
          if ($report->dirty('SocialMediaAccount') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Social Media is successfully changed');
            } else {
                $this->Flash->error('Social Media was not saved');
            }
          }
      }
      //Edit Family/Friend Info Section
      //edit family first name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyFirstName' => $this->request->data['editFamilyFirstName'],
              ]);
          if ($report->dirty('FamilyFirstName') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Family First Name is successfully changed');
            } else {
                $this->Flash->error('Family First Name was not saved');
            }
          }
      }
      //edit family last name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyLastName' => $this->request->data['editFamilyLastName'],
              ]);
          if ($report->dirty('FamilyLastName') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Family Last Name is successfully changed');
            } else {
                $this->Flash->error('Family Last Name was not saved');
            }
          }
      }
      //edit family gender
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyGender' => $this->request->data['editFamilyGender'],
              ]);
          if ($report->dirty('FamilyGender') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Family Gender is successfully changed');
            } else {
                $this->Flash->error('Family Gender was not saved');
            }
          }
      }
      //edit family relation
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Relation' => $this->request->data['editRelation'],
              ]);
          if ($report->dirty('Relation') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Relation is successfully changed');
            } else {
                $this->Flash->error('Relation was not saved');
            }
          }
      }
      //edit family street
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyStreet' => $this->request->data['editFamilyStreet'],
              ]);
          if ($report->dirty('FamilyStreet') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Street is successfully changed');
            } else {
                $this->Flash->error('Street was not saved');
            }
          }
      }
      //edit family city
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyCity' => $this->request->data['editFamilyCity'],
              ]);
          if ($report->dirty('FamilyCity') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The City is successfully changed');
            } else {
                $this->Flash->error('City was not saved');
            }
          }
      }
      //edit family State
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyState' => $this->request->data['editFamilyState'],
              ]);
          if ($report->dirty('FamilyState') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The State is successfully changed');
            } else {
                $this->Flash->error('State was not saved');
            }
          }
      }
      //edit family zip
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyZip' => $this->request->data['editFamilyZip'],
              ]);
          if ($report->dirty('FamilyZip') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Zip is successfully changed');
            } else {
                $this->Flash->error('Zip was not saved');
            }
          }
      }
      //edit family phone
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyPhone' => $this->request->data['editFamilyPhone'],
              ]);
          if ($report->dirty('FamilyPhone') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Phone is successfully changed');
            } else {
                $this->Flash->error('Phone was not saved');
            }
          }
      }
      //edit family email
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyEmail' => $this->request->data['editFamilyEmail'],
              ]);
          if ($report->dirty('FamilyEmail') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Email is successfully changed');
            } else {
                $this->Flash->error('Email was not saved');
            }
          }
      }
      //Edit the Workplace/Hangouts section of the form
      //edit place name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceName' => $this->request->data['editPlaceName'],
              ]);
          if ($report->dirty('PlaceName') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Place Name is successfully changed');
            } else {
                $this->Flash->error('Place Name was not saved');
            }
          }
      }
      //edit place street
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceStreet' => $this->request->data['editPlaceStreet'],
              ]);
          if ($report->dirty('PlaceStreet') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Street is successfully changed');
            } else {
                $this->Flash->error('Street was not saved');
            }
          }
      }
      //edit place city
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceCity' => $this->request->data['editPlaceCity'],
              ]);
          if ($report->dirty('PlaceCity') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The City is successfully changed');
            } else {
                $this->Flash->error('City was not saved');
            }
          }
      }
      //edit place state
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceState' => $this->request->data['editPlaceState'],
              ]);
          if ($report->dirty('PlaceState') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The State is successfully changed');
            } else {
                $this->Flash->error('State was not saved');
            }
          }
      }
      //edit place zip
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'PlaceZip' => $this->request->data['editPlaceZip'],
              ]);
          if ($report->dirty('PlaceZip') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Zip is successfully changed');
            } else {
                $this->Flash->error('Zip was not saved');
            }
          }
      }

      $this->set('report',$report);
    }

}
?>
