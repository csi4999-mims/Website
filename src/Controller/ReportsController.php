<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\UsersController;
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
      //Load the user model
      $this->loadModel('Users');
      $user =$this->Users->get($this->Auth->user('id'));
      $this->set('user',$user);
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

    }

//function to view the detailed reports page
    public function detailedReport($Report_ID = null) {
      $report = $this->Reports->get($Report_ID);
      $this->set(compact('report'));

      //Edit Missing Person Info Section
      //edit category
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'category' => $this->request->data['editCategory'],
          ]);
          if ($report->dirty('category') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The category is successfully changed');
            } else {
                $this->Flash->error('category was not saved');
            }
          }

      }
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
      //edit middle name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'MiddleName' => $this->request->data['editMiddleName'],
          ]);
          if ($report->dirty('MiddleName') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Middle Name is successfully changed');
            } else {
                $this->Flash->error('Middle Name was not saved');
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
      //edit alias
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'Alias' => $this->request->data['editAlias'],
          ]);
          if ($report->dirty('Alias') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Alias is successfully changed');
            } else {
                $this->Flash->error('Alias was not saved');
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
      //edit ethnicity other
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'MissingEthnicityOther' => $this->request->data['editMissingEthnicityOther'],
          ]);
          if ($report->dirty('MissingEthnicityOther') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Ethnicity Other is successfully changed');
            } else {
                $this->Flash->error('Ethnicity Other was not saved');
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
              'HeightFeet' => $this->request->data['editHeightFeet'],
          ]);
            if ($report->dirty('HeightFeet') == true){
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
              'HeightInches' => $this->request->data['editHeightInches'],
          ]);
          if ($report->dirty('HeightInches') == true){
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
      //edit eye color other
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'MissingEyeColorOther' => $this->request->data['editMissingEyeColorOther'],
          ]);
          if ($report->dirty('MissingEyeColorOther') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Eye Color Other is successfully changed');
            } else {
                $this->Flash->error('Eye Color Other was not saved');
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
      //edit hair color other
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'MissingHairColorOther' => $this->request->data['editMissingHairColorOther'],
          ]);
          if ($report->dirty('MissingHairColorOther') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hair Color Other is successfully changed');
            } else {
                $this->Flash->error('Hair Color Other was not saved');
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
      //edit facebook
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'missing_facebook_username' => $this->request->data['edit_missing_facebook_username'],
              ]);
          if ($report->dirty('missing_facebook_username') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Facebook account is successfully changed');
            } else {
                $this->Flash->error('Facebook account was not saved');
            }
          }
      }
      //edit twitter
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'missing_twitter_username' => $this->request->data['edit_missing_twitter_username'],
              ]);
          if ($report->dirty('missing_twitter_username') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Twitter account is successfully changed');
            } else {
                $this->Flash->error('Twitter account was not saved');
            }
          }
      }
      //edit snap chat
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'missing_snapchat_username' => $this->request->data['edit_missing_snapchat_username'],
              ]);
          if ($report->dirty('missing_snapchat_username') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Snapchat account is successfully changed');
            } else {
                $this->Flash->error('Snapchat account was not saved');
            }
          }
      }
      //edit instagram
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'missing_instagram_username' => $this->request->data['edit_missing_instagram_username'],
              ]);
          if ($report->dirty('missing_instagram_username') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Instagram account is successfully changed');
            } else {
                $this->Flash->error('Instagram account was not saved');
            }
          }
      }
      //edit report misc info
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'ReportMiscInfo' => $this->request->data['editReportMiscInfo'],
              ]);
          if ($report->dirty('ReportMiscInfo') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Misc Info is successfully changed');
            } else {
                $this->Flash->error('Misc Info was not saved');
            }
          }
      }
      //edit last seen place name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SeenName' => $this->request->data['editSeenName'],
              ]);
          if ($report->dirty('SeenName') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Seen Place Name is successfully changed');
            } else {
                $this->Flash->error('Last Seen Place Name was not saved');
            }
          }
      }
      //edit last seen street
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SeenStreet' => $this->request->data['editSeenStreet'],
              ]);
          if ($report->dirty('SeenStreet') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Seen Place Street Name is successfully changed');
            } else {
                $this->Flash->error('Last Seen Place Street Name was not saved');
            }
          }
      }
      //edit last seen number
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SeenNumber' => $this->request->data['editSeenNumber'],
              ]);
          if ($report->dirty('SeenNumber') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Seen Place Street Number is successfully changed');
            } else {
                $this->Flash->error('Last Seen Place Street Number was not saved');
            }
          }
      }
      //edit last seen city
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SeenCity' => $this->request->data['editSeenCity'],
              ]);
          if ($report->dirty('SeenCity') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Seen Place City is successfully changed');
            } else {
                $this->Flash->error('Last Seen Place City was not saved');
            }
          }
      }
      //edit last seen state
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SeenState' => $this->request->data['editSeenState'],
              ]);
          if ($report->dirty('SeenState') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Seen Place State is successfully changed');
            } else {
                $this->Flash->error('Last Seen Place State was not saved');
            }
          }
      }
      //edit last seen zip
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SeenZip' => $this->request->data['editSeenZip'],
              ]);
          if ($report->dirty('SeenZip') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Seen Place Zip is successfully changed');
            } else {
                $this->Flash->error('Last Seen Place Zip was not saved');
            }
          }
      }
      //edit last seen when
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SeenWhen' => $this->request->data['editSeenWhen'],
              ]);
          if ($report->dirty('SeenWhen') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Seen Date is successfully changed');
            } else {
                $this->Flash->error('Last Seen Date was not saved');
            }
          }
      }
      //edit last seen notes
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'SeenNotes' => $this->request->data['editSeenNotes'],
              ]);
          if ($report->dirty('SeenNotes') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Last Seen Notes are successfully changed');
            } else {
                $this->Flash->error('Last Seen Notes were not saved');
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
      //edit family middle name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyMiddleName' => $this->request->data['editFamilyMiddleName'],
              ]);
          if ($report->dirty('FamilyMiddleName') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Family Middle Name is successfully changed');
            } else {
                $this->Flash->error('Family Middle Name was not saved');
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
      //edit family ethnicity
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyEthnicity' => $this->request->data['editFamilyEthnicity'],
              ]);
          if ($report->dirty('FamilyEthnicity') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Family Ethnicity is successfully changed');
            } else {
                $this->Flash->error('Family Ethnicity was not saved');
            }
          }
      }
      //edit family ethnicity other
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'FamilyEthnicityOther' => $this->request->data['editFamilyEthnicityOther'],
              ]);
          if ($report->dirty('FamilyEthnicityOther') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Family Ethnicity Other is successfully changed');
            } else {
                $this->Flash->error('Family Ethnicity Other was not saved');
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
      //edit family relation other
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'RelationOther' => $this->request->data['editRelationOther'],
              ]);
          if ($report->dirty('RelationOther') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Relation Other is successfully changed');
            } else {
                $this->Flash->error('Relation Other was not saved');
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
      //edit Hangout name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HangoutName' => $this->request->data['editHangoutName'],
              ]);
          if ($report->dirty('Hangout Name') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hangout Name is successfully changed');
            } else {
                $this->Flash->error('Hangout Name was not saved');
            }
          }
      }
      //edit Hangout street
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HangoutStreet' => $this->request->data['editHangoutStreet'],
              ]);
          if ($report->dirty('HangoutStreet') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hangout Street is successfully changed');
            } else {
                $this->Flash->error('Hangout Street was not saved');
            }
          }
      }
      //edit Hangout street number
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HangoutNumber' => $this->request->data['editHangoutNumber'],
              ]);
          if ($report->dirty('HangoutNumber') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hangout Street Number is successfully changed');
            } else {
                $this->Flash->error('Hangout Street Number was not saved');
            }
          }
      }
      //edit Hangout city
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HangoutCity' => $this->request->data['editHangoutCity'],
              ]);
          if ($report->dirty('HangoutCity') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hangout City is successfully changed');
            } else {
                $this->Flash->error('Hangout City was not saved');
            }
          }
      }
      //edit Hangout state
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HangoutState' => $this->request->data['editHangoutState'],
              ]);
          if ($report->dirty('HangoutState') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hangout State is successfully changed');
            } else {
                $this->Flash->error('Hangout State was not saved');
            }
          }
      }
      //edit Hangout zip
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HangoutZip' => $this->request->data['editHangoutZip'],
              ]);
          if ($report->dirty('HangoutZip') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hangout Zip is successfully changed');
            } else {
                $this->Flash->error('Hangout Zip was not saved');
            }
          }
      }
      //edit Hangout misc
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HangoutMisc' => $this->request->data['editHangoutMisc'],
              ]);
          if ($report->dirty('HangoutMisc') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hangout Misc Info is successfully changed');
            } else {
                $this->Flash->error('Hangout Misc Info was not saved');
            }
          }
      }
      //edit Workplace name
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'HangoutName' => $this->request->data['editHangoutName'],
              ]);
          if ($report->dirty('Hangout Name') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Hangout Name is successfully changed');
            } else {
                $this->Flash->error('Hangout Name was not saved');
            }
          }
      }
      //edit Workplace street
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'WorkplaceStreet' => $this->request->data['editWorkplaceStreet'],
              ]);
          if ($report->dirty('WorkplaceStreet') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Workplace Street is successfully changed');
            } else {
                $this->Flash->error('Workplace Street was not saved');
            }
          }
      }
      //edit Workplace street number
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'WorkplaceNumber' => $this->request->data['editWorkplaceNumber'],
              ]);
          if ($report->dirty('WorkplaceNumber') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Workplace Street Number is successfully changed');
            } else {
                $this->Flash->error('Workplace Street Number was not saved');
            }
          }
      }
      //edit Workplace city
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'WorkplaceCity' => $this->request->data['editWorkplaceCity'],
              ]);
          if ($report->dirty('WorkplaceCity') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Workplace City is successfully changed');
            } else {
                $this->Flash->error('Workplace City was not saved');
            }
          }
      }
      //edit Workplace state
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'WorkplaceState' => $this->request->data['editWorkplaceState'],
              ]);
          if ($report->dirty('WorkplaceState') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Workplace State is successfully changed');
            } else {
                $this->Flash->error('Workplace State was not saved');
            }
          }
      }
      //edit Workplace zip
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'WorkplaceZip' => $this->request->data['editWorkplaceZip'],
              ]);
          if ($report->dirty('WorkplaceZip') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Workplace Zip is successfully changed');
            } else {
                $this->Flash->error('Workplace Zip was not saved');
            }
          }
      }
      //edit Workplace misc
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'WorkplaceMisc' => $this->request->data['editWorkplaceMisc'],
              ]);
          if ($report->dirty('WorkplaceMisc') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Workplace Misc Info is successfully changed');
            } else {
                $this->Flash->error('Workplace Misc Info was not saved');
            }
          }
      }
      //edit Workplace start date
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'WorkplaceStartDate' => $this->request->data['editWorkplaceStartDate'],
              ]);
          if ($report->dirty('WorkplaceStartDate') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Workplace Start Date is successfully changed');
            } else {
                $this->Flash->error('Workplace Start Date was not saved');
            }
          }
      }
      //edit Workplace end date
      if(!empty($this->request->data)) {
          $report = $this->Reports->patchEntity($report, [
              'WorkplaceEndDate' => $this->request->data['editWorkplaceEndDate'],
              ]);
          if ($report->dirty('WorkplaceEndDate') == true){
            if ($this->Reports->save($report)) {
                $this->Flash->success('The Workplace End Date is successfully changed');
            } else {
                $this->Flash->error('Workplace End Date was not saved');
            }
          }
      }

      $this->set('report',$report);
    }
//function to display the public detailed report
//this report has all readonly fields
    public function publicDetailedReport($Report_ID = null) {
      $report = $this->Reports->get($Report_ID);
      $this->set(compact('report'));
    }
//function to approve and apply case number to reports
public function approveModal($Report_ID = null) {

  //load user for home button
  $this->loadModel('Users');
  $user =$this->Users->get($this->Auth->user('id'));
  $this->set('user',$user);

  //load reports model
  $report = $this->Reports->get($Report_ID);
  $this->set(compact('report'));

  //change casenumber and status
  if(!empty($this->request->data)) {
      $report = $this->Reports->patchEntity($report, [
          'CaseNumber' => $this->request->data['report_case_number'],
          'status' => 'In Progress',
          ]);
      if ($report->dirty('CaseNumber') == true){
        if ($this->Reports->save($report)) {

            $this->Flash->success('The case number has been saved.');
        } else {
            $this->Flash->error('Unable to add the case number');
        }
      }
    }

    $this->set('report',$report);

}

//function to mark the report status as found-submit
public function markFound($Report_ID = null){

  //load user for home button
  $this->loadModel('Users');
  $user =$this->Users->get($this->Auth->user('id'));
  $this->set('user',$user);

  //load reports model
  $report = $this->Reports->get($Report_ID);
  $this->set(compact('report'));

  //change status to found
  $report = $this->Reports->patchEntity($report, [
    'status' => 'Found'
  ]);
  if ($this->Reports->save($report)) {

      $this->Flash->success('The report has been marked as Found');
  } else {
      $this->Flash->error('Unable to mark as Found');
  }
}

}
?>
