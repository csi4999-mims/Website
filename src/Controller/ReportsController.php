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

        //$dob = \Cake\Database\Type::build('date')->marshal($report->get('missing_date_of_birth'));

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
              //'date_of_birth' => $dob,
              'facebook_username' => $report->get('missing_facebook_username'),
              'twitter_username' => $report->get('missing_twitter_username'),
              'instagram_username' => $report->get('missing_instagram_username'),
              'snapchat_username' => $report->get('missing_snapchat_username'),
              'misc' => $report->get('missing_misc')
            ])
          )

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
    }


//function to render the second report page
//functionality needs to be added
    public function report2() {

//        $persons = $this->persons->newEntity();
//		if ($this->request->is('post')) {
//			$persons = $this->persons->patchEntity($persons, $this->request->getData());
//			if ($this->persons->save($persons)) {
//				$this->Flash->success(__('This person has been added.'));
//				return $this->redirect(['action' => 'home']);
//			}
//			$this->Flash->error(__('Unable to add person.'));
//		}
//		$this->set('user', $user);
//
//        $this->render();
    }
//function to render the second report page
//functionality needs to be added
    public function report3() {

//        places = $this->places->newEntity();
//		if ($this->request->is('post')) {
//			$places = $this->places->patchEntity($places, $this->request->getData());
//			if ($this->places->save($places)) {
//				$this->Flash->success(__('This place has been added.'));
//				return $this->redirect(['action' => 'home']);
//			}
//			$this->Flash->error(__('Unable to add place.'));
//		}
//		$this->set('user', $user);

//        $this->render();
    }

}
?>
